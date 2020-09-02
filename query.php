<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>關鍵字查詢</title>
<h1><p align="center"><font face="微軟正黑體">查詢結果</font></p></h1>
</head>

<body>
<?php
	ini_set("error_reporting","E_ALL &~E_NOTICE");
	//1.擷取表單資料
	$select = $_GET["select"];
	$keyword = $_GET["keyword"];
	//2.判斷查詢類型
	switch($select){
		case 'employee_id':
			$select_name='員工編號';
			break;
		case 'order_id':
			$select_name='訂單編號';
			break;
		case 'publisher_id':
			$select_name='書商編號';
			break;
		case 'mysql':
			$select_name='MYSQL';
			break;
	}
	//3.連結資料庫,進行關鍵字查詢
	
	$connect = mysqli_connect("localhost","root","12345678","buybook");
	mysqli_query($connect,"set names utf8");
	if($select_name!='MYSQL'){
	$result = mysqli_query($connect,"select * from `訂單` where `$select_name` = $keyword");}
	else
		$result = mysqli_query($connect,$keyword);
	$count=mysqli_num_rows($result);

	//每10筆記錄分頁 算總頁數
	$show=ceil($count/10);
	//輸出
	if($count==0){
		echo "<h2><p align=center><font face=微軟正黑體 color=red >找無資料！</font></p></h2>";}
	else{
		$page=$_GET["page"];	
		if($page=="")
			$page=1;
		$start=10*($page-1);
		echo "<h4>".$select_name."包含\"<font face=微軟正黑體 color=red>".$keyword."</font>\"， 共有<face=微軟正黑體 color=blue>".$count."</font> 筆記錄		目前顯示第 <face=微軟正黑體 color=blue>".$page."</font> 頁</h4>"; 
	

?>
	<!--表格-->
	<table border="1" align="center">
    <tr>	<th width="80" bgcolor="#FFFD00">員工編號
    <th width="80" bgcolor="#FFFD00">書商編號
    <th width="80" bgcolor="#FFFD00">訂單編號
    <th width="160" bgcolor="#FFFD00">訂購日期
    <th width="160" bgcolor="#FFFD00">到貨日期
    <th width="80" bgcolor="#FFFD00">總價格
    <th width="80" bgcolor="#FFFD00">是否到貨
    <th width="80" bgcolor="#FFFD00">負責人
    <th width="80" bgcolor="#FFFD00">書商姓名
    <th width="80" bgcolor="#FFFD00">書商聯絡方式
    <th width="80" bgcolor="#FFFD00">詳細資訊
<?php
	//印出結果
	while($row=mysqli_fetch_row($result)){
?>
	<tr bgcolor="#006CFF">
    <?php
		for($i=0;$i<=6;$i++){
			echo "<td>".$row[$i];}
	?>
    	
        <?php	    
			$employ=mysqli_query($connect,"select `姓名` from `員工` where `員工編號` = $row[0]");
			$employ_row=mysqli_fetch_row($employ);
			echo "<td>".$employ_row[0];
			$publisher=mysqli_query($connect,"select `姓名` from `書商` where `書商編號` = $row[1]");
			$publisher_row=mysqli_fetch_row($publisher);
			echo "<td>".$publisher_row[0];
			$publisher_number=mysqli_query($connect,"select `聯絡方式` from `書商` where `書商編號` = $row[1]");
			$publisher_rownumber=mysqli_fetch_row($publisher_number);
			echo "<td>".$publisher_rownumber[0];
			?><td>
			<?php echo "<a href=information.php?id=".$row[2]."&select=".$select_name."&keyword=".$keyword.">詳細資訊</a>";
	}
		?>

    </table>
    <h4>
	<?php
		echo "共<font color=red>".$show."</font>頁	選擇第";
		for($i=1;$i<=$show;$i++){
		echo "<a href=information.php?page=".$i."&select=".$select."&keyword=".$keyword.">".$i."</a>";	}
		echo "頁";

	} ?>
    <!--返回按鈕-->
	<form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
	<?php mysqli_close($connect);
	?>
	</h4>
</body>
</html>