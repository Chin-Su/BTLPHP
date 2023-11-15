<?php
session_start();
if (isset($_POST['dangky'])) {
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $hovaten = $_POST['hovaten'];
    $sodienthoai = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($my_connect, "INSERT INTO tbl_dangky(taikhoan,matkhau,hovaten,sodienthoai,email,diachi) 
        VALUE('" . $taikhoan . "','" . $matkhau . "','" . $hovaten . "','" . $sodienthoai . "','" . $email . "','" . $diachi . "')");
    // if ($sql_dangky) {
    //     //     $_SESSION['id_khachhang'] = mysqli_insert_id($my_connect);
    //     //     header('location:index.php?quanly=camon');
    //     // header('location:../../index.php?quanly=thanhtoan');
    //     echo ("Đăng ký thanh công!!");
    // }
}
?>

<style>

</style>
<div class="dangkydanghang">

    <form class="register" style="width: 100%; margin-top: 0;" action="" method="POST">
        <div class="form-group">
            <label for="hovaten">
                Họ và tên
            </label>
            <input id="hovaten" type="text" size="56" name="hovaten">
        </div>
        <div class="form-group">
            <label for="sodienthoai">
                Số điện thoại
            </label>
            <input id="sodienthoai" type="text" size="56" name="sodienthoai">
        </div>
        <div class="form-group">
            <label for="email">
                Email
            </label>
            <input id="email" type="text" size="56" name="email">
        </div>
        <div class="form-group">
            <label for="diachi">
                Địa chỉ
            </label>
            <input id="diachi" type="text" size="56" name="diachi">
        </div>
        <div class="form-group form-group__submit">
            <!-- <input class="register__submit" type="submit" name="dangky" value="Đăng ký"> -->
        </div>

        </table>
    </form>
    <table width="100%" style="font-size: 14px; background-image: url(./images/headerbg.png); padding: 15px; margin-top: 15px;">
        <tr>
            <th align="left">STT</th>
            <th align="left">Tiêu đề</th>
            <th align="left">Giá</th>
            <th align="left">Số lượng</th>
            <th align="left">Tổng cộng</th>
            <th></th>
        </tr>
        <?php
        if (isset($_SESSION['cart'])) {
            $i = 0;
            $thanhtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien += $cart_item['giatien'] * $cart_item['soluong'];
        ?>
                <tr style="height: 24px;">
                    <td><?php echo ++$i; ?></td>
                    <td style="font-weight: bold; color: #cf6b50"><?php echo $cart_item['tensanpham']; ?></td>
                    <td><?php echo number_format($cart_item['giatien']) . ' vnđ'; ?></td>
                    <td>
                        <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
                        <?php echo $cart_item['soluong']; ?>
                        <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-minus"></i></a>
                    </td>
                    <td><?php echo number_format($cart_item['giatien'] * $cart_item['soluong']) . ' vnđ'; ?></td>
                </tr>
            <?php } ?>
            <tr align="right" >
                <td colspan="5"   style="font-weight: bold; text-align: right;/">Tổng tiền: <span style="color:red"><?php echo number_format($thanhtien) . ' vnđ'; ?></span>ㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
            </tr>
            <tr align="center">
                <?php
                if (isset($_SESSION['dangky'])) {

                ?>
                    <td colspan="5"><button style="font-weight: bold;"><a  href="pages/main/dangkydathahg/camon.php">Đặt hàng</a></button></td>
                <?php
                } else {
                ?>
                    <!-- background-color: #015e00; -->
                    <td colspan="5"><button style="font-weight: bold; height: 30px;background-color:#015e00;"><a style="padding: 12px;" class="DK" href="index.php?quanly=camon">Đặt hàng</a></button></td>
                <?php
                }
                ?>
            </tr>
        <?php } else { ?>
            <tr style="height: 45px;" align="center" height="24px">
                <td colspan="6">Hiện không có sản phẩm nào trong giỏ hàng!</td>
            </tr>
        <?php } ?>
    </table>
</div>