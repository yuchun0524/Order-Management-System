<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>刪除資料</title>
<h1><p align="center"><font face="微軟正黑體">欲刪除資料</font></p></h1>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//取得輸入資料
	$select = $_GET["select"];
	$keyword = $_GET["keyword"];
	//辨識選項
	switch($select){
		case 'order_id':
			$select_name='訂單編號';
			break;
		case 'isbn':
			$select_name='ISBN';
			break;
		case 'mysql':
			$select_name='MYSQL';
			break;
	}
	//連結資料庫
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	//根據選項做不同處理
	if($select_name!='MYSQL'){
		if($select_name!='ISBN')
			$result = mysqli_query($connect,"select * from `訂單` where `$select_name` like '%$keyword%'");
		else
			$result = mysqli_query($connect,"select * from `書` where `$select_name` like '%$keyword%'");
		$count=mysqli_num_rows($result);
	if($count==0){
		echo "<h2><p align=center><font face=微軟正黑體 color=red >無欲刪除的資料！</font></p></h2>";}
	else{
		if($select_name=='ISBN'){
			//表格
			?>
            <table border="1" align="center">
    		<tr>	<th width="80" bgcolor="#FFFD00">訂單編號
    		<th width="240" bgcolor="#FFFD00">書名
    		<th width="80" bgcolor="#FFFD00">價錢
    		<th width="80" bgcolor="#FFFD00">數量
    		<th width="80" bgcolor="#FFFD00">主題
    		<th width="160" bgcolor="#FFFD00">ISBN
            <?php
			//輸出
			while($row=mysqli_fetch_row($result)){
			?>
			<tr bgcolor="#006CFF">
    		<?php
			for($i=0;$i<=5;$i++){
				echo "<td>".$row[$i];}
			?>
    		<td>
    		<?php } ?>
    		</table>
            <?php
            $delete=mysqli_query($connect,"delete from `書` where `$select_name` = $keyword");
			if(!$delete )
			{
  				die('無法刪除資料' . mysql_error());
			}
			else
                echo "已成功刪除資料\n";
			}
		else if($select_name=='訂單編號'){ ?>
        	<table border="1" align="center">
    		<tr>	<th width="80" bgcolor="#FFFD00">員工編號
    		<th width="80" bgcolor="#FFFD00">訂單編號
    		<th width="160" bgcolor="#FFFD00">訂購日期
    		<th width="160" bgcolor="#FFFD00">到貨日期
    		<th width="80" bgcolor="#FFFD00">總價格
    		<th width="80" bgcolor="#FFFD00">是否到貨
            <?php
			while($row=mysqli_fetch_row($result)){
			?>
			<tr bgcolor="#006CFF">
    		<?php
			for($i=0;$i<=5;$i++){
				echo "<td>".$row[$i];}
			?>
    		<td>
        	<?php
			}
			?>
    		</table>
			<?php 
			$delete=mysqli_query($connect,"delete from `訂單` where `$select_name` = $keyword");
			if(!$delete )
			{
  				die('無法刪除資料' . mysql_error());
			}
			else
                echo "已成功刪除資料\n";
			} 	
	}
	}
	else{ 
			$delete=mysqli_query($connect, $keyword);
			if(!$delete )
			{
  				die('無法刪除資料' . mysql_error());
			}
			else
                echo "已成功刪除資料\n";
			}		
?>
</body>
</html>