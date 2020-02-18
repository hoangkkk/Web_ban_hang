<?php
if(isset($_SESSION['idUser'])) header("location:index.php");
?>
<div style="margin:auto">
<form id="form2" name="form2" method="post" action="process.php">
  <table width="600" align="center">
  <tr>
      <td width="207">Tên:</td>
      <td width="783"><label for="users"></label>
        <label for="name"></label>
        <input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <td width="207">Username:</td>
      <td width="783"><label for="users"></label>
      <input name="users" type="text" id="users" /></td>
    </tr>
    <tr>
      <td><label for="Pass3">Password:</label></td>
      <td><label for="pass"></label>
      <input type="text" name="pass" id="pass" /></td>
    </tr>
    
    
    <tr>
      <td>Email:</td>
      <td><label for="email2"></label>
      <input name="email" type="text" id="email" size="50" /></td>
    </tr>
    
    <tr>
      <td colspan="2"><input type="radio" name="radio" id="1" value="1" />
      <label for="1">Nam 
        <input type="radio" name="radio" id="0" value="0" />
      </label>
      Nữ</td>
      
    </tr>
        <tr>
    <td colspan="2"><div align="center">
      <p>&nbsp;        </p>
      <p>&nbsp;</p>
      <p>
        <input type="submit" name="dangki" id="dangki" value="Đăng kí" />
      </p>
    </div></td>
    </tr>
  </table>
</form>
</div>
