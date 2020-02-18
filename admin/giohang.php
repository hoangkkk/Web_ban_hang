<div style="color:#F66"> <h1><i>Quản lý Đơn Hàng</i></h1></div>
<form name="form1" method="post" action="">
  <p>Hóa Đơn:</p>
  <table width="791" border="1" cellspacing="0" align="center">
    <tr>
      <th width="39" scope="col">STT</th>
      <th width="180" scope="col">Tên Khách Hàng</th>
      <th width="137" scope="col">Ngày Đặt</th>
      <th width="135" scope="col">Ngày Xuất</th>
      <th width="140" scope="col">Tình Trạng</th>
     <th>&nbsp;</th>
    </tr>
    <?php
		$kqhd=mysqli_query($link,"select* from hoadon");
		$i=1;
		while($dhd=mysqli_fetch_array($kqhd)){ 
	?>
    <tr>
      <td><?php echo $i; $i++;?></td>
      <td><?php echo $dhd['TenKH'];?></td>
      <td><?php echo $dhd['NgayDat'];?></td>
      <td><?php echo $dhd['NgayXuat'];?></td>
      <td><?php echo $dhd['Tinhtrang'];?></td>
      <td align="center"><a href="process.php?xoahd=<?php echo $dhd["maHD"];?>">Xóa</a></td>
    </tr>
    <?php }?>
  </table>
  <p>Chi tiết hóa đơn:</p>
  <table width="578" border="1" cellspacing="0" align="center">
    <tr>
      <th width="36" scope="col">STT</th>
      <th width="50" scope="col">Số Lượng</th>
      <th width="265" scope="col">Tên Sản Phẩm</th>
      <th width="112" scope="col">Đơn Giá</th>
    	<th>&nbsp;</th>
    </tr>
    <?php
		$kqct=mysqli_query($link,"select* from chitiethoadon");
		$j=1;
		while($dct=mysqli_fetch_array($kqct)){ 
	?>
    <tr>
      <td><?php echo $j; $j++;?></td>
      <td><?php echo $dct['soluong'];?></td>
      <td><?php echo $dct['tensp'];?></td>
      <td><?php echo $dct['Dongia'];?></td>
     <td align="center"><a href="process.php?xoact=<?php echo $dct['maHD'];?>">Xóa</a></td>
    </tr>
    <?php }?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
