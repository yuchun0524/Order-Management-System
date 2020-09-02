<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>總價格</title>
<h1><p align="center"><font face="微軟正黑體">查詢總價</font></p></h1>
</head>

<body>
<!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="sum_.php">
	<div align="center">
	<select name="select" class="pha">
		<option value="order">訂單</option>
        <option value="order_content">訂單內容</option>
        <option value="mysql">MYSQL</option>
	</select>
	<textarea name="keyword" cols="45" rows="5" style="OVERFLOW:visible" >選取訂單無需輸入，選取訂單內容請輸入訂單編號，選取MYSQL請直接輸入指令</textarea>
	<input type="submit" name="Sumbit" value="查詢">
	</div></form>
    <!--返回-->
    <form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>