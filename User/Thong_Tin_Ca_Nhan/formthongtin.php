<head>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
    <title>BELLA VITA INTERIOR</title>
</head>

<body>
    <?php 
        include '../Main_NguoiDung/navbarweb.php';
        include '../Main_NguoiDung/connect.php';
    ?>
<?php
session_start();

$username = $_SESSION['ho_ten'];
?>
    <div class="container pt-5">
        <div class="list-group" style="width: 250px;">
            <a class="list-group-item list-group-item-action active" aria-current="true"><?php echo $username; ?></a>
            <a href="thongtincanhan.php" class="list-group-item list-group-item-action">Thông tin tài khoản</a>
            <a href="thaydoimatkhau.php" class="list-group-item list-group-item-action">Thay đổi mật khẩu</a>
            <a href="donhang.php" class="list-group-item list-group-item-action">Đơn hàng</a>
            <a href="http://localhost/Noi_That/MatVuNam/Dangnhap_Dangky/" class="list-group-item list-group-item-action">Thoát</a>
        </div>
        <div style="width: 1000px;background-color: #FFF; margin-left: 300px;height: 303px;"></div>
    </div>
    <?php 
        include '../Main_NguoiDung/footerweb.php';
    ?>
</body>

</html>