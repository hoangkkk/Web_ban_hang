<?php 
if(isset($_SESSION['idUser'])) header("location:index.php");
?>
<div style="border:#000 solid 2px; margin:auto;">
<div style="text-align:center">
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" />
  </p>
  <p>
    <label for="pass">Password:</label>
    <input type="text" name="pass" id="pass" />
  </p>
  <p>
    <input type="checkbox" name="rememember" id="rememember" checked="checked"/>
    <label for="rememember"></label>
    <label for="remember"></label>
    nhớ mật khẩu?  </p>
  <p>
    <input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập" />
</p>
</form>
<p><a href="#">Quên mật khẩu?</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?id=2">Đăng kí</a></p>
</div>
</div>
