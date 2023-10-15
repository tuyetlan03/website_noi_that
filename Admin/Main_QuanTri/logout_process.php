<?php
if(isset($_SESSION['ho_ten'])){
    unset($_SESSION['ho_ten']);
    header('location: ../../../User/TuyetLan');
}
header('location: ../../User/TuyetLan');