<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $magv=$_POST['magv'];
    $tengv =$_POST['tengv'];
    $ngaysinh =$_POST['ngaysinh'];
    $quequan=$_POST['quequan'];
    $email=$_POST['email'];
    require('connect.php');
    $ChonGV = "Select * from giangvien where MaGV='$magv' ";
    $result1 = mysqli_query($conn,$ChonGV);
    if(!(mysqli_num_rows($result1)>0)){
        $sql = "INSERT INTO giangvien values ('$magv','$tengv','$ngaysinh','$quequan','$email');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo 'Thêm giảng viên thành công';
            echo'<div class = "clear"><a href="qllophoc.php">Về trang chủ</a></div>';
        };
    }
    else{
        echo "Mã giảng viên này đã tồn tại";
        echo'<div class = "clear"></div>';
        echo'<a href="giangvienmoi.php">Nhấn để quay lại</a>';
    }
    mysqli_close($conn);
?>