<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>透過sql查詢</title>
</head>

<body>

<?php
ini_set("error_reporting","E_ALL &~E_NOTICE");
//取得輸入
$keyword = $_GET["keyword"];
//連結資料庫
$connect = mysqli_connect("localhost","root","12345678","buybook");
mysqli_query($connect,"set names utf8");
$result = mysqli_query($connect,$keyword);
//印出結果
while($row=mysqli_fetch_row($result)){

		for($i=0;$i<=6;$i++){
			?><br><?php
			echo "<td>".$row[$i];}
			?><br><?php
	}
	//返回按鈕
		?> 
     <form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>