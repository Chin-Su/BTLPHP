<?php
    $get = "SELECT * FROM tbl_danhmuc";
    $row_get = mysqli_query($my_connect, $get);
?>

<ul class="sub-menu">
    <?php while($row = mysqli_fetch_array($row_get)) {?>
    <li><a href="index.php?quanly=danhmucsach&id=<?php echo $row['id_danhmuc'];?>"><?php echo $row['tendanhmuc'];?></a></li>
    <?php }?>
</ul>