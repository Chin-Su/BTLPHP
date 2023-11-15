<?php
$sql_prod = "SELECT * from tbl_sanpham where tbl_sanpham.id_sanpham = '$_GET[id]' order by tbl_sanpham.id_sanpham desc";
$prod = mysqli_query($my_connect, $sql_prod);
$row = mysqli_fetch_array($prod);
?>

<form action="pages/main/themgiohang.php?idsanpham=<?php echo $row['id_sanpham'];?>" method="post">
    <div class="product">
        <div class="img-prod">
            <img src="./admin/modules/sanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="">
        </div>
        <div class="main-detail">
            <h3><?php echo $row['tensanpham']; ?></h3>
            <hr size="6" color="#ccc">
            <ul class="sub-detail-left">
                <li>• Mã tác phẩm: <b><?php echo $row['masp']; ?></b></li>
                <li>• Tác giả: <b><?php echo $row['tacgia']; ?></b></li>
                <li>• Nhà xuất bản: <b><?php echo $row['nxb']; ?></b></li>
            </ul>
            <div class="sale">
                <p style="padding-bottom: 25px"><span>Giá bán: <b><?php echo number_format($row['giatien']) . ' vnđ'; ?></b></span></p>
                <div class="amount">
                            
                </div>
                <div class="buy">
                    <input type="submit" name="themvaogiohang" class="giohang" value="THÊM VÀO GIỎ HÀNG">
                    <!-- <a href="../../dangky.php"><input type="submit" name="muangay" class="mua" value="ĐẶT HÀNG"></a> -->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <hr size="6" color="#ccc" width="93%" style="margin-left: auto; margin-right: auto; margin-bottom: 15px">
        <p align="center" style="font-size: 24px; color: #0f5731;"><i>Giới thiệu sách</i></p>
        <p style="padding: 15px 30px; text-align: justify; font-size: 14px; line-height: 21px"><?php echo $row['noidung']; ?></p>
    </div>
</form>