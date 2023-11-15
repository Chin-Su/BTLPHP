<?php
    // session_start();
?>


<?php
    // if($_SESSION['cart'])
    // {
       
    // }
?>

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
        if(isset($_SESSION['cart'])){
            $i = 0;
            $thanhtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien += $cart_item['giatien'] * $cart_item['soluong'];
    ?>
    <tr style="height: 24px;">
        <td><?php echo ++ $i;?></td>
        <td style="font-weight: bold; color: #cf6b50"><?php echo $cart_item['tensanpham'];?></td>
        <td><?php echo number_format($cart_item['giatien']).' vnđ';?></td>
        <td>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'];?>"><i class="fa-solid fa-plus"></i></a>
            <?php echo $cart_item['soluong'];?>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'];?>"><i class="fa-solid fa-minus"></i></a>
        </td>
        <td><?php echo number_format($cart_item['giatien'] * $cart_item['soluong']).' vnđ';?></td>
        <td><a class="xoa" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'];?>">Xóa</a></td>
    </tr>
    <?php }?>
    <tr align="right">
        <td colspan="6" style="font-weight: bold;">Tổng tiền: <span style="color:red"><?php echo number_format($thanhtien).' vnđ'; ?></span>ㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>       
    </tr>
    <tr align="center">
        <?php
            if(isset($_SESSION['dangky'])){

        ?>
        <td colspan="5"><button style="font-weight: bold;"><a class="DH" style="padding: 12px"; href="./pages/main/thanhtoan.php">Đặt hàng</a></button></td> 
        <?php
            }else{
        ?>
    <!-- background-color: #015e00; -->
        <td colspan="5"><button style="font-weight: bold; height: 30px;background-color:#015e00;"><a style="padding: 12px;" class="DK" href="index.php?quanly=dangkydathang">Đăng ký đặt hàng</a></button></td> 
        <?php
            }
        ?>
    </tr>
    <?php }else{?>
    <tr style="height: 45px;" align="center" height="24px"><td colspan="6">Hiện không có sản phẩm nào trong giỏ hàng!</td></tr>
    <?php }?>
</table>