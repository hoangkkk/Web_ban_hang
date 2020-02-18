<?php
	$kq=mysqli_query($link,"select* from khachhang where MaKH={$_GET['idKH']}");
	$d=mysqli_fetch_array($kq);
?>
<form name="form1" method="post" action="process.php">
  <p>
    <label for="tenkh"></label>
    <label for="TenKH">Tên Khách Hàng:</label>
    <input type="text" name="TenKH" id="TenKH" value="<?php echo $d['TenKH'];?>">
  </p>
  <p>
    <label for="diachi">Địa Chỉ:</label>
    <input type="text" name="diachi" id="diachi" value="<?php echo $d['Diachi'];?>">
  </p>
  <p>
    <label for="sdt">Số Điện Thoại:</label>
    <input type="text" name="sdt" id="sdt" value="<?php echo $d['sdt'];?>">
  </p>
  <p>
  <input type="hidden" name="MaKH" id="MaKH" value="<?php echo $d['MaKH'];?>">
    <input type="submit" name="Sua_KH" id="Sua_KH" value="Cập nhật">
  </p>
</form>
