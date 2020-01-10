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
  <main>
    <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
<?php
  include("menuadmin.php");
?>
<!-- Center Column Content Section -->
    <div class="col-sm-10">
        <h2 class="text-center">Tin Tức</h2>
        <p>Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 4 năm 2019 (27/11/2019)<br>            Kết quả thi chuẩn Tiếng Anh đầu đợt 3 năm 2019 (11/10/2019)<br>
        Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 3 năm 2019 tại Hà Nội (30/08/2019)
        Danh sách các môn điều chỉnh lịch thi GD2, HK2, 2018_2019 (13/06/2019)<br>
        Triển khai kế hoạch học kỳ hè năm học 2018-2019 (12/06/2019)<br>
        Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 2 năm 2019 tại Hà Nội (02/04/2019)<br>
        Thông báo kết quả thi chuẩn Tiếng Anh đầu ra đợt 1 năm 2019 (22/02/2019)<br>
        Thông báo về tổ chức thi chuẩn Tiếng Anh đầu ra cho trình độ đại học hệ chính quy đợt 1 năm 2019 tại Hà Nội (03/12/2018)<br>
      </div>
    </div>
  </main>
<?php
include("footer.php")
?>