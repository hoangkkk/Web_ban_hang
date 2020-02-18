
<style>
#menu{width:100%; background-color:; min-height:25px;}
.menu{ float:left; text-align:center; background-color:#FFC;}
</style>


<div id="menu">
<div class="menu"><a href="index.php">Trang chủ</a> &nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="menu"><a href="index.php?id=3&idCL=1">Laptop</a> &nbsp;</div>
<div class="menu"><a href="index.php?id=4&idCL=2">Tablet</a> &nbsp;</div>

<div class="menu"><a href="#">Trợ giúp</a> &nbsp;</div>
<div class="menu"><a href="#">Liên hệ </a>&nbsp;</div>
<div class="menu">
  <form id="form1" name="form1" method="post" action="index.php?id=5">
    <label for="find"></label>
    <input name="find" type="text" id="find" value="<?php if(isset($_POST["find"])) echo $_POST["find"];?>" /> 
    <input type="submit" name="tim" id="tim" value="Tìm kiếm" />
  </form>
