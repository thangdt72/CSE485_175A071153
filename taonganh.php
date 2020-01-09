<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $manganh=$_POST['manganh'];
    $tennganh =$_POST['tennganh'];
    require('connect.php');
    $ChonNganh = "Select * from NganhHoc where MaNganh='$manganh' ";
    $result = mysqli_query($conn,$ChonNganh);
    if(!(mysqli_num_rows($result)>0)){
        $sql = "INSERT INTO nganhhoc values ('$manganh','$tennganh');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo 'Tạo ngành học thành công';
            echo'<div class = "clear"><a href="admin.php">Về trang chủ</a></div>';
        };
    }
    else{
        echo "Mã ngành này đã tồn tại";
        echo'<div class = "clear"></div>';
        echo'<a href="nganhmoi.php">Nhấn để quay lại</a>';
    }
    mysqli_close($conn);
?>