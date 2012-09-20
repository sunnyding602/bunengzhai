<?php require_once('includes/initialize.php'); ?>
<?php require_once('header.php'); ?>
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
  <strong>提交您的信息待管理员审核,我们不会以任何方式向您询问密码</strong><br />	
  
  <?php require('zhuce_form.php');?>
  
  
  
  
  <hr size="1"/>
  <?php require('footer.php'); ?>
</div>
</body>


</html>