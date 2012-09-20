<?php
session_start();
  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_nickname']) && isset($_COOKIE['user_info_id']) ) {
      $_SESSION['user_id'] = $_COOKIE['user_id'];
	  $_SESSION['user_info_id'] = $_COOKIE['user_info_id'];
      $_SESSION['user_nickname'] = $_COOKIE['user_nickname'];
    }
  }
if ($_SESSION['user_id'] != 'sunny') exit;
require_once('connectvars.php');
//链接数据库 , 让管理员查看被审核状态,显示所有数据~
if( isset($_GET['id']) ){
	$id = $_GET['id'];
	
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	mysqli_query($dbc,"SET NAMES 'utf8'");
	
	$query = "DELETE FROM zhuce_before WHERE id = '$id' LIMIT 1 "; //删除操作
	mysqli_query($dbc, $query);
	
	mysqli_close($dbc);
	echo 'succeed deleted';
	header('Location: approval2.php');

}
else{
echo '未得到ID';
}

?>