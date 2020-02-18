<?php 
	$kq=mysqli_query($link,"select* from sanpham where idSP=".$_GET['idSP']);
	$d=mysqli_fetch_array($kq);
?>
<form name="form1" method="post" action="process.php">
  <p>
    <label for="loaisp">Loại Sản Phẩm:</label>
    
    <select name="loaisp" id="loaisp">
    <?php
    $kql=mysqli_query($link,"select* from loaisp");
		while($dL=mysqli_fetch_array($kql)){
	?>
      <option value="<?php echo $dL["idLoai"];?>" <?php if($dL["idLoai"]==$d["idLoai"]) echo "selected='selected'";?>><?php echo $dL["tenloai"];?></option>
      <?php }?>
    </select>
  </p>
  <table width="800" border="0" cellspacing="0">
    <tr>
      <th width="172" scope="row">Tên Sản Phẩm:</th>
      <td width="624"><label for="tensp"></label>
      <input name="tensp" type="text" id="tensp" size="100" value="<?php echo $d["Tensp"];?>" /></td>
    </tr>
    <tr>
      <th scope="row">Giá:</th>
      <td><label for="gia"></label>
      <input name="gia" type="text" id="gia" size="100" value="<?php echo $d["gia"];?>"/></td>
    </tr>
    <tr>
      <th scope="row">Mô Tả:</th>
      <td><label for="MoTa"></label>
        <label for="MoTa"></label>
      <textarea name="MoTa" id="MoTa" cols="100" rows="5" value="<?php echo $d["Mota"];?>"></textarea></td>
    </tr>
    <tr>
      <th scope="row">Ghi Chú:</th>
      <td><label for="Ghichu"></label>
      <textarea name="Ghichu" id="Ghichu" cols="100" rows="5" value="<?php echo $d["ghichu"];?>"></textarea></td>
    </tr>
    <tr>
      <th scope="row">Ẩn Hiện:</th>
      <td><p>
        <label>
          <input type="radio" name="AnHien" value="1" id="AnHien_0" <?php if($d['Anhien']) echo "checked";?>/>
          Hiện</label>
        <label>
          <input type="radio" name="AnHien" value="0" id="AnHien_1" <?php if($d['Anhien']==0) echo "checked";?>/>
          Ẩn</label>
      </p></td>
    </tr>
    <tr>
      <th scope="row">Hình:</th>
      <td><label for="hinh"></label>
      <input name="hinh" type="text" id="hinh" size="100" value="<?php echo $d["hinh"];?>"/></td>
    </tr>
    <tr>
    <th scope="row" colspan="2"><input type="submit" name="Sua_sp" id="Sua_sp" value="Cập nhật"/></th>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <input type="hidden" name="idSP" id="idSP" value="<?php echo $d['idSP'];?>"  />
</form>













