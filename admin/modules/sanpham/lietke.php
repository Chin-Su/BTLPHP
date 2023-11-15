<?php 
    $lietke = "SELECT * FROM tbl_sanpham, tbl_danhmuc where tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
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
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Mã sản phẩm</th>
                    <th>Giá tiền</th>
                    <th>Số lượng</th>
                    <th>Danh mục</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
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
                <td><?php echo $row['tensanpham'] ?></td>
                <td><img src="modules/sanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="" height="100px"></td>
                <td><?php echo $row['masp'] ?></td>
                <td><?php echo $row['giatien'] ?></td>
                <td><?php echo $row['soluong'] ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>
                <td><?php echo $row['tacgia'] ?></td>
                <td><?php echo $row['nxb'] ?></td>
                <td><a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a> | <a href="modules/sanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a></td>
            </tr>

            <?php
                }
            ?>
                </tbody>
            </table>
        </div>
    </div>
