<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css" />
<style>
ul{ list-style:none;}
a{ text-decoration:none; color:#FFF;}
.menu1 ul{ position:absolute; top:42px; left:0; display:none;}
.menu1 li{ float:left; position:relative; text-align: center; width:150px; line-height:1.5em; background: #333; padding:10px;}
.menu1 li:hover{ background: #666; cursor: pointer; background-color:;}
.menu1 ul ul{ left:150px; top:0px;}
#menu{ clear:both;}
</style>
</head>

<body>
<div class="menu">
<ul class="menu1">
<li><a href="#">Trang chủ</a></li>
<li><a href="#">Sản phẩm</a>
<ul><li><a href="#">Laptop</a>
</li>
<li><a href="#">Tablet</a></li></ul>
</li>
<li><a href="#">Trợ giúp</a></li>
<li><a href="#">Liên hệ</a></li>
</ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
	$(".menu1 li").hover(function(){
		$(this).find("ul:first").slideDown(500);
	},function(){
		$(this).find("ul:first").hide(100);
	});
});
</script>
</body>
</html>