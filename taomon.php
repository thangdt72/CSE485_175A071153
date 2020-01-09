<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $mamon1=$_POST['mamon'];
    $tenmon1 =$_POST['tenmon'];
    $manganh1 =$_POST['nganhhoc'];
    require('connect.php');
    $ChonMon1 = "Select * from MonHoc where MaMon='$mamon1' ";
    $result1 = mysqli_query($conn,$ChonMon1);
    if(!(mysqli_num_rows($result1)>0)){
        $sql1 = "INSERT INTO monhoc values ('$mamon1','$tenmon1','$manganh1');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql1)){
            echo 'Tạo môn học thành công';
            echo'<div class = "clear"><a href="admin.php">Về trang chủ</a></div>';
        };
    }
    else{
        echo "Mã môn này đã tồn tại";
        echo'<div class = "clear"></div>';
        echo'<a href="monmoi.php">Nhấn để quay lại</a>';
    }
    mysqli_close($conn);
?>