<?php
require_once './templates/layouts/dashboard/header.php';
?>
<!-- start main -->
<div class="main-wrap">
    <div class="sidebar">
        <ul class="sidebar-list">
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-gauge-high icon-left-menu"></i><span>Thống Kê</span><i
                        class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-box-archive icon-left-menu"></i><span>Sản Phẩm</span><i
                        class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
                <ul class="dropdown-menu-child">
                    <li class="item-menu-child"><i class="fa-regular fa-square-minus icon-child-menu"></i><a href="">
                            Danh Sách
                            Sản Phẩm
                        </a></li>
                    <li class="item-menu-child"><i class="fa-solid fa-plus icon-child-menu"></i><a
                            href=".//product/add.html">Thêm Mới
                            Sản Phẩm</a>
                    </li>
                </ul>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-id-card icon-left-menu"></i><span>Người
                        Dùng</span><i class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
                <ul class="dropdown-menu-child">
                    <li class="item-menu-child"><i class="fa-regular fa-square-minus icon-child-menu"></i><a href="">
                            Danh Sách
                            Người Dùng
                        </a></li>
                    <li class="item-menu-child"><i class="fa-solid fa-plus icon-child-menu"></i><a href="">Thêm Mới
                            Người Dùng</a>
                    </li>
                </ul>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-baby-carriage icon-left-menu"></i><span>Đơn
                        Hàng</span><i class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
                <ul class="dropdown-menu-child">
                    <li class="item-menu-child"><i class="fa-regular fa-square-minus icon-child-menu"></i><a href="">
                            Danh Sách
                            Đơn
                            Hàng
                        </a></li>
                    <li class="item-menu-child"><i class="fa-solid fa-solid fa-plus icon-child-menu"></i><a href="">
                            Thêm Mới
                            Đơn
                            Hàng
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-bag-shopping icon-left-menu"></i><span>Khuyến
                        Mãi</span><i class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
                <ul class="dropdown-menu-child">
                    <li class="item-menu-child"><i class="fa-regular fa-square-minus icon-child-menu"></i><a href="">
                            Sản Phẩm
                            khuyến mãi
                        </a></li>
                    <li class="item-menu-child"><i class="fa-regular fa-square-minus icon-child-menu"></i><a href="">
                            Danh sách
                            Mã Khuyến mãi
                        </a></li>
                    <li class="item-menu-child"><i class="fa-solid fa-solid fa-plus icon-child-menu"></i><a href="">
                            Tạo Mới
                            Khuyến Mãi
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-truck icon-left-menu "></i><span>Giao Hàng</span><i
                        class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
                <ul class="dropdown-menu-child">
                    <li class="item-menu-child"><i class="fa-solid fa-solid fa-plus icon-child-menu"></i><a href="">
                            Thêm Phương Thức
                            Giao Hàng
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item-sidebar">
                <div class="item-dash">
                    <i class="fa-solid fa-bars-staggered icon-left-menu"></i><span>Khác</span><i
                        class="fa-solid fa-angle-right icon-right-menu"></i>
                </div>
            </li>
        </ul>
    </div>
    <div class="content-menu">

    </div>
</div>
<!-- end main -->
<?php
require_once './templates/layouts/dashboard/footer.php';
?>