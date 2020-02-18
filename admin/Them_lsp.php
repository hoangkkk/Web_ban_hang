
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="TenLoai">Tên Loại:</label>
    <input type="text" name="TenLoai" id="TenLoai" />
  </p>
  <p>
    <label for="Anhien"></label>
    Trạng Thái:
    <select name="Anhien" id="Anhien">
      <option value="0">ẩn</option>
      <option value="1">Hiện</option>
    </select>
  </p>
  <p>
    <label for="idCL">Chủng Loại Sản Phẩm:</label>
    <select name="idCL" id="idCL">
    <?php 
		include("../connect.php");
		$kq=mysqli_query($link,"select* from chungloaisanpham");
		while($d=mysqli_fetch_array($kq)){
	?>
      <option value="<?php echo $d["idCL"];?>"><?php echo $d["TenCL"];?></option>
      <?php }?>
    </select>
  </p>
  <p>
    <input type="submit" name="Them_lsp" id="Them_lsp" value="thêm" />
  </p>
</form>