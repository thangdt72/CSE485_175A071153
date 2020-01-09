<?php
session_start();
if($_SESSION['quyen']!=1){
    echo header('Location: index.php');
  exit();
}?>
<?php
    $laymalop=$_GET['id'];
    $malop2=$_POST['malop1'];
    $tenlop =$_POST['tenlop'];
    $mamon2 =$_POST['mamon1'];
    $giaidoan=$_POST['giaidoan1'];
    $hocky=$_POST['hocky1'];
    $namhoc2=$_POST['namhoc1'];
    $diadiem=$_POST['diadiem1'];
    $giangvien=$_POST['giangvien1'];
    require('connect.php');
        $sql = "UPDATE lophoc SET MaLop='$malop2',TenLop='$tenlop',MaMon='$mamon2',GiaiDoan='$giaidoan',HocKy='$hocky',
        NamHoc='$namhoc2',DiaDiem='$diadiem',MaGV='$giangvien' where MaLop='$laymalop';";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)){
            header('Location: qllophoc.php');
        }
        else{
            echo 'Mã lớp học phần này đã tồn tại';
            echo'<div><a href="qllophoc.php">Nhấn để quay lại</a><div>';
        }
    mysqli_close($conn);
?>