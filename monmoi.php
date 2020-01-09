<?php
include("header.php");
require('connect.php');
$sqlnh  = "select * from NganhHoc order by TenNganh";
mysqli_set_charset($conn, 'UTF8');
$resultnh = mysqli_query($conn, $sqlnh);
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
<h2 class="h2 text-center">Tạo Môn Học</h2>
<form action="taomon.php" method="post" name="regform" id="regform" onsubmit="return checked();">
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã Môn:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="mamon" name="mamon" maxlength="8" required="" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Tên môn:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tenmon" name="tenmon" maxlength="50" required="" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Mã Ngành:</label>
    <div class="col-sm-7">
    <select name="nganhhoc" id="nganhhoc" class="form-control">
          <option value> </option>
          <?php
          if (mysqli_num_rows($resultnh) > 0) {
            while ($rownh = mysqli_fetch_assoc($resultnh)) {
              echo '<option value="' . $rownh['MaNganh'] . '" >' . $rownh['TenNganh'] . '</option>';
            }
          }
          ?>
        </select>
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-4">
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="taomon" name="taomon">Tạo môn học</button>
    </div>
	</div>
	</form>
</div>

  </div>
<?php
include("footer.php")
?>