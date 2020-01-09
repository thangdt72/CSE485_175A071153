<?php
session_start();

?>
<?php
if (isset($_POST['btnlogin'])) {
    $email = trim($_POST['email']);
    $matkhau = trim($_POST['matkhau']);

    require("connect.php");

    $sql = "Select * from taikhoan where Email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($matkhau,$row['MatKhau'])) {
            $_SESSION['quyen'] = $row['MaQuyen'];

            if ($_SESSION['quyen'] == 1) {
                header('Location: admin.php');
            } else {
                if ($row['TrangThai'] == '1') {
                    header('Location: giangvien.php');
                } else {

                    echo '<script language="javascript">';
                    echo 'alert("Tài khoản của bạn chưa được kích hoạt")';
                    echo '</script>';
                    echo "<a href='index.php'> Click để về lại trang chủ</a>";
                    header('Location: index.php');
                }
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("Sai Mật Khẩu")';
            echo '</script>';
            echo "<a href='index.php'> Click để về lại trang chủ</a>";
        }
    }
    else {
        echo 'Email sai';
        header('Location: index.php');
    }
    mysqli_close($conn);
    exit();
}
?>
