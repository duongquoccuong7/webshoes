document.querySelectorAll(".slide-topic, .slide-product").forEach(initSlider);

function initSlider(section) {
  const slide = section.querySelector(".slide");
  const btnPrev = section.querySelector(".slide-btn-prev");
  const btnNext = section.querySelector(".slide-btn-next");

  let current = 0;
  const itemWidth = 310;

  function getMax() {
    const visibleWidth = section.offsetWidth;
    const totalWidth = slide.scrollWidth;
    return Math.max(0, Math.floor((totalWidth - visibleWidth) / itemWidth));
  }

  function update() {
    const max = getMax();

    btnPrev.classList.toggle("active", current > 0);
    btnNext.classList.toggle("active", current < max);

    slide.style.transform = `translateX(-${current * itemWidth}px)`;
  }

  function next() {
    const max = getMax();
    if (current < max) current++;
    update();
  }

  function prev() {
    if (current > 0) current--;
    update();
  }

  btnNext.addEventListener("click", next);
  btnPrev.addEventListener("click", prev);

  update(); // init trạng thái
}

///Slide

const slides = document.querySelector(".siderbar-list");
const slide_item = document.querySelectorAll(".siderbar-list > a ");
const presider = document.querySelector(".siderbar-btn-prev");
const nextsider = document.querySelector(".siderbar-btn-next");
let currentIndex = 0;
const totalSlides = slide_item.length;
function updateslide() {
  slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
nextsider.addEventListener("click", () => {
  currentIndex++;
  if (currentIndex >= totalSlides) {
    currentIndex = 0;
  }
  console.log(currentIndex);
  updateslide();
});

presider.addEventListener("click", () => {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = totalSlides - 1;
  }
  updateslide();
});
setInterval(() => {
  currentIndex++;
  if (currentIndex >= totalSlides) {
    currentIndex = 0;
  }
  updateslide();
}, 5000);
// dropdown menu
const items = document.querySelectorAll(".item-sidebar");
console.log(items);
items.forEach((item) => {
  const parent = item.querySelector(".item-dash");

  parent.addEventListener("click", () => {
    item.classList.toggle("active");
  });
});

// size giày
const rangeMin = document.querySelector("#range-min");
const rangeMax = document.querySelector("#range-max");

const minValue = document.querySelector("#min-value");
const maxValue = document.querySelector("#max-value");

rangeMin.addEventListener("input", () => {
  if (+rangeMin.value >= +rangeMax.value) {
    rangeMin.value = rangeMax.value - 1;
  }

  minValue.innerText = rangeMin.value;
});

rangeMax.addEventListener("input", () => {
  if (+rangeMax.value <= +rangeMin.value) {
    rangeMax.value = +rangeMin.value + 1;
  }

  maxValue.innerText = rangeMax.value;
});
// màu sản phẩm
const colorBtn = document.querySelectorAll(".color-btn");

const colorName = document.querySelector(".color-name");

const productColor = document.querySelector("#product-color");

colorBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    colorBtn.forEach((item) => {
      item.classList.remove("active");
    });

    btn.classList.add("active");

    const color = btn.dataset.color;

    colorName.innerText = color;

    productColor.value = color;

    console.log(productColor.value);
  });
});
