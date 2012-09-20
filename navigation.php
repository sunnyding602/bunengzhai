
<strong>&nbsp;BETA VERISON 11.2</strong>|
<a href="index.php" >首页</a>|
<?php 
if( !isset($_SESSION['user_id']) ){
echo '<a href="zhuce.php" target="_blank">用户注册</a>|';
echo '<a href="yanzheng.php" target="_blank">验证页面</a>|';
}

?>



<?php 
 if( isset($_SESSION['user_info_id']) ){
	 $user_info_id = $_SESSION['user_info_id'];
	echo '<a href="changeinfo.php?user_info_id='.$user_info_id.'" target="_blank">个人中心</a>|';
 }
?>

<a href="user_statistics_1.php" >每日数据统计</a>|

<a href="bar_tieba/index1.php" target="_blank">小分队贴吧</a>|<strong><a href="about.php" target="_blank">About</a></strong>| 在线人数: <strong>
<?php require('onlinetotals.php');?>
</strong>