<head>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
    <title>BELLA VITA INTERIOR</title>
</head>

<body>
        <div style="position: absolute;width: 1000px;height: 400px;background-color: #FFF; margin-left: 650px;margin-top: 150px;">
            <h2 style="font-weight: 400;">Đơn hàng</h2>
            <hr>
            <table>
                <table class="table table-bordered table-hover vertical-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Thời gian tạo</th>
                            <th>Trạng thái đơn hàng</th>
                            <th>Trạng thái thanh toán</th>
                            <th>Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../Main_NguoiDung/connect.php';

                            $sql = "SELECT * FROM chi_tiet_don_hang";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Lặp qua mỗi hàng dữ liệu
                                while ($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                            echo '<td name="ma_don_hang";>' . $row['ma_don_hang'] . '</td>';
                                            echo '<td>' . $row['thoi_gian_dathang'] . '</td>';
                                            echo '<td>' . $row['trangthai_donhang'] . '</td>';
                                            echo '<td>' . $row['trangthai_thanhtoan'] . '</td>';
                                            echo '<td>' . number_format($row['gia']). ' đ'; '</td>';
                                        echo '</tr>';
                                }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>
                    </tbody>
                </table>
            </table>
        </div>
    <?php 
        include 'formthongtin.php';
    ?>
</body>