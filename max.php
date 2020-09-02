<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查詢價格</title>
<h1><p align="center"><font face="微軟正黑體">查詢最高價格</font></p></h1>
</head>

<body>
<!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="max_result.php">
	<div align="center">
	<select name="select" class="pha">
		<option value="order">訂單</option>
        <option value="order_content">訂單內容</option>
        <option value="mysql">MYSQL</option>
	</select>
	<textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" >選取MYSQL才需填寫</textarea>
	<input type="submit" name="Sumbit" value="查詢">
	</div></form>
 <h1><p align="center"><font face="微軟正黑體">查詢最低價格</font></p></h1>
 <!-- 顯示輸入框取得使用者輸入內容-->
 	<form id="forml" name="forml" method="get" action="min_result.php">
	<div align="center">
	<select name="select" class="pha">
		<option value="order">訂單</option>
        <option value="order_content">訂單內容</option>
        <option value="mysql">MYSQL</option>
	</select>
	<textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" >選取MYSQL才需填寫</textarea>
	<input type="submit" name="Sumbit" value="查詢">
	</div></form>
</body>
</html>