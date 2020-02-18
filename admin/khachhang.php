<div style="color:#F66"> <h1><i>Quản lý Khách Hàng</i></h1></div>

  <table width="800" border="1" cellspacing="0">
    <tr>
      <th width="41" scope="col">STT</th>
      <th width="168" scope="col">Tên Khách Hàng</th>
      <th width="313" scope="col">Địa Chỉ</th>
      <th width="151" scope="col">sđt</th>
        <th width="105" scope="col"><a href="index.php?id=Them_KH">Thêm</a></th>
    </tr>
    <?php
	$kq=mysqli_query($link,"select* from khachhang");
	$i=1;
	while($d=mysqli_fetch_array($kq)){
	?>5
    <tr>
      <td><?php echo $i; $i++;?></td>
      <td><?php echo $d["TenKH"];?></td>
      <td><?php echo $d["Diachi"];?></td>
      <td><?php echo $d["sdt"];?></td>
      <td align="center"><a href="index.php?id=Sua_KH&idKH=<?php echo $d['MaKH'];?>">Sữa</a> / <a href="process.php?xoaK=<?php echo $d['MaKH'];?>">Xóa</a></td>
    </tr>
    <?php }?>
  </table>
