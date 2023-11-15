<?php
include("../../config/config.php");

$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
    $sql_them = "INSERT into tbl_danhmuc(tendanhmuc, thutu) VALUE('" . $tendanhmuc . "', '" . $thutu . "')";
    mysqli_query($my_connect, $sql_them);
    header("Location:../../index.php?action=quanlydanhmuc&query=them");
}
elseif(isset($_POST['suadanhmuc']))
{
    $id = $_GET['iddanhmuc'];
    echo $id;
    $sua = "UPDATE tbl_danhmuc set tendanhmuc = '$tendanhmuc', thutu = '$thutu' where id_danhmuc = '$id'";
    mysqli_query($my_connect, $sua);
    header("Location:../../index.php?action=quanlydanhmuc&query=them");
}
else
{
    $id = $_GET['iddanhmuc'];
    $delete = "DELETE from tbl_danhmuc where id_danhmuc = '$id'";
    mysqli_query($my_connect, $delete);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
}
?>