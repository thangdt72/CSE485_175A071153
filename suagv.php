<?php
include("header.php");
$laymagv=$_GET['id'];
require('connect.php');
$sqlgv  = "select * from GiangVien where MaGV='$laymagv'";
mysqli_set_charset($conn, 'UTF8');
$resultgv = mysqli_query($conn, $sqlgv);
$rowgv = mysqli_fetch_assoc($resultgv);
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
<h2 class="h2 text-center">Sửa giảng viên</h2>
<form action="xulysuagv.php?id=<?php echo $rowgv['MaGV']?>" method="post" name="regform" id="regform" onsubmit="return checked();">
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã giảng viên:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="magv" name="magv" maxlength="10"value="<?php echo $rowgv['MaGV']?>">
    </div>
</div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Tên giảng viên:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tengv" name="tengv" maxlength="50" value="<?php echo $rowgv['TenGV']?>">
    </div>
  </div>
 
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Ngày sinh:</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?php echo $rowgv['NgaySinh']?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Quê quán:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="quequan" name="quequan" maxlength="100" value="<?php echo $rowgv['QueQuan']?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Email:</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="email" name="email" maxlength="50" value="<?php echo $rowgv['Email']?>">
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-4">
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="themgv" name="themgv">Sửa giảng viên</button>
    </div>
	</div>
	</form>
</div>

  </div>
<?php
include("footer.php")
?>