<?php
include("header.php");
require('connect.php');
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
  <div class="col-sm-9">
     <h2 class="text-center">This is the Home Page</h2>
	<p>The home page content. The home page content. The home page content. The home page content. <br>
	The home page content. The home page content. The home page content. The home page content. <br>
	The home page content. The home page content. <br>
	The home page content. The home page content. The home page content. </p>
  </div>
<!-- Right-side Column Content Section -->
	<aside class="col-sm-2">
      <div>
<h3>This is the information column</h3>
	<p>Web design by <br>A W West and<br>Steve Prettyman</p>
</div> 
	</aside>
  </div>
<?php
include("footer.php")
?>