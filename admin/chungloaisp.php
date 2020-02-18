
<div style="color:#F66"> <h1><i>Quản lý chủng loại sản phẩm</i></h1></div>
<table width="800" border="1" cellspacing="0" align="center">
  <tr>
    <th width="152" scope="col">STT</th>
    <th width="741" scope="col">Tên Chủng Loại</th>
    <th width="93" scope="col"><a href="index.php?id=them_CL">Thêm</a></th>
  </tr>
  <?php 
  $kqCL=mysqli_query($link,"select* from chungloaisanpham");
	while($d=mysqli_fetch_array($kqCL)){  
  ?>
  <tr>
    <td><?php echo $d['idCL'];?></td>
    <td><?php echo $d['TenCL'];?></td>
    <td><a href="index.php?id=Sua_CL&&idCL=<?php echo $d['idCL'];?>">Sữa</a> / <a href="process.php?xoa=<?php echo $d['idCL'];?>">Xóa</a></td>
  </tr>
  <?php }?>
</table>







