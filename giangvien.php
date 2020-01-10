<?php
include("header.php");
require('connect.php');
$laymagv=$_GET['id'];

$sqlmh  = "select distinct monhoc.MaMon,TenMon,MaGV from MonHoc,LopHoc where MonHoc.MaMon=LopHoc.MaMon and MaGV='$laymagv'";
mysqli_set_charset($conn, 'UTF8');

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
    <main>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="giangvien.php?id=<?php echo $laymagv?>">Trang chủ</a>
            </li>
            <li class="nav-item">

              <a class="nav-link" href="index.php">Đăng xuẩt</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <form action="chonmon.php?id="methd="POST">
        <div class="row">
          <div class="col-md-2">
            <select name="id" id="id">
              <option value="<?php echo $laymagv?>"><?php echo $laymagv?></option>
            </select>
          </div>
          <div class="col-md-2">
              <label class="form-control-lable">Môn học:</label>
          </div>
          <div class="col-md-3">
            <select name="monhoc" id="monhoc" class="form-control" onchange = "this.form.submit();">
              <option value=""></option>
              <?php
                if (mysqli_num_rows($resultmh) > 0) {
                  while ($rowmh = mysqli_fetch_assoc($resultmh)) {
                    echo '<option value="' . $rowmh['MaMon'] . '">' . $rowmh['TenMon'] . '</option>';
                  }
                }
                ?>
            </select>
          </div>
          <div class="col-md-2">
            <label class="form-control-lable">Lớp học phần:</label>
          </div>
          <div class="col-md-3">
            <select name="lophoc" id="lophoc" class="form-control">
                <option value=""></option>
            </select>
          </div>
        </div>
      </form>
      <hr class="my-4">
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