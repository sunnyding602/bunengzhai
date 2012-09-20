<?php session_start(); 


?>
<html>
<head>
 
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
swfobject.embedSWF(
"open-flash-chart.swf", "my_chart", "820", "200",
"9.0.0", "expressInstall.swf",
{"data-file":"../../../zhuzhuangtu.php"} );
</script>
 
</head>
<body>
 

 
 
<div id="my_chart"></div>
 

 
</body>
</html>
