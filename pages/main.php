<div id="main">
    <div class="slider-wrapper">
        <div class="slider">
            <div class="my-slides fade">
                <img src="./images/slide1.jpg" alt="" style="width:100%">
            </div>

            <div class="my-slides fade">
                <img src="./images/slide2.jpg" alt="" style="width:100%">
            </div>

            <div class="my-slides fade">
                <img src="./images/slide3.jpg" alt="" style="width:100%">
            </div>
        </div>
        <div class="dot-bottom" align="center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <div class="main-content">
        <div class="title-content">
            <div class="content-h2">
                <?php
                if (isset($_GET['quanly'])) {
                    $tam = $_GET['quanly'];
                } else
                    $tam = '';
                if ($tam == 'danhmuc')
                    echo "Sách bán chạy";
                elseif ($tam == 'khuyenmai')
                    echo "Chương trình khuyến mãi";
                elseif ($tam == 'lienhe')
                    echo "Liên hệ";
                elseif ($tam == 'dangky')
                    echo "Đăng Ký";    
                elseif ($tam == 'danhmucsach') {
                    $select_tendanhmuc = "SELECT * from tbl_danhmuc where id_danhmuc = '$_GET[id]' limit 1";
                    $tendanhmuc =  mysqli_query($my_connect, $select_tendanhmuc);
                    echo mysqli_fetch_array($tendanhmuc)['tendanhmuc'];
                } elseif ($tam == 'danhmuc')
                    echo "Sách bán chạy";
                elseif ($tam == 'sanpham')
                    echo "Thông tin sản phẩm";
                elseif($tam == 'giohang')
                    echo("Giỏ hàng");
                else
                    echo "Sách bán chạy";
                ?>
            </div>
        </div>

        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else
            $tam = '';
        if ($tam == 'danhmuc')
            include("main/index.php");
        elseif ($tam == 'danhmucsach')
            include("main/danhmuc.php");
        elseif ($tam == 'khuyenmai')
            include("main/khuyenmai.php");
        elseif ($tam == 'lienhe')
            include("main/lienhe.php");
        elseif ($tam == 'danhmuc')
            include("main/index.php");
        elseif ($tam == 'sanpham')
            include("main/sanpham.php");
        elseif($tam == 'giohang')
            include("main/giohang.php");
        elseif($tam == 'dangky')
            include("main/dangky.php");
        elseif($tam == 'thanhtoan')
            include("main/thanhtoan.php");
        elseif($tam == 'camon')
            include("main/camon.php"); 
        elseif($tam == 'dangkydathang')
            include("main/dangkydathang.php"); 
        elseif($tam == 'timkiem')
            include("main/timkiem.php");  
        else
            include("main/index.php");
        ?>
    </div>
</div>