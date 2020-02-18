<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="MAX_FILE_SIZE" value="800000"/>	
  <label for="ufile">Chon file:</label>
  <input type="file" name="ufile" id="ufile" value="hinh-nen-phong-cach-thien-nhien-dep-nhat-cho-may-tinh-5" />
  <input type="submit" name="thuchien" id="thuchien" value="Up file" />
</form>
<?php
if(isset($_FILES['ufile']))
{
	$target="upload/";
	$filename=basename($_FILES['ufile']['name']); //name, size, type, tmp_name
	$target.=$filename;
	echo $target;
	
	//kiem tra file ton tai chua?
	if(file_exists($target)) echo "File da ton tai!<br/>";
	else echo "File chua co!<br/>";
	if(preg_match("/\.(jpg|gif|png)$/i",$filename)) echo "Day la file anh!";
	else echo "Day khong phai file anh!";
	
	
	if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target)) 
	{	echo "Up file thanh cong!";
		echo "<br/>".$_FILES['ufile']['size']." ".$_FILES['ufile']['type'];
	}
	else echo "Up file that bai!";
	
	
	
	
	
}
?>
</body>
</html>