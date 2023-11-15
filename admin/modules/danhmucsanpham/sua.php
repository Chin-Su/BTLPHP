<?php
    $sua = "SELECT * FROM tbl_danhmuc where id_danhmuc = '$_GET[iddanhmuc]'";
    $row_sua = mysqli_query($my_connect, $sua);
?>

<h3>Sửa danh mục sản phẩm</h3>
<form action="modules/danhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']; ?>" method="post">
    <table border="1" width="50%" style="border-collapse:collapse">
        <caption>Điền danh mục sản phẩm</caption>
        <?php 
            while($row = mysqli_fetch_array($row_sua))
            {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" name="tendanhmuc" id="" value="<?php echo $row['tendanhmuc']; ?>"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutu" id="" value="<?php echo $row['thutu']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suadanhmuc" id="" value="Sửa danh mục"></td>
            </tr>
        <?php
            }
        ?>
    </table>
</form>