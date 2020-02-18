<form name="form1" method="post" action="process.php">
  <p>
    <label for="HoTen">Họ Tên:</label>
    <input type="text" name="HoTen" id="HoTen">
  </p>
  <p>
    <label for="users">Username:</label>
    <input type="text" name="users" id="users">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass">
  </p>
  <p>
    <label>Giới tính:
      <input type="radio" name="gioitinh" value="1" id="gioitinh_0">
    Nam</label>
    <label>
      <input type="radio" name="gioitinh" value="0" id="gioitinh_1">
    Nữ</label>
  </p>
  <p>
    <input type="submit" name="Them_user" id="Them_user" value="Thêm">
    <br>
  </p>
</form>
