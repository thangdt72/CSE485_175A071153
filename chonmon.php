<?php
include("header.php");
require('connect.php');
?>
<!-- BEGIN: MAIN NAVIGATION -->

<?php
$laymamon=$_GET['monhoc'];
$laymagv=$_GET['id'];
$laymalop=$_GET['lophoc'];
$sqllh  = "select * from LopHoc where MaMon='$laymamon' and MaGV='$laymagv'";
$sqlmh  = "select distinct monhoc.MaMon,TenMon,MaGV from MonHoc,LopHoc where MonHoc.MaMon=LopHoc.MaMon and MaGV='$laymagv'";
$sqlkh= "select * from KeHoach where MaLop='$laymalop' order by Buoi";
$sqllt= "select * from LichTrinh where MaLop='$laymalop' order by Buoi";
$sqltenmon  = "select TenMon from MonHoc where MaMon='$laymamon'";
mysqli_set_charset($conn, 'UTF8');
$resultlh = mysqli_query($conn, $sqllh);
$resultmh = mysqli_query($conn, $sqlmh);
$resultkh = mysqli_query($conn, $sqlkh);
$resultlt = mysqli_query($conn, $sqllt);
$laytenmon=mysqli_fetch_assoc(mysqli_query($conn, $sqltenmon))['TenMon'];
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
    <form action="chonmon.php"methd="POST">
    <div class="row">
    <div class="col-md-1">
    <select name="id" id="id">
        <option value="<?php echo $laymagv?>"><?php echo $laymagv?></option>
      </select>
      </div>
    <div class="col-md-2">
        <label class="form-control-lable">Môn học:</label>

      </div>
      <div class="col-md-3">
        <select name="monhoc" id="monhoc" class="form-control" onchange = "this.form.submit();">
        <option value="<?php echo $laymamon ?>"><?php echo $laytenmon ?></option>
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
        <select name="lophoc" id="lophoc" class="form-control" onchange = "this.form.submit();">
          <option value=""></option>
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
    <hr class="my-4">
    <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Kế hoạch giảng dạy</h2>
      <div class="list-course">
				<table class="table table-bordered">
					<tbody>
            <tr class="row-first">
              <td width="100">Buổi</td>														
              <td width="500">Bài Học</td>
              <td width="200">Địa Điểm</td>
              <td width="200">Tiết Học</td>																												
            </tr>
            <?php
              if (mysqli_num_rows($resultkh) > 0) {
                while ($rowkh = mysqli_fetch_assoc($resultkh)) {
                  echo '<td>'.$rowkh['Buoi'].'</td>';
                  echo '<td>'.$rowkh['BaiHoc'].'</td>';
                  echo '<td>'.$rowkh['PhongHoc'].'</td>';
                  echo '<td>'.$rowkh['TietHoc'].'</td><tr>';
                }
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  <?php if($laymalop!=""){?>
    <a href="kehoachgd.php?id=<?php echo $laymagv?>&monhoc=<?php echo $laymamon?>&lophoc=<?php echo $laymalop?>" class="col-sm-4">Cập nhật kế hoạch</a>
  <?php  }?>
  <hr class="my-4">
    <div class="row">
    <div class="col-sm-12">
     <h2 class="text-center">Lịch trình giảng dạy</h2>
     <div class="list-course">
					<table class="table table-bordered">
						<tbody><tr class="row-first">
              <td width="100">Buổi</td>														
              <td width="500">Bài Học</td>
              <td width="200">Địa Điểm</td>
              <td width="200">Tiết Học</td>																												
            </tr>
            <?php
              if (mysqli_num_rows($resultlt) > 0) {
                while ($rowlt = mysqli_fetch_assoc($resultlt)) {
                  echo '<td>'.$rowlt['Buoi'].'</td>';
                  echo '<td>'.$rowlt['BaiHoc'].'</td>';
                  echo '<td>'.$rowlt['PhongHoc'].'</td>';
                  echo '<td>'.$rowlt['TietHoc'].'</td><tr>';
                }
              }
            ?>
              </tbody>
            </table>
          </div>
          
        </div>  
      </div>
    <?php if($laymalop!=""){?>
      <a href="lichtrinhgd.php?id=<?php echo $laymagv?>&monhoc=<?php echo $laymamon?>&lophoc=<?php echo $laymalop?>" class="col-sm-4">Cập nhật lịch trình</a>
    <?php  }?>
    </form>
    </div>
  </main>
  </div>
<!-- END: MAIN NAVIGATION -->
<?php
include("footer.php")
?>