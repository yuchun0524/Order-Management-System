<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新增</title>
</head>
<h1><p align="center"><font face="微軟正黑體">新增資料</font></p></h1>
<body>
<!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="insert_.php">
<div align="center">
    <h3><font face="微軟正黑體">新增訂單</font></h3>
    <?php
    printf("員工編號")?>
    <input name="employ_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="編號">
	<?php echo '<br>'; ?>  
    <?php
    printf("書商編號")?>
    <input name="publisher_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="編號">
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
	<input type="submit" name="Sumbit" value="新增">
    <?php echo '<br>'; ?>  
    <?php echo '<br>'; ?> 
    <div align="right">
    <!-- 返回-->
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </div>
</form>
<!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="insert_content.php">
    <div align="center">
    <h3><font face="微軟正黑體">新增訂單內容</font></h3>
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
    <input type="submit" name="Sumbit" value="新增">
	</div></form>
    <!-- 顯示輸入框取得使用者輸入內容-->
    <form id="forml" name="forml" method="get" action="insert_.php">
    <div align="center">
    <?php echo '<br>'; ?>
    <h3><font face="微軟正黑體">使用SQL新增</font></h3>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" ></textarea>
    <?php echo '<br>'; ?>
    <input type="submit" name="Sumbit" value="新增">
    </form>
</body>
</html>