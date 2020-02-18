<div id="tieude"><span class="tieude">Sản phẩm mới: </span><br />
<div id="laptop">
<div id="tieude"><span style="font-weight:bold; color:#F00;"><i>laptop: </i></span><br /></div>
<?php include("connect.php");
		//$_GET['idCL']=1;
		$kqsp=mysqli_query($link,"select * from sanpham where AnHien=1 and idLoai in (select idLoai from loaisp where idCL=1) order by idSP DESC limit 0,8");
		while($dsp=mysqli_fetch_array($kqsp)){
?>
<div class="sanpham">
<div><img src="image/<?php echo $dsp['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dsp['Tensp'];?></div>
<div><?php echo $dsp['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>
</div>
<div id="maytinhbang"><span style="font-weight:bold; color:#F00;"><i>máy tính bảng:</i></span> <br /></div>
<?php 
	$kqtb=mysqli_query($link,"select * from sanpham where AnHien=1 and idLoai in (select idLoai from loaisp where idCL=2) order by idSP DESC limit 0,8");
		while($dtb=mysqli_fetch_array($kqtb)){
?>
<div class="sanpham">
<div><img src="image/<?php echo $dtb['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dtb['Tensp'];?></div>
<div><?php echo $dtb['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>
</div>
<div id="tieude"><span class="tieude">san pham khuyến mãi: </span><br />
<div id="laptop">
<div id="tieude"><span style="font-weight:bold; color:#F00;"><i>laptop:</i></span></div>
<?php
		$kqkmlt=mysqli_query($link,"select * from sanpham where AnHien=1 and gia<=5500000 and idLoai in (select idLoai from loaisp where idCL=1) limit 0,8");
		while($dkmlt=mysqli_fetch_array($kqkmlt)){
?>
<div class="sanpham">
<div style="border:#333 solid 1px"><img src="image/<?php echo $dkmlt['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dkmlt['Tensp'];?></div>
<div><?php echo $dkmlt['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>
</div>
<div id="maytinhbang"><span style="font-weight:bold; color:#F00;"><i>máy tính bảng:</i></span></div>
<?php
		$kqkmtb=mysqli_query($link,"select * from sanpham where AnHien=1 and gia<=5500000 and idLoai in (select idLoai from loaisp where idCL=2) limit 0,8");
		while($dkmtb=mysqli_fetch_array($kqkmtb)){
?>
<div class="sanpham">
<div style="border:#333 solid 1px"><img src="image/<?php echo $dkmtb['hinh'];?>" width="200" height="200"/></div>
<div><?php echo $dkmtb['Tensp'];?></div>
<div><?php echo $dkmtb['gia'];?></div>
<div><a href="#">Thêm giỏ hàng</a></div>
</div>
<?php }?>
</div>
</div>