<div style="color:#F66"> <h1><i>Quản lý loại sản phẩm</i></h1></div>

<form id="form1" name="form1" method="GET" action="">
  <p>
    <label for="chungloaisp">chủng loại:</label>
    <select name="chungloaisp" size="1" id="chungloaisp" onchange="form1.submit();">
    <?php 
		$kqCL=mysqli_query($link,"select* from chungloaisanpham");
		if(isset($_GET["chungloaisp"]))	$idCL=$_GET["chungloaisp"];
		else $idCL=0;
		while($dCL=mysqli_fetch_array($kqCL)){
			if($idCL==0) $idCL=$dCL['idCL']
	?>
      <option value="<?php echo $dCL["idCL"];?>" <?php if(isset($_GET['chungloaisp'])&&$dCL["idCL"]==$_GET['chungloaisp']) echo "selected='selected'"?>><?php echo $dCL["TenCL"];?></option>
      <?php }?>
    </select>
  </p>
  <input type="hidden" name="id" id="id" value="lsp">
</form>
<table width="800" border="1" cellspacing="0" align="center"> 
  <tr>
    <th width="64" scope="col">Thứ Tự</th>
    <th width="691" scope="col">Tên Loại</th>
    <th width="116" scope="col">Ẩn Hiện</th>
    <th width="111" scope="col"><a href="index.php?id=Them_lsp">Thêm</a></th>
  </tr>
  <?php 
  	if(isset($_GET["chungloaisp"]))	$idCL=$_GET["chungloaisp"];
  	$kql=mysqli_query($link,"select* from loaisp where idCL=".$idCL);
		$i=1;
	while($dl=mysqli_fetch_array($kql)){
  ?>
  <tr>
    <td><?php echo $i; $i++;?></td>
    <td><?php echo $dl["tenloai"];?></td>
    <td><?php if($dl["AnHien"]) echo "Hiện"; else echo "Ẩn";?></td>
    <td><a href="index.php?id=Sua_lsp&&idLoai=<?php echo $dl['idLoai'];?>">Sữa</a> / <a href="process.php?Xoa=<?php echo $dl['idLoai'];?>&&idCL=<?php echo $dl['idCL'];?>">Xóa</a></td>
  </tr>
  <?php }?>
</table>
<p>&nbsp;</p>
