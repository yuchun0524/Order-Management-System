<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>最低價格</title>
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
	//根據選項做不同處理
	if($select_name=='訂單')
		$result = mysqli_query($connect,"select min(總價格) from `訂單`");
	else if($select_name=='書')
		$result = mysqli_query($connect,"select min(價錢) from `書`");
	else
		$result = mysqli_query($connect,$keyword);
		printf("%s最低價錢：",$select_name);
		//輸出
	while($row=mysqli_fetch_row($result)){

		for($i=0;$i<=5;$i++){
			echo "<td>".$row[$i];}
	?>
    	<td>
        <?php
	}
		?>
</body>
</html>