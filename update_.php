<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新訂單</title>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//取得資料
	$employ_id = $_GET["employ_id"];
	$order_id = $_GET["order_id"];
	$order_date = $_GET["order_date"];
	$arrive_date = $_GET["arrive_date"];
	$price = $_GET["price"];
	$arrived = $_GET["arrived"];
	$keyword = $_GET["keyword"];
	//連接資料庫
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	//判斷是否sql
	if(!empty($keyword))
		$result = mysqli_query($connect,$keyword);
	else
		$result = mysqli_query($connect,"UPDATE `訂單` SET `員工編號`='$employ_id',`訂單編號`='$order_id',`訂購日期`='$order_date',`到貨日期`='$arrive_date',`總價格`='$price',`是否到貨`='$arrived' WHERE `訂單編號`= $order_id");
		$check=mysqli_query($connect,"select * from `書` where `訂單編號`= $order_id");
		//確定為可更新資料才算成功
	if($result&& mysqli_num_rows($check)!=0)
		printf("已成功更新資料");
	else
		printf("無法更新資料");	
?>

</body>
</html>