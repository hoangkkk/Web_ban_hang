<?php 
	if(isset($_GET['idUser'])){
		
	$sl="select* from user where idUser=".$_GET['idUser'];
	$kq=mysqli_query($link,$sl);
	$d=mysqli_fetch_array($kq);
?>
<form name="form1" method="post" action="process.php">
  <p>
    <label for="HoTen">Họ Tên:</label>
    <input type="text" name="HoTen" id="HoTen" value="<?php echo $d["Hoten"];?>">
  </p>
  <p>
    <label for="users">Username:</label>
    <input type="text" name="users" id="users" value="<?php echo $d["username"];?>">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $d["email"];?>">
  </p>
  <p>
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass" value="<?php echo $d["Password"];?>">
  </p>
  <p>
    <label>Giới tính:
      <input name="gioitinh" type="radio" id="gioitinh_0" value="1" <?php if($d['Gioitinh']==1) echo "checked='CHECKED'";?>>
    Nam</label>
    <label>
      <input type="radio" name="gioitinh" value="0" id="gioitinh_1" <?php if($d['Gioitinh']==0) echo "checked='CHECKED'";?>>
    Nữ</label>
  </p>
  <p>
    <input type="submit" name="Sua_user" id="Sua_user" value="Cập nhật">
    <br>
  </p>
  <input type="hidden" name="idUser" id="idUser" value="<?php echo $d['idUser'];?>" />
</form>
<?php }?>











