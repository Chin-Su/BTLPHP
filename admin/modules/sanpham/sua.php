<?php
    $sua = "SELECT * FROM tbl_sanpham where id_sanpham = '$_GET[idsanpham]'";
    $row_sua = mysqli_query($my_connect, $sua);
?>

<h3>Thêm sản phẩm</h3>
<?php while($row = mysqli_fetch_array($row_sua)){?>
<form action="modules/sanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'];?>" method="post" enctype="multipart/form-data">
    <table border="1" width="50%" style="border-collapse:collapse">
        <caption>Sửa sản phẩm</caption>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensanpham']; ?>" name="tensanpham" id=""></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text"  value="<?php echo $row['masp']; ?>" name="masp" id=""></td>
        </tr>
        <tr>
            <td>Giá tiền</td>
            <td><input type="text"  value="<?php echo $row['giatien']; ?>" name="giatien" id=""></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text"  value="<?php echo $row['soluong']; ?>" name="soluong" id=""></td>
        </tr>
        <tr>
            <td>Tác giả</td>
            <td><input type="text"  value="<?php echo $row['tacgia']; ?>" name="tacgia" id=""></td>
        </tr>
        <tr>
            <td>Nhà xuất bản</td>
            <td><input type="text"  value="<?php echo $row['nxb']; ?>" name="nxb" id=""></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="anh" id=""><br><br>
                <img src="modules/sanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="" height="100px">
            </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" id="" cols="30" rows="10" style="resize:none"><?php echo $row['noidung']; ?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php 
                        $sql = "SELECT * from tbl_danhmuc order by id_danhmuc desc";
                        $danhmuc = mysqli_query($my_connect, $sql);
                        while($row = mysqli_fetch_array($danhmuc)){
                    ?>
                    <option value="<?php echo $row['id_danhmuc'];?>"><?php echo $row['tendanhmuc'];?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" id="" value="Sửa sản phẩm"></td>
        </tr>
    </table>
</form>
<?php }?>