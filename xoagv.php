<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $laymagv=$_GET['id'];
    require('connect.php');
        $sql = "DELETE FROM giangvien where MaGV='$laymagv'";
        $sql1 = "DELETE FROM taikhoan where MaGV='$laymagv'";
        mysqli_set_charset($conn,'UTF8');
        mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql)){
            header('Location: qlgiangvien.php');
        }
        else{
            echo 'Không thể xóa vì giáo viên đã có tài khoản liên kết';
            echo '<div><a href="qlgiangvien.php">Nhấp để trở về</a></div>';
        }
    mysqli_close($conn);
?>