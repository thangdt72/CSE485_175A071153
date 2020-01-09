<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $laymagv=$_GET['id'];
    $magv=$_POST['magv'];
    $tengv =$_POST['tengv'];
    $ngaysinh =$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $email=$_POST['email'];
    require('connect.php');
        $sql = "UPDATE giangvien SET MaGV='$magv',TenGV='$tengv',NgaySinh='$ngaysinh',QueQuan='$quequan',Email='$email' where MaGV='$laymagv';";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            header('Location: qlgiangvien.php');
        }
        else{
            echo 'Mã giảng viên này đã tồn tại';
            echo'<div><a href="qlgiangvien.php">Nhấn để quay lại</a><div>';
        }
    mysqli_close($conn);
?>