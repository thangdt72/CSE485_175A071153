<?php
    $id= $_GET['id'];
    $email=$_GET['email'];
?>
<form class="form-signin" method="POST" action="xulykichhoat.php?id=<?php echo $id?>&email=<?php echo $email?>">
<div class="form-group row">
    <label class="col-sm-4 col-form-label">Nhập mã kích hoạt:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kichhoat" name="kichhoat">
    </div>
    <div class="col-sm-4">
	<button class="btn btn-lg btn-primary btn-block" type="submit">Kích hoạt</button>
    </div>
  </div>
  </form>