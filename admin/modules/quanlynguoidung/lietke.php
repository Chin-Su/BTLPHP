

<?php
    $sql_lietke_nguoidung="SELECT * FROM tbl_dangky ORDER BY id_khachhang DESC";
    $result_lietke_nguoidung= mysqli_query($my_connect,$sql_lietke_nguoidung);
?>


<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h3>Liệt kê người dùng</h3></div>
                    <div class="col-sm-4">
                        <!-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button> -->
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name </th>
                        <th>Account</th>
                        <th>Email</th>
                        <th>Number phone</th>
                        <th>Address</th>
                        <th colspan="2"></th>
                        <th>Chức vụ</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        $i = 0;
        while($row=mysqli_fetch_array($result_lietke_nguoidung)){
        $i++;
        
   
            ?>

            <tr>
                <td><?php echo $i ?></td>
                <td> <?php echo $row ['hovaten']?></td>
                <td> <?php echo $row ['taikhoan']?></td>
                <td> <?php echo $row ['email']?></td>
                <td> <?php echo $row ['sodienthoai']?></td>
                <td style="width:100px;"> <?php echo $row ['diachi']?></td>
                <td>
                    <a href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id_khachhang'] ?>"> Sửa </a>
                </td>
                <td>
                    <a href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id_khachhang']?>">Xóa</a>
                </td>
                <td><?php if($row['chucvu']==1){
                        echo "Bán hàng";
                }else{
                        echo "Không";
                }?>
                </td>
            </tr>

            <?php
                }
            ?>
                </tbody>
            </table>
        </div>
    </div>
