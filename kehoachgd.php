<?php
include("header.php");
$laymagv=$_GET['id'];
$laymalop=$_GET['lophoc'];
$laymamon=$_GET['monhoc'];
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
        <div class="container">
                <div class="col-sm-10">
                    <h2 class="h2 text-center">Thông tin buổi học</h2>
                    <form action="capnhatkh.php?id=<?php echo $laymagv?>&monhoc=<?php echo $laymamon?>&lophoc=<?php echo $laymalop?>" method="post" name="regform" id="regform" onsubmit="return checked();">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Mã Lớp:</label>
                            <div class="col-sm-7">
                            <label class="col-sm-5 col-form-label"><?php echo $laymalop?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Buổi :</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" id="buoihoc" name="buoihoc" required="" value="">
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bài Học:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" id="baihoc" name="baihoc" maxlength="100" required="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Phòng Học:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" id="phonghoc" name="phonghoc" maxlength="12" required="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tiết Học:</label>
                            <div class="col-sm-7">
                            <input type="text" class="form-control" id="tiethoc" name="tiethoc" maxlength="15" required="" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="capnhatkh" name="capnhatkh">Cập nhật kết hoạch</button>
                            </div>
                        </div>
                    </form>
    <div class="col-sm-3">
    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><a href="giangvien.php?id=<?php echo $laymagv?>">Thoát</a></button>
    </div>
</div>
</div>
</main>
<?php
include("footer.php")
?>