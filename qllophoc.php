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
<?php
  include("menuadmin.php");
?>
<!-- Center Column Content Section -->
  <div class="col-sm-10">
     <h2 class="text-center">Quản Lý Lớp Học Phần</h2>
     <a href="lopmoi.php" class="col-sm-1">Thêm lớp</a>
     <div class="list-course">
					<table class="list-course" background-color="#FFFFFF">
						<tbody><tr class="row-first">
							<td width="20">Sửa</td>
							<td width="20">Xóa</td>
							<td width="150">Mã lớp</td>
              <td width="300">Tên lớp</td>
              <td width="70">Mã môn</td>														
              <td width="150">Thời Gian</td>
              <td width="80">Địa điểm</td>
              <td width="180">Giảng Viên</td>																												
            </tr>
            <?php
              if (mysqli_num_rows($resultlh) > 0) {
                while ($rowlh = mysqli_fetch_assoc($resultlh)) {
                  echo '<tr> <td><a href="sualop.php?id='.$rowlh['MaLop'].'"><img src="Skins/Images/edit.gif" border="0"></a></td>';
                  echo '<td><a href="xoalop.php?id='.$rowlh['MaLop'].'"><img src="Skins/Images/deleted.jpg" border="0"></a></td>';
                  echo '<td>'.$rowlh['MaLop'].'</td>';
                  echo '<td>'.$rowlh['TenLop'].'</td>';
                  echo '<td>'.$rowlh['MaMon'].'</td>';
                  echo '<td>'.$rowlh['NamHoc'].'</td>';
                  echo '<td>'.$rowlh['DiaDiem'].'</td>';
                  echo '<td>'.$rowlh['TenGV'].'</td><tr>';
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