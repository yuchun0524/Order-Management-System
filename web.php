<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>訂書管理系統</title>
<h1><p align="center"><font face="微軟正黑體">訂書管理系統</font></p></h1>
</head>
<body>
<!--顯示按鈕並連結到各個功能-->
<form>
<div align="center" ><input type="button" value="SELECT，查詢訂單的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/select.php'"></div>
<div align="center" ><input type="button" value="DELETE，刪除訂單的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/delete.php'"></div>
<div align="center" ><input type="button" value="UPDATE，更新訂單的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/update.php'"></div>
<div align="center" ><input type="button" value="INSERT，新增訂單的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/insert.php'"></div>
<div align="center" ><input type="button" value="透過已知資訊查詢訂單的資料" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/in_option.php'"></div>
<div align="center" ><input type="button" value="找尋價格極端值的訂單或書籍" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/max.php'"></div>
<div align="center" ><input type="button" value="查詢總價" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/sum.php'"></div>
<div align="center" ><input type="button" value="查詢平均價格" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/avg.php'"></div>
<div align="center" ><input type="button" value="透過價格條件找尋訂單或書" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>  <!--replace web.php with having.php-->
<div align="center" ><input type="button" value="執行sql指令" style="width:300px;height:40px;font-size:20px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/sql.php'"></div>
</form>
</body>
</html>