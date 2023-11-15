
<?php 
    $lietke = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $row_lietke = mysqli_query($my_connect, $lietke);
?>


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h3>Liệt kê danh mục sản phẩm</h3></div>
                    <div class="col-sm-4">
                        <!-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button> -->
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Thứ tự</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($row_lietke))
                    {
                        $i++;
                ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['tendanhmuc'] ?></td>
                    <td><?php echo $row['thutu'] ?></td>
                    <td><a href="?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a> | <a href="modules/danhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a></td>
                </tr>

                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

