<?php
include("header.php");
require('connect.php');
$sqlmh  = "select * from monhoc order by MaMon";
$sqlgv  = "select MaGV,TenGV from GiangVien order by TenGV";
mysqli_set_charset($conn, 'UTF8');
$resultmh = mysqli_query($conn, $sqlmh);
$resultgv = mysqli_query($conn, $sqlgv);
?>
    <!-- BEGIN: HEADER -->
    <header class="jumbotron text-center row"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
      <div class="col-sm-4">
        <img class="img-fluid float-left" src="Skins/Images/logo.png" alt="Logo"> 
      </div>
      <div class="col-sm-6">
        <h1 class="blue-text mb-4 font-bold">Quản Lý Hệ Thống</h1>
      </div>
      </header>
    <!-- END: HEADER -->
    <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
    <nav class="col-sm-2">
        <ul class="nav nav-pills flex-column">
		    <li class="nav-item">
          <a class="nav-link active" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nganhmoi.php">Tạo ngành học</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="monmoi.php">Tạo môn học</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="qllophoc.php">QL lớp học phần</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="qlgiaovien.php">QL Tài khoản giáo viên</a>
        </li> 
      </ul>
  </nav>
<!-- Center Column Content Section -->
<div class="col-sm-10">
<h2 class="h2 text-center">Tạo Lớp Học</h2>
<form action="taomon.php" method="post" name="regform" id="regform" onsubmit="return checked();">
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã lớp:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="mamon" name="mamon" maxlength="8" required="" value="">
    </div>
</div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Tên lớp:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tenmon" name="tenmon" maxlength="50" required="" value="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã Môn:</label>
    <div class="col-sm-7">
        <select name="monhoc" id="monhoc" class="form-control">
          <option value> </option>
          <?php
          if (mysqli_num_rows($resultmh) > 0) {
            while ($rowmh = mysqli_fetch_assoc($resultmh)) {
              echo '<option value="' . $rowmh['MaMon'] . '" >' . $rowmh['MaMon'] . '</option>';
            }
          }
          ?>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Giai đoạn:</label>
    <div class="col-sm-7">
        <select name="giaidoan" id="hocky" class="form-control">
          <option value>1</option>
          <option value>2</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Học Kỳ:</label>
    <div class="col-sm-7">
        <select name="hocky" id="hocky" class="form-control">
          <option value>1</option>
          <option value>2</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Năm học:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tenmon" name="tenmon" maxlength="50" required="" value="">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Địa điểm:</label>
    <div class="col-sm-7">
        <select name="diadiem" id="diadiem" class="form-control">
          <option value>222 - A2</option>
          <option value>325 - A2</option>
          <option value>322 - A2</option>
          <option value>422 - A2</option>
          <option value>222 - A3</option>
          <option value>322 - A3</option>
          <option value>328 - A3</option>
          <option value>422 - A3</option>
          <option value>222 - A4</option>
          <option value>322 - A4</option>
          <option value>327 - A4</option>
          <option value>422 - A4</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Giảng viên:</label>
    <div class="col-sm-7">
    <select name="giangvien" id="giangvien" class="form-control">
          <option value> </option>
          <?php
          if (mysqli_num_rows($resultgv) > 0) {
            while ($rowgv = mysqli_fetch_assoc($resultgv)) {
              echo '<option value="' . $rowgv['MaGV'] . '" >' . $rowgv['TenGV'] . '</option>';
            }
          }
        ?>
        </select>
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-4">
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="taonganh" name="taonganh">Tạo lớp học</button>
    </div>
	</div>
	</form>
</div>

  </div>
<?php
include("footer.php")
?>