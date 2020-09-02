<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新增訂單</title>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//取得資料
	$employ_id = $_GET["employ_id"];
	$publisher_id = $_GET["publisher_id"];
	$order_id = $_GET["order_id"];
	$order_date = $_GET["order_date"];
	$arrive_date = $_GET["arrive_date"];
	$price = $_GET["price"];
	$arrived = $_GET["arrived"];
	$keyword = $_GET["keyword"];
	//連接資料庫
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	//判斷新增方式
	if(!empty($keyword))
		$result = mysqli_query($connect,$keyword);
	else
		$result = mysqli_query($connect,"INSERT INTO `訂單`(`員工編號`, `書商編號`, `訂單編號`, `訂購日期`, `到貨日期`, `總價格`, `是否到貨`) VALUES ('$employ_id','$publisher_id','$order_id','$order_date','$arrive_date',$price,'$arrived')");
	if($result)
		printf("已成功新增資料");
	else
		printf("無法新增資料");	
?>
<!-- 返回-->
	<form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>