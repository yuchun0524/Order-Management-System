<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>總價格</title>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//取得資料
	$select = $_GET["select"];
	$keyword = $_GET["keyword"];
	//辨識選項
	switch($select){
		case 'order':
			$select_name='訂單';
			break;
		case 'order_content':
			$select_name='書';
			break;
		case 'mysql':
			$select_name='';
			break;
	}
	//連接資料庫
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	//根據選項做不同指令
	if($select_name=='訂單'){
		$result = mysqli_query($connect,"SELECT SUM(總價格) FROM `訂單`");
		printf("%s總價：",$select_name);}
	else if($select_name=='書'){
		$result = mysqli_query($connect,"select sum(價錢*數量) from `書` where `訂單編號` = $keyword");
		printf("訂單編號%s書籍總價：",$keyword);}
	else{
		$result = mysqli_query($connect,$keyword);
		printf("總價：");
		}
		//輸出
	while($row=mysqli_fetch_row($result)){

		for($i=0;$i<=5;$i++){
			echo "<td>".$row[$i];}
	?>
    	<td>
        <?php
	}
		?>
        <!--返回-->
        <form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>