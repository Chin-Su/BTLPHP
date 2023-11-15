<?php
    include "../../config/config.php";
    $name=$_POST['hovatens'];
    $account = $_POST['taikhoans'];
    $email = $_POST['emails'];
    $numberphone = $_POST['dienthoais'];
    $address = $_POST['diachis'];
    $chucvu=$_POST['chucvus'];

   if(isset($_POST['suanguoidung'])){
        $sql_sua_nd="UPDATE tbl_dangky SET hovaten='".$name."',taikhoan='".$account."',email='".$email."',sodienthoai='".$numberphone."',diachi='".$address."',chucvu='".$chucvu."' WHERE id_khachhang='$_GET[idnguoidung]'";
        mysqli_query($my_connect,$sql_sua_nd);
        header('Location:../../index.php?action=quanlynguoidung&query=lietke');
    }else{
        $id=$_GET['idnguoidung'];
        $sql_xoa_nd="DELETE FROM tbl_dangky WHERE id_khachhang ='".$id."';";
        mysqli_query($my_connect,$sql_xoa_nd);
        header('Location:../../index.php?action=quanlynguoidung&query=lietke');
    }
?>