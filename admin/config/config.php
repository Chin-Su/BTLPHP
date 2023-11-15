<?php
    $my_connect = new mysqli('localhost', 'root', '', 'book_database');

    if($my_connect -> connect_errno)
    {
        echo "Kết nối không thành công!".$my_connect->connect_errno;
        exit();
    }
?>