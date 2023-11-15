<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5">
          <img src="./images/logo.png" alt="" class="header__left-img">
        </a>
        <ul class="list-unstyled components mb-5">
          <li>
            <a class="nav-link" href="index.php?action=quanlydanhmuc&query=them">Quản lý danh mục sản phẩm</a>
          </li>
          <li>
            <a class="nav-link" href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a>
          </li>
          <li><a class="nav-link" href="index.php?action=quanlynguoidung&query=lietke">Quản lý người dùng</a></li>
        </ul>

        <div class="footer">
          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            © 2023 - Bản quyền của Công Ty Cổ Phần Văn Hoá và Truyền Thông TNHHV - tnhhv.com.vn
        </div>

      </div>
    </nav>

    <!-- Page Content  -->
    <div style="height: 100vh; overflow-y: scroll;" id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a href="?action=dangxuat&query=''">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
          </a>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlydanhmuc&query=them">Quản lý danh mục sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=quanlynguoidung&query=lietke">Quản lý người dùng</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div>
        <?php
        include("modules/main.php");
        ?>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>