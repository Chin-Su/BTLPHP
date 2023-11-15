<?php
session_start();
include("../../admin/config/config.php");
// them so luong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $cart_item['soluong'],
                'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
            );
            $_SESSION['cart'] = $product;
        } else {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $cart_item['soluong'] + 1,
                'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
            );
            $_SESSION['cart'] = $product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}
// tru so luong
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $cart_item['soluong'],
                'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
            );
            $_SESSION['cart'] = $product;
        } else {
            $sl = $cart_item['soluong'];
            if ($sl > 1) {
                $product[] = array(
                    'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $sl - 1,
                    'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
                );
                $_SESSION['cart'] = $product;
            } else
                $_SESSION['cart'] = $product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}
// xoa san pham
if (isset($_SESSION) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array(
                'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $cart_item['soluong'],
                'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
            );
        }
        $_SESSION['cart'] = $product;
        header("Location:../../index.php?quanly=giohang");
    }
}
// them san pham
if (isset($_POST['themvaogiohang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * from tbl_sanpham where id_sanpham = '$id' limit 1";
    $query = mysqli_query($my_connect, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'tensanpham' => $row['tensanpham'], 'id' => $id, 'masp' => $row['masp'], 'giatien' => $row['giatien'], 'soluong' => $soluong,
            'tacgia' => $row['tacgia'], 'nxb' => $row['nxb'], 'hinhanh' => $row['hinhanh']
        ));

        if ($_SESSION['cart']) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $cart_item['soluong'] + 1,
                        'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
                    );
                    $found = true;
                } else {
                    $product[] = array(
                        'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'masp' => $cart_item['masp'], 'giatien' => $cart_item['giatien'], 'soluong' => $soluong,
                        'tacgia' => $cart_item['tacgia'], 'nxb' => $cart_item['nxb'], 'hinhanh' => $cart_item['hinhanh']
                    );
                }
            }
            if (!$found) {
                $_SESSION['cart'] = array_merge($new_product, $product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}
