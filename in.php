<!DOCTYPE HTML ><!--PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->
<html>
<head>
  <title>輸入已知資訊</title>
</head>
<body>
  <!-- 動態新增按鈕 -->
  <div id="showBlock"></div>
  
  <!--選項表單-->
  <form id="forml" name="forml" method="get" action="in_result.php"> 
  <select name="select[]" class="pha"> 
  <option value="employee_id">employee id</option> 
  <option value="order_id">order id</option> 
  <option value="order_date">order date</option> 
  <option value="price">price</option>
  <option value="arrive_date">arrival date</option>  
  </select>
  <p><input type="button" id="btn" value="add" /></p>
  <input type="submit" name="Sumbit" value="search">
  </form>
  
<script src="http://code.jquery.com/jquery-1.9.1.js" charset="big5"></script>
<script charset="big5">
  //設定預設值
  var txtId = 1;
  
  //點擊按鈕新增以下內容
  $("#btn").click(function () {
      $("#showBlock").append(' <div id="div' + txtId + '"> Input:<input type="text" name="name[]" /> <input type="button" value="del" onclick="deltxt('+txtId+')"></div>');
      txtId++;
  });
  //移除
  function deltxt(id) {
      $("#div"+id).remove();
  }
</script> 
</body>
</html>