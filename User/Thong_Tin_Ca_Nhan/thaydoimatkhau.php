<head>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
    <title>BELLA VITA INTERIOR</title>
    <style>
    form {
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    select {
        width: 600px;
        padding: 10px;
        border: 1px solid #CCC;
        border-radius: 5px;
        font-size: 16px;
    }
    </style>
</head>

<body>
<div style="position: absolute;width: 1000px;height: 400px;background-color: #FFF; margin-left: 650px;margin-top: 150px;">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <h2 style="font-weight: 400;">Đổi mật khẩu</h2>
                    <hr>
                    <?php
                        include '../Main_NguoiDung/connect.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $mat_khau = $_POST["old-password"];
                            $newPassword = $_POST["new-password"];
                            $confirmPassword = $_POST["confirm-password"];
                        
                            // Kiểm tra mật khẩu mới và xác nhận mật khẩu
                            if ($newPassword === $confirmPassword) {
                                // Mã hóa mật khẩu mới
                                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                        
                                // Cập nhật mật khẩu trong cơ sở dữ liệu
                                $sql = "UPDATE user= SET password = ? WHERE mat_khau = $mat_khau";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("ss", $hashedPassword, $mat_khau);
                        
                                if ($stmt->execute()) {
                                    echo "Mật khẩu đã được thay đổi thành công.";
                                } else {
                                    echo "Lỗi trong quá trình thay đổi mật khẩu: " . $stmt->error;
                                }
                        
                                $stmt->close();
                            } else {
                                echo "Mật khẩu mới và xác nhận mật khẩu không khớp.";
                            }
                        }
                        
                    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <label for="old-password">Mật khẩu cũ</label>
                        <input type="password" name="old-password" id="old-password"><br><br>
                        <label for="new-password">Mật khẩu</label>
                        <input type="password" name="new-password" id="new-password"><br><br>
                        <label for="confirm-password">Nhập lại mật khẩu</label>
                        <input type="password" name="confirm-password" id="confirm-password"><br><br>
                        <input type="submit"  class="btn btn-primary" style="margin-top: 6px;" value="Lưu">
                    </form>
                </li>
            </ul>
        </div>
    </div>
<?php 
    include 'formthongtin.php';
?>
</body>

</html>