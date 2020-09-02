<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>更新訂單</title>
</head>
<h1><p align="center"><font face="微軟正黑體">更新</font></p></h1>
<body>
	<!--顯示輸入框-->
	<form id="forml" name="forml" method="get" action="update_query.php">
	<div align="center">
    <h3><font face="微軟正黑體">訂單更新</font></h3> 
	<?php
    printf("訂單編號")?>
    <input name="order_id" type="text" class="pha" style="WIDTH:20%;HEIGHT:30%;" onFocus="OnFocusFun(this)" onBlur="OnBlurFun(this)" onKeyDown="OnKeyDownFun(this)" value="輸入欲更改訂單的編號">
	<?php echo '<br>'; ?>  
    <input type="submit" name="Sumbit" value="更新">
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </div></form>
   	<!--顯示輸入框-->
    <form id="forml" name="forml" method="get" action="update_.php">
    <div align="center">
    <?php echo '<br>'; ?>
    <h3><font face="微軟正黑體">使用SQL更新</font></h3>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" ></textarea>
    <?php echo '<br>'; ?>
    <input type="submit" name="Sumbit" value="更新">
    </form>
</body>
</html>