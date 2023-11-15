<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query'])
        {
            $action = $_GET['action'];
            $query = $_GET['query'];
        }
        else
        {
            $action = '';
            $query = '';
        }
        if($action == 'quanlydanhmuc' && $query == 'them'){
            include("modules/danhmucsanpham/them.php");
            include("modules/danhmucsanpham/lietke.php");
        }
        elseif($action == 'quanlydanhmuc' && $query == 'sua')
        {
            include("modules/danhmucsanpham/sua.php");
        }
        elseif($action == 'quanlysanpham' && $query == 'them'){
            include("modules/sanpham/them.php");
            include("modules/sanpham/lietke.php");
        }
        elseif($action == 'quanlysanpham' && $query == 'sua')
        {
            include("modules/sanpham/sua.php");
        }
        elseif($action == 'quanlynguoidung' && $query == 'lietke')
        {
            include("modules/quanlynguoidung/lietke.php");
        }
        elseif($action == 'quanlynguoidung' && $query == 'sua')
        {
            include("modules/quanlynguoidung/sua.php");
        }
        elseif($action == 'dangxuat')
        {
            unset($_SESSION['dangnhapadmin']);
            header("location:../user/loginuser.php?status=true");
        }
        else
            include("modules/dashboard.php");
    ?>
</div>