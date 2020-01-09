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
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            header('Location: qlgiangvien.php');
        }
    mysqli_close($conn);
?>