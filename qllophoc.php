<?php
include("header.php");
require('connect.php');
$sqllh  = "select MaLop,TenLop,MaMon,GiaiDoan,HocKy,NamHoc,DiaDiem,TenGV from lophoc,giangvien where lophoc.MaGV=giangvien.MaGV order by TenLop";
mysqli_set_charset($conn, 'UTF8');
$resultlh = mysqli_query($conn, $sqllh);
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
     <h2 class="text-center">Quản Lý Lớp Học Phần</h2>
     <a href="lopmoi.php" class="col-sm-1">Thêm lớp</a>
     <div class="list-course">
					<table class="list-course" background-color="#FFFFFF">
						<tbody><tr class="row-first">
							<td width="20">Sửa</td>
							<td width="20">Xóa</td>
							<td width="100">Mã lớp</td>
              <td width="400">Tên lớp</td>
              <td width="50">Mã môn</td>														
              <td width="100">Thời Gian</td>
              <td width="50">Địa điểm</td>
              <td width="50">Giảng Viên</td>																												
            </tr>
            <?php
              if (mysqli_num_rows($resultlh) > 0) {
                while ($rowlh = mysqli_fetch_assoc($resultlh)) {
                  echo '<tr><td width="15"> <td><a href="suakhoahoc.html"><img src="Skins/Images/edit.gif" border="0"></a></td>';
                  echo '<td width="20"><a href="#"><img src="Skins/Images/deleted.jpg" border="0"></a></td>';
                  echo '<td width="20">'.$rowlh['MaLop'].'<td>';
                  echo '<td width="400">'.$rowlh['TenLop'].'<td>';
                  echo '<td width="50">'.$rowlh['MaMon'].'<td>';
                  echo '<td width="100">'.$rowlh['NamHoc'].'<td>';
                  echo '<td width="50">'.$rowlh['DiaDiem'].'<td>';
                  echo '<td width="50">'.$rowlh['TenGV'].'<td><tr>';
                }
              }
            ?>
                    </tbody>
                </table>
			    </div>
  </div>
  </div>
<?php
include("footer.php")
?>