<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $laymalop=$_GET['id'];
    require('connect.php');
        $sql = "DELETE FROM lophoc where MaLop='$laymalop'";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            header('Location: qllophoc.php');
        }
        else{
            echo 'Không thể xóa vì lớp học phần đang diễn ra và đã có kế hoạch giảng dạy';
            echo '<div><a href="qllophoc.php">Nhấp để trở về</a></div>';
        }
    mysqli_close($conn);
?>