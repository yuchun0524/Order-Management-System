
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查詢</title>
</head>
<h1><p align="center"><font face="微軟正黑體">查詢</font></p></h1>
<body>
<?php
$connect = mysqli_connect("localhost","root","12345678","buybook"); // connect server
//mysql_select_db("buybook"); //select database
if($connect){
	mysqli_query($connect,"set names utf8"); // read data with utf8
	
	$data = mysqli_query($connect,"select * from 訂單");
	if (!$data) {
 		printf("Error: %s\n", mysqli_error($connect));
 		exit();
	}
	}
else{
	echo "無法連接資料庫";
}
//<input name="keyword" type="textarea" class="pha" style="WIDTH:200px;HEIGHT:100px;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="關鍵字">
	?>
	<form id="forml" name="forml" method="get" action="query.php">
	<div align="center">
	<select name="select" class="pha">
		<option value="employee_id">員工編號</option>
        <option value="order_id">訂單編號</option>
        <option value="publisher_id">書商編號</option>
        <option value="mysql">MYSQL</option>
	</select>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" ></textarea>
	
	<input type="submit" name="Sumbit" value="查詢">
	</div></form>


</body>
</html>