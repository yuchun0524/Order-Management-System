<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>詳細資訊</title>
<h1><p align="center"><font face="微軟正黑體">詳細資訊</font></p></h1>
</head>

<body>
<?php
ini_set("error_reporting","E_ALL &~E_NOTICE");
//取得資料
$id = $_GET["id"];
//連接資料庫
$connect = mysqli_connect("localhost","root","12345678","buybook");
mysqli_query($connect,"set names utf8");
//進行查詢
$result = mysqli_query($connect,"select * from `書` where `訂單編號` = $id order by `價錢`");
$count=mysqli_num_rows($result);

//輸出
if($count==0){
	echo "<h2><p align=center><font face=微軟正黑體 color=red >無詳細資訊</font></p></h2>";}
else{
?>
    <table border="1" align="center">
    <tr>	<th width="80" bgcolor="#FFFD00">訂單編號
    <th width="240" bgcolor="#FFFD00">書名
    <th width="80" bgcolor="#FFFD00">價錢
    <th width="80" bgcolor="#FFFD00">數量
    <th width="80" bgcolor="#FFFD00">主題
    <th width="160" bgcolor="#FFFD00">ISBN
<?php
	while($row=mysqli_fetch_row($result)){
?>
	<tr bgcolor="#006CFF">
    <?php
		for($i=0;$i<=5;$i++){
			echo "<td>".$row[$i];}
	?>
    <?php
	}
	?>
    </table>
    <?php
}
    mysqli_close($connect);
	?>

</body>
</html>