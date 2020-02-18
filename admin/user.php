<div style="color:#F66"> <h1><i>Quản lý User</i></h1></div>

<table width="800" border="1" cellspacing="0"align="center">
  <tr>
    <th width="58" scope="col">STT</th>
    <th width="174" scope="col">Họ Tên</th>
    <th width="187" scope="col">User name</th>
    <th width="213" scope="col">Email</th>
    <th width="72" scope="col">Giới Tính</th>
    <th width="70" scope="col"><a href="index.php?id=them_user">Thêm</a></th>
  </tr>
  <?php 
	$kq=mysqli_query($link,"select* from user");
	$i=1;
	while($d=mysqli_fetch_array($kq)){
  ?>
  <tr>
    <td><?php echo $i; $i++;?></td>
    <td><?php echo $d["Hoten"];?></td>
    <td><?php echo $d["username"];?></td>
    <td><?php echo $d["email"];?></td>
    <td><?php if($d["Gioitinh"]) echo "Nam"; else echo "Nữ";?></td>
    <td><a href="index.php?id=Sua_user&idUser=<?php echo $d["idUser"];?>">Sữa</a> /<a href="process.php?xoaU=<?php echo $d["idUser"];?>"> Xóa</a></td>
  </tr>
  <?php }?>
</table>












