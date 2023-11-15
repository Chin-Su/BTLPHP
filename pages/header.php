<?php
session_start();
?>

<div class="header">
    <div class="header__left">
        <a href="index.php">
            <img src="./images/logo.png" alt="" class="header__left-img">
        </a>
    </div>
    <div class="header__right">
        <div class="header__right-top">
            <?php
            if (!isset($_SESSION['dangnhap'])) {
            ?>
                <a href="./signin/signin.php">Đăng ký</a>
                <a href="./user/loginuser.php?status=true">Đăng nhập</a>
            <?php
            } else {
            ?>
                <a href="index.php?dangxuat=1">Đăng xuất : <?php if (isset($_SESSION['dangnhap'])) {
                                                                echo $_SESSION['dangnhap'];
                                                            } ?></a>
            <?php
            }
            if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
                unset($_SESSION['dangnhap']);
                header('Location:./user/loginuser.php?status=true');
            }
            ?>
        </div>
        <div class="header__right-bottom">
            <a href="index.php?quanly=giohang">
                <img src="./images/cart.png" alt="" class="header__right-bottom-img">
            </a>

            <form method="POST" action="index.php?quanly=timkiem">
                <div class="header__right-bottom-search">
                    <input name="tukhoa" class="header__right-bottom-search-submit" type="text" placeholder="Nhập từ khóa  tìm  kiếm..." />
                    <button name="timkiem" class="header__right-bottom-search-icon">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>