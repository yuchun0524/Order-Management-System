<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>透過已知資料查詢</title>
<h1><p align="center"><font face="微軟正黑體">請點選欲查詢訂單或訂單內容</font></p></h1>
</head>

<body>
<!-- 顯示按鈕-->
<form>
<div align="center" ><input type="button" value="已知訂單資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/in.php'"></div>
<div align="center" ><input type="button" value="已知訂單內容的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/in_content.php'"></div>
</form>
<!-- 顯示輸入框取得資料-->
 <form id="forml" name="forml" method="get" action="in_sql.php">
    <div align="center">
    <?php echo '<br>'; ?>
    <h3><font face="微軟正黑體">使用SQL查詢</font></h3>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" >請直接輸入指令</textarea>
    <?php echo '<br>'; ?>
    <input type="submit" name="Sumbit" value="查詢">
    </form>
    <!-- 返回-->
	<form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>