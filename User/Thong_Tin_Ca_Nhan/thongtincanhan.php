<head>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
    <title>BELLA VITA INTERIOR</title>
    <style>
    .list-group {
        width: 200px;
        margin-right: 20px;
    }

    .list-group-item.active {
        background-color: #E8B85B;
        color: #FFF;
    }


    form {
        max-width: 800px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }


    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="tel"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #CCC;
        border-radius: 5px;
        font-size: 16px;
    }


    button[type="submit"] {
        grid-column: span 2;
        width: 100%;
        background-color: #E8B85B;
        color: #FFF;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #FFA500;
    }
    </style>
</head>

<body>
<div style="position: absolute;width: 1000px;height: 400px;background-color: #FFF; margin-left: 650px;margin-top: 150px;">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <h2 style="font-weight: 400;">Thông tin tài khoản</h2>
            <hr>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" value="<?php echo $hoTen; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="dob">Ngày sinh</label>
                    <input type="date" name="datebirth" value="<?php echo $ngaysinh; ?>">
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <select name="gender">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="tel" name="phone" value="<?php echo $sodienthoai; ?>">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" value="<?php echo $diachi; ?>">
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <button type="submit">Cập nhật</button>
                </div>
            </form>
        </li>
    </ul>
</div>
<?php 
    include 'formthongtin.php';
?>
</body>