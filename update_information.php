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
$result = mysqli_query($connect,"select * from `書` where `訂單編號` = $id  order by `價錢`");
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
} ?>
<!-- 顯示輸入框取得使用者輸入內容-->
     <form id="forml" name="forml" method="get" action="update_content.php">
    <div align="center">
    <h3><font face="微軟正黑體">訂單內容更新</font></h3>
    <?php printf("書名")?>
    <input name="book_name" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="名稱">
    <?php echo '<br>'; ?> 
    <?php printf("價錢")?>
    <input name="book_price" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="價錢">
    <?php echo '<br>'; ?> 
    <?php printf("數量")?>
    <input name="book_count" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="數字">
    <?php echo '<br>'; ?>
    <?php printf("主題")?>
    <input name="theme" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="名稱">
    <?php echo '<br>'; ?> 
    <?php printf("ISBN")?>
    <input name="isbn" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="13碼或10碼">
    <?php echo '<br>'; ?>  
	<?php
    printf("訂單編號")?>
    <input name="order_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="編號">
    <?php echo '<br>'; ?> 
    <?php echo '<br>'; ?>  
    <input type="submit" name="Sumbit" value="更新">
	</div></form>
    
<?php mysqli_close($connect);?>
</body>
</html>