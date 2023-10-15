<head>
    <title>Quản lý đơn hàng</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
</head>

<body>
    <?php   
        include '../Main_QuanTri/nav.php';
        include '../Main_QuanTri/connect.php';
    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2"><h5>Quản lý đơn hàng<h5></div>
                        <div class="p-2 ms-auto"><button class="btn btn-danger">Xóa</button></div>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="search-active-form" style="position: relative; margin-top: 10px;">
                        <div class="form-search">
                            <form action="timkiem_donhang.php" method="get">  
                                <input placeholder="Mã đơn hàng" name="ma_don_hang" style="height:35px;" type="text" value="" />  
                                <input placeholder="Khách hàng" name="ho_ten" style="height:35px;" type="text" maxlength="100" /> 
                                <button class="btn bg-warning" type="submit" >Tìm kiếm</button> 
                                
                            <br><br>
                            <table class="table table-bordered table-hover vertical-center">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>#</th>
                                        <th>Khách hàng</th>
                                        <th>Thời gian tạo</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng cộng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM don_hang";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // Lặp qua mỗi hàng dữ liệu
                                            while ($row = $result->fetch_assoc()) {
                                                if ($row['trang_thai'] !== "Hoàn thành") {
                                                    echo '<tr>';
                                                        echo '<td width="5"><input type="checkbox"></td>';
                                                        echo '<td name="ma_don_hang";>' . $row['id'] . '</td>';
                                                        echo '<td>' . $row['ho_ten'] . '</td>';
                                                        echo '<td>' . $row['thoi_gian_dat_hang'] . '</td>';
                                                        echo '<td>' . $row['trang_thai'] . '</td>';
                                                        echo '<td>' . number_format($row['tong_hoa_don']). ' đ'; '</td>';
                                                        echo "<td style='width: 100px;' align='center'><a class='fa-solid fa-pen-to-square' href='sua_donhang.php?id=" . $row["id"] . "'></td>";
                                                    echo '</tr>';
                                                }
                                            }
                                        } else {
                                            echo "Không có dữ liệu.";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./FrontEnd/style.js"></script>
</body>