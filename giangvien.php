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
    <form action="chonmon.php?id="methd="POST">
    <div class="row">
    <div class="col-md-1">
    <select name="id" id="id">
        <option value="<?php echo $laymagv?>"><?php echo $laymagv?></option>
      </select>
      </div>
    <div class="col-md-1">
        <label class="form-control-lable">Môn học:</label>
      </div>
      <div class="col-md-3">
        <select name="monhoc" id="monhoc" class="form-control" onchange = "this.form.submit();">
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
            <option value=""></option>
        </select>
      </div>
    </div>
    </form>
    </div>
  </main>
  </div>
<?php
include("footer.php")
?>