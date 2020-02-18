<div style="color:#F66"> <h1><i>Quản lý sản phẩm</i></h1></div>

<form id="form1" name="form1" method="get" action="">
  <p>
    <label for="tim"></label>
    <label for="chungloai">Chủng loại:</label>
    <select name="chungloai" id="chungloai" onchange="form1.submit();">
      <?php 
		$kqCL=mysqli_query($link,"select* from chungloaisanpham");
		$idCL=0;
		while($dCL=mysqli_fetch_array($kqCL)){
			if($idCL==0) $idCL=$dCL['idCL'];
	?>
      <option value="<?php echo $dCL["idCL"];?>" <?php if(isset($_GET['chungloai']) && $_GET['chungloai'] == $dCL['idCL']) echo "selected='selected'";  ?>><?php echo $dCL["TenCL"];?></option>
      <?php }?>
    </select>
  </p>
  <?php if(isset($_GET['chungloai'])) $idCL=$_GET['chungloai'];?>
  <p>
    <label for="lsp">Loại sản phẩm:</label>
    <label for="lsp"></label>
    <select name="lsp" id="lsp" onchange="form1.submit();">
    <?php
    $kql=mysqli_query($link,"select* from loaisp where idCL={$idCL}");
	$idLoai=0;
	$kt=0;
		while($dL=mysqli_fetch_array($kql)){
			if($idLoai==0) $idLoai=$dL["idLoai"];
	?>
      <option value="<?php echo $dL["idLoai"];?>"<?php if(isset($_GET['lsp']) && $_GET['lsp'] == $dL['idLoai']){ echo "selected='selected'";  $kt=1;}?> ><?php echo $dL["tenloai"];?></option>
      <?php }?>
    </select>
    <input type="hidden" name="id" id="id" value="sp">
  </p>
  <p>
  
</form>
<table width="800" border="1" cellspacing="0">
    <tr>
      <th width="39" scope="col">STT</th>
      <th width="182" scope="col">Tên Sản phẩm</th>
      <th width="91" scope="col">Giá</th>
      
     
      <th width="59" scope="col">Ẩn hiện</th>
      <th width="306" scope="col">Ghi chú</th>
       <th width="97" scope="col"><a href="index.php?id=Them_sp&CL=<?php echo $idCL;?>&lsp=<?php echo $idLoai;?>">Thêm</a></th>
    </tr>
    <?php 
		if($kt==1) $idLoai=$_GET['lsp'];
		$kqsp=mysqli_query($link,"select* from sanpham where idLoai={$idLoai}");
		$i=1;
		while($dsp=mysqli_fetch_array($kqsp)){
	?>
    <tr>
      <td><?php echo $i; $i++;?></td>
      <td><?php echo $dsp["Tensp"];?></td>
      <td><?php echo $dsp["gia"];?></td>
      
      <td><?php echo $dsp["Anhien"];?></td>
      <td><?php echo $dsp["ghichu"];?></td>
      <td><a href="index.php?id=Sua_sp&idSP=<?php echo $dsp['idSP'];?>">Sữa</a> / <a href="process.php?xoaS=<?php echo $dsp['idSP'];?>">Xóa</a></td>
    </tr>
    <?php }?>
  </table>
  </p>














