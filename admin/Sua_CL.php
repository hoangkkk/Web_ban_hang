
<?php 
	$kq=mysqli_query($link,"select* from chungloaisanpham where idCL=".$_GET['idCL']);
	$d=mysqli_fetch_array($kq);
?>
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="tenCL">Tên Chủng Loại:</label>
    <input name="tenCL" type="text" id="tenCL" value="<?php echo $d['TenCL'];?>" />
  </p>
  <p>
    <input type="submit" name="capnhat_CL" id="capnhat_CL" value="cập nhật" />
  </p>
  <input type="hidden" name="idCL" id="idCL" value="<?php echo $d['idCL'];?>" />
</form>
