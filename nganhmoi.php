<?php
include("header.php");
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
<h2 class="h2 text-center">Tạo Ngành Học</h2>
<form action="taonganh.php" method="post" name="regform" id="regform" onsubmit="return checked();">
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Mã Ngành:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="manganh" name="manganh" maxlength="8" required="" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Tên ngành:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="tennganh" name="tennganh" maxlength="50" required="" value="">
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-4">
	<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="taonganh" name="taonganh">Tạo ngành học</button>
    </div>
	</div>
	</form>
</div>

  </div>
<?php
include("footer.php")
?>