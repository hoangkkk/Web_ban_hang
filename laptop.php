
<div id="laptop">
<?php
	include("connect.php");
	$sllt="select * from sanpham where AnHien=1 and idLoai in (select idLoai from loaisp where idCL={$_GET['idCL']})";
	$kqlt=mysqli_query($link,$sllt);
	$tsp=mysqli_num_rows($kqlt);
	$sd=5;
	$tst=ceil($tsp/$sd);
	if(isset($_GET['page'])) $page=$_GET['page'];
	else $page=1;
	$vt=($page-1)*$sd;
	$kqlt=mysqli_query($link,$sllt."limit $vt,$sd");
	while($dlt=mysqli_fetch_array($kqlt)){
?>
<div class="sanpham">
<div><img src="image/<?php echo $dlt['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dlt['Tensp'];?></div>
<div><?php echo $dlt['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>
<div class="listpage">Trang:<?php for($i=1;$i<=$tst;$i++){?><a href="index.php?id=3&idCL=1&page=<?php echo $i;?>"><?php echo $i;?>&nbsp;</a><?php }?></div>
</div>













