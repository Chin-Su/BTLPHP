<?php
session_start();
if (!isset($_SESSION['dangnhapadmin'])) {
    header('Location:../user/loginuser.php?status=true');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Admin Config</title>
</head>

<body>
    <div class="wrapper">
        <?php
        include("config/config.php");
        // include("modules/header.php");
        include("modules/menu.php");
        // include("modules/main.php");
        // include("modules/footer.php");
        ?>
    </div>
    
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>