<?php session_start(); ?>
<?php require_once('header.php'); ?>
<?php require_once('connectvars.php') ?>
<?php $title = 'The Muscle Training Website'; ?>
<title><?php echo $title; ?></title>
</head>

<body>
<div class="content">
  <?php require_once('login.php'); ?>
  <?php require_once('navigation.php'); ?>
  <h1>Muscle training Website</h1>
  <h2>your level in the real world</h2>
  <hr size="1"/>
  you won't be the world's strongest man,this website will never change 
  your dream,but others. let them dream of being you.<br /><br />
  <a href="register1.php">添加用户</a><br /><br />
  <a href="announcementaddfinal.php">添加公告</a><br /><br />
  <a href="approval2.php" target="_blank">用户验证</a><br /><br />
  <a href="/test/test.php" target="_blank">IP记录</a><br /><br />
  
  
  
  
  <hr size="1"/>	
  
  <?php require('footer.php'); ?>
</div>
</body>


</html>