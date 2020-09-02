<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>刪除資料</title>
<h1><p align="center"><font face="微軟正黑體">刪除</font></p></h1>
</head>

<body>
<?php
$connect = mysqli_connect("localhost","root","12345678","buybook"); // connect server
//mysql_select_db("buybook"); //select database
if($connect){
	mysqli_query($connect,"set names utf8"); // read data with utf8
	?>
    <!-- 顯示輸入框取得使用者輸入內容-->
	<form id="forml" name="forml" method="get" action="delete_.php">
	<div align="center">
	<select name="select" class="pha">
        <option value="order_id">訂單編號</option>
        <option value="isbn">ISBN</option>
        <option value="mysql">MYSQL</option>
	</select>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" ></textarea>
	
	<input type="submit" name="Sumbit" value="刪除" style="font-family:微軟正黑體;">
	</div>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
    <?php
	}
else{
	echo "無法連接資料庫";
}	
?>
</body>
</html>