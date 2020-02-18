
<?php 
		include("../connect.php");
		$kql=mysqli_query($link,"select* from loaisp where idLoai=".$_GET['idLoai']);
		$dl=mysqli_fetch_array($kql);
?>
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="TenLoai">Tên Loại:</label>
    <input type="text" name="TenLoai" id="TenLoai" value="<?php echo $dl['tenloai'];?>"/>
  </p>
  <p>
    <label for="Anhien"></label>
    Trạng Thái:
    <select name="Anhien" id="Anhien">
      <option value="0">ẩn</option>
      <option value="1" <?php if($dl['AnHien']) echo"selected='selected'"?>>Hiện</option>
    </select>
  </p>
  <p>
    <label for="idCL">Chủng Loại Sản Phẩm:</label>
    <select name="idCL" id="idCL">
    <?php 
	
		$kq=mysqli_query($link,"select* from chungloaisanpham");
		while($d=mysqli_fetch_array($kq)){
	?>
      <option value="<?php echo $d["idCL"];?>" <?php if($dl['idCL']==$d['idCL']) echo"selected='selected'"?>><?php echo $d["TenCL"];?></option>
      <?php }?>
    </select>
  </p>
  <p>
    <input type="submit" name="Sua_lsp" id="Sua_lsp" value="Cập nhật" />
  </p>
  <input type="hidden" name="idLoai" id="idLoai" value="<?php echo $dl["idLoai"];?>"/>
</form>
