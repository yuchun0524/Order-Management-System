<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新訂單內容</title>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//取得資料
	$book_name = $_GET["book_name"];
	$book_price = $_GET["book_price"];
	$book_count = $_GET["book_count"];
	$theme= $_GET["theme"];
	$isbn = $_GET["isbn"];
	$order_id = $_GET["order_id"];
	//連接資料庫
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	$result = mysqli_query($connect,"UPDATE `書` SET `訂單編號`='$order_id',`書名`='$book_name',`價錢`='$book_price',`數量`='$book_count',`主題`='$theme',`ISBN`='$isbn' WHERE `ISBN`= $isbn");
	$check=mysqli_query($connect,"select * from `書` where `ISBN`= $isbn");
	//顯示結果
	if($result && mysqli_num_rows($check)!=0)
		printf("已成功更新資料");
	else
		printf("無法更新資料");
?>
<!-- 返回-->
<form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>