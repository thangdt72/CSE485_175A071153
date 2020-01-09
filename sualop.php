<?php
include("header.php");
$laymalop=$_GET['id'];
require('connect.php');
$sqllh  = "select * from lophoc,giangvien where lophoc.MaGV=giangvien.MaGV and MaLop='$laymalop'";
$sqlmh  = "select * from monhoc order by MaMon";
$sqlgv  = "select MaGV,TenGV from GiangVien order by TenGV";
mysqli_set_charset($conn, 'UTF8');
$resultlh = mysqli_query($conn, $sqllh);
$resultmh = mysqli_query($conn, $sqlmh);
$resultgv = mysqli_query($conn, $sqlgv);
$rowlh = mysqli_fetch_assoc($resultlh);
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
<?php
  include("menuadmin.php");
?>
<!-- Center Column Content Section -->
<div class="col-sm-10">
<h2 class="h2 text-center">Sửa Lớp Học</h2>
<form action="xulysualop.php?id=<?php echo $rowlh['MaLop'] ?>" method="post" name="regform" id="regform" >
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã lớp:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="malop1" name="malop1" maxlength="15"value="<?php echo $rowlh['MaLop'] ?>">
    </div>
</div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Tên lớp:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tenlop" name="tenlop" maxlength="50" value="<?php echo $rowlh['TenLop'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã Môn:</label>
    <div class="col-sm-7">
        <select name="mamon1" id="mamon1" class="form-control">
          <option value="<?php echo $rowlh['MaMon'] ?>"><?php echo $rowlh['MaMon'] ?></option>
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
        <select name="giaidoan1" id="giaidoan1" class="form-control">
          <option value="<?php echo $rowlh['GiaiDoan'] ?>"><?php echo $rowlh['GiaiDoan'] ?></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Học Kỳ:</label>
    <div class="col-sm-7">
        <select name="hocky1" id="hocky1" class="form-control">
          <option value="<?php echo $rowlh['HocKy'] ?>"><?php echo $rowlh['HocKy'] ?></option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Năm học:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="namhoc1" name="namhoc1" maxlength="10" value="<?php echo $rowlh['NamHoc'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Địa điểm:</label>
    <div class="col-sm-7">
        <select name="diadiem1" id="diadiem1" class="form-control">
          <option value="<?php echo $rowlh['DiaDiem'] ?>"><?php echo $rowlh['DiaDiem'] ?></option>
          <option value="222 - A2">222 - A2</option>
          <option value="322 - A2">322 - A2</option>
          <option value="325 - A2">325 - A2</option>
          <option value="422 - A2">422 - A2</option>
          <option value="222 - A3">222 - A3</option>
          <option value="322 - A3">322 - A3</option>
          <option value="328 - A3">328 - A3</option>
          <option value="422 - A3">422 - A3</option>
          <option value="222 - A4">222 - A4</option>
          <option value="322 - A4">322 - A4</option>
          <option value="327 - A4">327 - A4</option>
          <option value="422 - A4">422 - A4</option>
        </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Giảng viên:</label>
    <div class="col-sm-7">
    <select name="giangvien1" id="giangvien1" class="form-control">
          <option value="<?php echo $rowlh['MaGV'] ?>"><?php echo $rowlh['TenGV'] ?></option>
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
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="taolop" name="taolop">Sửa lớp học</button>
    </div>
	</div>
	</form>
</div>

  </div>
<?php
include("footer.php")
?>