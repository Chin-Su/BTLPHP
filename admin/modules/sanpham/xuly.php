<?php
include("../../config/config.php");

$tensp = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giatien = $_POST['giatien'];
$soluong = $_POST['soluong'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$noidung = $_POST['noidung'];
$id_danhmuc = $_POST['danhmuc'];

$hinhanh = $_FILES['anh']['name'];
$hinhanh_tmp = $_FILES['anh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT into tbl_sanpham(tensanpham, masp, giatien, soluong, tacgia, nxb, hinhanh, noidung, id_danhmuc)
    value('$tensp', '$masp', '$giatien', '$soluong', '$tacgia', '$nxb', '$hinhanh', '$noidung', '$id_danhmuc')";
    mysqli_query($my_connect, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header("Location:../../index.php?action=quanlysanpham&query=them");
} elseif (isset($_POST['suasanpham'])) {
    // Sửa
    $id = $_GET['idsanpham'];

    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql = "SELECT * from tbl_sanpham where id_sanpham = '$id'";
        $query = mysqli_query($my_connect, $sql);

        $sua = "UPDATE tbl_sanpham set tensanpham = '$tensp', masp = '$masp', giatien = '$giatien', soluong = '$soluong', tacgia = '$tacgia',
                                    nxb = '$nxb', hinhanh = '$hinhanh', noidung = '$noidung', id_danhmuc = '$id_danhmuc' where id_sanpham = '$_GET[idsanpham]'";
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
        }
    } else {
        $sua = "UPDATE tbl_sanpham set tensanpham = '$tensp', masp = '$masp', giatien = '$giatien', soluong = '$soluong', tacgia = '$tacgia',
                                    nxb = '$nxb', noidung = '$noidung', id_danhmuc = '$id_danhmuc' where id_sanpham = '$_GET[idsanpham]'";
    }
    mysqli_query($my_connect, $sua);
    header("Location:../../index.php?action=quanlysanpham&query=them");
} else {
    // Xóa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * from tbl_sanpham where id_sanpham = '$id'";
    $query = mysqli_query($my_connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $delete = "DELETE from tbl_sanpham where id_sanpham = '$id'";
    mysqli_query($my_connect, $delete);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
