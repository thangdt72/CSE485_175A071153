<?php
    $tentk=$_POST['tentk'];
    $matkhau =$_POST['matkhau'];
    $email =$_POST['email'];
    $sdt=$_POST['sdt'];
    require('connect.php');
    $timemail = "Select * from GiangVien where Email='$email' ";
    $result = mysqli_query($conn,$timemail);
    $row = mysqli_fetch_assoc($result);
    $giangvien=$row['MaGV'];
    $pass = password_hash($matkhau,PASSWORD_DEFAULT);
    $subject = "Mã kích hoạt email";
    $txt=md5(time());
    $headers = "From: duongtienthang123456789@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
    if($email==$row['Email']){
        $sql = "INSERT INTO taikhoan(TenTK,MatKhau,Email,Sdt,MaQuyen,MaGV) 
        values ('$tentk','$pass','$email','$sdt','2','$giangvien');";
        mysqli_set_charset($conn,'UTF8');
        if(mysqli_query($conn,$sql)&mail($email,$subject,$txt,$headers)){
                echo 'Tạo tài khoản thành công';
                echo '<div>Đã gửi mail</div>';
                echo'<div class = "clear"><a href="kichhoat.php?id='.$txt.'&email='.$email.'">Kích hoạt</a></div>';
            }
        else{
                echo '<div>Gửi mail thất bại</div>';
                echo '<div>Tạo tài khoản thất bại</div>';
                echo'<div class = "clear"><a href="dangnhap.php">Trở Về</a></div>';
        };
    }
    else{
        echo 'không phải Email của giảng viên. Không thể đăng ký';
        echo'<div class = "clear"><a href="dangnhap.php">Nhấn để quay lại</a></div>';
    }
    mysqli_close($conn);
?>


