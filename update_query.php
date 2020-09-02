<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂單更新</title>
</head>

<body>
<?php
ini_set("error_reporting","E_ALL &~E_NOTICE");
//取得資料
$order_id = $_GET["order_id"];
//連接資料庫
$connect = mysqli_connect("localhost","root","12345678","buybook");
mysqli_query($connect,"set names utf8");
$result = mysqli_query($connect,"select * from `訂單` where `訂單編號` = $order_id");
//顯示欲修改資料
if($result){
?>
<table border="1" align="center">
    <tr>	<th width="80" bgcolor="#FFFD00">員工編號
    <th width="80" bgcolor="#FFFD00">書商編號
    <th width="80" bgcolor="#FFFD00">訂單編號
    <th width="160" bgcolor="#FFFD00">訂購日期
    <th width="160" bgcolor="#FFFD00">到貨日期
    <th width="80" bgcolor="#FFFD00">總價格
    <th width="80" bgcolor="#FFFD00">是否到貨
    <th width="80" bgcolor="#FFFD00">詳細資訊
<?php
	while($row=mysqli_fetch_row($result)){
?>
	<tr bgcolor="#006CFF">
    <?php
		for($i=0;$i<=6;$i++){
			echo "<td>".$row[$i];}
	?>
    	<td> 
        <?php
		    echo "<a href=update_information.php?id=".$row[2]."&select=".$select_name."&keyword=".$keyword.">詳細資訊</a>";
	}
		?>
    </table>
    <!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="update_.php">
	<div align="center">
    <h3><font face="微軟正黑體">訂單更新</font></h3>
<?php
    printf("員工編號")?>
    <input name="employ_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="編號">
	<?php echo '<br>'; ?>  
	<?php
    printf("訂單編號")?>
    <input name="order_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="編號">
	<?php echo '<br>'; ?>  
    <?php
    printf("訂購日期")?>
	<input name="order_date" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="日期">
    <?php echo '<br>'; ?>
    <?php
    printf("到貨日期")?>
    <input name="arrive_date" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="日期">
	<?php echo '<br>'; ?>    
    <?php
    printf("總價格")?>
    <input name="price" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="價格">
    <?php echo '<br>'; ?>  
    <?php
    printf("是否到貨")?>
    <input name="arrived" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="是或否？">
    <?php echo '<br>'; ?>  
    <?php echo '<br>'; ?>  
	<input type="submit" name="Sumbit" value="更新">
    <?php echo '<br>'; ?>  
    <?php echo '<br>'; ?>  
    </div></form>
    <?php }
    else
        printf("無法更新資料");
	 ?>
</body>
</html>