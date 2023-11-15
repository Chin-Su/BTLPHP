<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($my_connect,$sql_pro);
	
?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<ul style="list-style: none; margin-top: 12px" class="product_list">
    <?php
		while($row = mysqli_fetch_array($query_pro)){ 
		?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'];?>"><img
                src="./admin/modules/sanpham/uploads/<?php echo $row['hinhanh']; ?>" alt=""></a>
    </li>
    <?php
		} 
		?>
</ul>