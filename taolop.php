<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $malop2=$_POST['malop1'];
    $tenlop =$_POST['tenlop'];
    $mamon2 =$_POST['mamon1'];
    $giaidoan=$_POST['giaidoan1'];
    $hocky=$_POST['hocky1'];
    $namhoc2=$_POST['namhoc1'];
    $diadiem=$_POST['diadiem1'];
    $giangvien=$_POST['giangvien1'];
    require('connect.php');
    $ChonLop = "Select * from lophoc where MaLop='$malop2' ";
    $result1 = mysqli_query($conn,$ChonLop);
    if(!(mysqli_num_rows($result1)>0)){
        $sql = "INSERT INTO lophoc values ('$malop2','$tenlop','$mamon2','$giaidoan','$hocky','$namhoc2','$diadiem','$giangvien');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            echo 'Tạo lớp thành công';
            echo'<div class = "clear"><a href="qllophoc.php">Về trang chủ</a></div>';
        };
    }
    else{
        echo "Mã lớp này đã tồn tại";
        echo'<div class = "clear"></div>';
        echo'<a href="lopmoi.php">Nhấn để quay lại</a>';
    }
    mysqli_close($conn);
?>