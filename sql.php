<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sql</title>
</head>

<body>
<!-- 顯示輸入框取得使用者輸入內容-->
<form id="forml" name="forml" method="get" action="sql_.php">
    <div align="center">
    <?php echo '<br>'; ?>
    <h3><font face="微軟正黑體">使用SQL指令</font></h3>
    <textarea name="keyword" cols="40" rows="5" style="OVERFLOW:visible" >請直接輸入指令</textarea>
    <?php echo '<br>'; ?>
    <input type="submit" name="Sumbit" value="執行">
    </form>
    <!--返回-->
    <form>
    <div align="right">
    <input type="button" value="返回訂書管理系統主頁面" style="width:200px;height:40px;font-size:15px;font-family:微軟正黑體;" onclick="location.href='http://localhost/php/web.php'"></div>
    </form>
</body>
</html>