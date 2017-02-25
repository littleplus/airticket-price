<html>
<head>
<script type="text/javascript" src="./showdate.js"></script>
</head>
<body>
<form action ="t2.php" method ="post"> 
日期:<input type="text" id="st" name="st" onclick="return Calendar('st');" value="" class="text" style="width:85px;"/>-<input type="text" id="et" onclick="return Calendar('et');" value="" name="ed" class="text" style="width:85px;"/>
<input type ="submit" value="ok" /> 
</form>
</body>
</html>
<?php
$st=$_POST["st"];
$ed=$_POST["ed"];
if (strtotime($ed)-strtotime($st)<0) echo ('终止日期大于起始日期，请重新设置');
else if (strtotime($ed)-strtotime(date('Y-m-d'))>7776000) echo ('查询时间不能超过当前日期延后90天');
else if (strtotime($ed)-strtotime($st)>2592000) echo '查询时间段不能超过30天，请重新设置';
else if ($ed==NULL || $st==NULL) echo ('请选择日期');
else echo $con=file_get_contents("http://cn2.xjh.me/t3.php?st=$st&ed=$ed&check=test");
;
?>
