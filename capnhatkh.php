<?php
$laymagv=$_GET['id'];
$laymalop=$_GET['lophoc'];
$laymamon=$_GET['monhoc'];
    $buoi =$_POST['buoihoc'];
    $baihoc =$_POST['baihoc'];
    $phonghoc =$_POST['phonghoc'];
    $tiethoc =$_POST['tiethoc'];
    require('connect.php');
    $sql = "INSERT INTO KeHoach values ('$laymalop','$buoi','$baihoc','$phonghoc','$tiethoc');";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        echo 'Cập nhật thành công';
        echo'<div class = "clear"><a href="chonmon.php?id='.$laymagv.'&monhoc='.$laymamon.'&lophoc='.$laymalop.'">Về trang chủ</a></div>';
    };
?>