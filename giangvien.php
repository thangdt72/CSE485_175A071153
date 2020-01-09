<?php
include("header.php");
require('connect.php');
$laymagv=$_GET['id'];
$sqllh  = "select * from LopHoc where MaGV='$laymagv'";
$sqlmh  = "select monhoc.MaMon,TenMon,MaGV from MonHoc,LopHoc where MonHoc.MaMon=LopHoc.MaMon and MaGV='$laymagv'";
mysqli_set_charset($conn, 'UTF8');
$resultlh = mysqli_query($conn, $sqllh);
$resultmh = mysqli_query($conn, $sqlmh);
?>
    <!-- BEGIN: HEADER -->
    <header class="jumbotron text-center row"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
      <div class="col-sm-4">
        <img class="img-fluid float-left" src="Skins/Images/logo.png" alt="Logo"> 
      </div>
      <div class="col-sm-6">
        <h1 class="blue-text mb-4 font-bold">Quản Lý Lịch Trình</h1>
      </div>
      </header>
    <!-- END: HEADER -->
    <div class="container">
    <div class="row">
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
        <?php
          if (mysqli_num_rows($resultlh) > 0) {
            while ($rowlh = mysqli_fetch_assoc($resultlh)) {
              echo '<option value="' . $rowlh['MaLop'] . '">' . $rowlh['TenLop'] . '</option>';
            }
          }
          ?>
        </select>
      </div>
    </div>
    </div>
<?php
include("footer.php")
?>