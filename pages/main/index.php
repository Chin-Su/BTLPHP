<?php
$sql_prod = "SELECT * from tbl_sanpham order by tbl_sanpham.id_sanpham desc limit 25";
$prod = mysqli_query($my_connect, $sql_prod);
?>

<ul class="product-list">
    <?php while($row = mysqli_fetch_array($prod)){?>
    <li>
        <a style="display: block; width: 100%; height: 100%" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'];?>"><img style="width: 100%; height: 100%;" src="./admin/modules/sanpham/uploads/<?php echo $row['hinhanh']; ?>" alt=""></a>
    </li>
    <?php }?>

</ul>