<!-- <h3>Thêm sản phẩm</h3>
    <table border="1" width="50%" style="border-collapse:collapse">
        <caption>Điền sản phẩm</caption>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" id=""></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp" id=""></td>
        </tr> -->
        <!-- <tr>
            <td>Giá tiền</td>
            <td><input type="text" name="giatien" id=""></td>
        </tr> -->
        <!-- <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" id="" td>
        </tr> -->
        <!-- <tr>
            <td>Tác giả</td>
            <td><input type="text" name="tacgia" id=""></td>
        </tr> -->
        <!-- <tr>
            <td>Nhà xuất bản</td>
            <td><input type="text" name="nxb" id=""></td>
        </tr> -->
        <!-- <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="anh" id=""></td>
        </tr> -->
        <!-- <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" id="" cols="30" rows="10" style="resize:none"></textarea></td>
        </tr> -->
   


<form action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">

    <div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm sản phẩm</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Tên sản phẩm:</label>
				  <input required="true"  name="tensanpham"  type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="email">Mã sản phẩm:</label>
				  <input required="true"  name="masp" type="text" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Giá tiền:</label>
				  <input required="true"  name="giatien" type="text" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Số lượng:</label>
				  <input required="true"  name="soluong" type="text" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Tác giả:</label>
				  <input required="true"  name="tacgia" type="text" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Nhà xuất bản:</label>
				  <input required="true"  name="nxb" type="text" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Hình ảnh:</label>
				  <input required="true"  name="anh" type="file" class="form-control" id="email">
				</div>
                <div class="form-group">
				  <label for="email">Nội dung:</label>
                  <textarea class="form-control" name="noidung" id="" cols="30" rows="10" style="resize:none"></textarea>
				</div>
                <div class="form-group">
				  <label for="email">Danh mục:</label>
                  <select class="form-control" name="danhmuc">
                    <?php 
                        $sql = "SELECT * from tbl_danhmuc order by id_danhmuc desc";
                        $danhmuc = mysqli_query($my_connect, $sql);
                        while($row = mysqli_fetch_array($danhmuc)){
                    ?>
                    <option value="<?php echo $row['id_danhmuc'];?>"><?php echo $row['tendanhmuc'];?></option>
                    <?php }?>
                    </select>
				</div>
                <input style="margin-bottom: 12px;" class="btn btn-success"  type="submit" name="themsanpham" id="" value="Thêm sản phẩm">
			</div>
		</div>
	</div>
</form> 
