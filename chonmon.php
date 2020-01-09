<?php
include("header.php");
require('connect.php');
?>
<!-- BEGIN: MAIN NAVIGATION -->

<?php
$nganhhoc = trim($_POST['nganhhoc']);
$sqlnh  = "select * from NganhHoc";
$sqlmh  = "select TenMon from MonHoc,NganhHoc where MonHoc.MaNganh=NganhHoc.MaNganh and TenNganh='$matkhau'";
mysqli_set_charset($conn, 'UTF8');
$resultnh = mysqli_query($conn, $sqlnh);
$resultmh = mysqli_query($conn, $sqlmh);

?>
    <!-- BEGIN: HEADER -->
    <header class="jumbotron text-center row"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
      <div class="col-sm-4">
        <img class="img-fluid float-left" src="Skins/Images/logo.png" alt="Logo"> 
      </div>
      <div class="col-sm-6">
        <h1 class="blue-text mb-4 font-bold">Lịch Trình Giảng Dạy</h1>
      </div>
      </header>
    <!-- END: HEADER -->
<main>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kế hoạch giảng dạy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lịch trình giảng dạy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dangnhap.php">Đăng nhập</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
      </div>
    </nav>

    <div class="row">
      <div class="col-md-1">
        <label class="form-control-lable">Ngành học:</label>
      </div>
      <div class="col-md-3">
        <select name="nganhhoc" id="nganhhoc" href="chonmon.php" class="form-control">
          <option value="nganhhoc"><?php $nganhhoc ?></option>
          <?php
          if (mysqli_num_rows($resultnh) > 0) {
            while ($rownh = mysqli_fetch_assoc($resultnh)) {
              echo '<option value="' . $rownh['MaNganh'] . '" >' . $rownh['TenNganh'] . '</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="col-md-1">
        <label class="form-control-lable">Môn học:</label>

      </div>
      <div class="col-md-3">
        <select name="monhoc" id="monhoc" class="form-control">
        <?php
          if (mysqli_num_rows($resultmh) > 0) {
            while ($rowmh = mysqli_fetch_assoc($resultmh)) {
              echo '<option value="' . $rowmh['MaMon'] . '">' . $rowmh['TenMon'] . '</option>';
            }
          }

          ?>
        </select>
      </div>
      <div class="col-md-1">
        <label class="form-control-lable">Lớp học phần:</label>
      </div>
      <div class="col-md-3">
        <select name="lophoc" id="lophoc" class="form-control">
            <option value> </option>
        </select>
      </div>
    </div>
    <div class="box_center" style="postion:relative">
      <h4>TIN TỨC</h4>
    </div>
  </div>
</main>
<!-- END: MAIN NAVIGATION -->
<?php
include("footer.php")
?>