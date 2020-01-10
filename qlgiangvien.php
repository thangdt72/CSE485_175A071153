<?php
include("header.php");
require('connect.php');
$sqlgv  = "select * from giangvien order by TenGV";
mysqli_set_charset($conn, 'UTF8');
$resultgv = mysqli_query($conn, $sqlgv);
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
     <h2 class="text-center">Quản Lý Giảng Viên</h2>
     <a href="giangvienmoi.php" class="col-sm-1">Thêm giảng viên</a>
     <div class="list-course">
					<table class="table table-bordered" >
						<tbody><tr class="row-first">
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
							<td width="120">Mã giảng viên</td>
              <td width="200">Tên giảng viên</td>
              <td width="120">Ngày sinh</td>														
              <td width="200">Quê quán</td>
              <td width="50">Email</td>																												
            </tr>
            <?php
              if (mysqli_num_rows($resultgv) > 0) {
                while ($rowgv = mysqli_fetch_assoc($resultgv)) {
                  echo '<tr><td><a href="suagv.php?id='.$rowgv['MaGV'].'"><img src="Skins/Images/edit.gif" border="0"></a></td>';
                  echo '<td><a href="xoagv.php?id='.$rowgv['MaGV'].'"><img src="Skins/Images/deleted.jpg" border="0"></a></td>';
                  echo '<td>'.$rowgv['MaGV'].'</td>';
                  echo '<td>'.$rowgv['TenGV'].'</td>';
                  echo '<td>'.$rowgv['NgaySinh'].'</td>';
                  echo '<td>'.$rowgv['QueQuan'].'</td>';
                  echo '<td>'.$rowgv['Email'].'</td><tr>';
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