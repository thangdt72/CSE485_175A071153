<?php
    $id=$_GET['id'];
    $kichhoat=$_POST['kichhoat'];
    $email= $_GET['email'];
    require('connect.php');
    if($id==$kichhoat){
        $sql = "UPDATE taikhoan SET TrangThai='1'where Email='$email';";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo 'Đã kích hoạt thành công';
            echo'<div><a href="dangnhap.php">Nhấn để quay lại</a><div>';
        }
        else{
            echo 'không kich hoat duoc tai khoan';
            echo'<div><a href="index.php">Nhấn để quay lại</a><div>';
        }
    }
    else{
        header('Location: kichhoat.php?id='.$id.'&email='.$email);
    }
    mysqli_close($conn);
?>