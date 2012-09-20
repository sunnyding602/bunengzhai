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
  <p>you won't be the world's strongest man,this website will never change 
    your dream,but others. let them dream of being you.<br /><br />
    <?php require_once('announcementshow1.php'); ?>
    
    
 </p>
  <p><a href="index.php">&lt;-back</a></p>
  <hr size="1"/>
  <?php require('footer.php'); ?>
</div>
</body>


</html>
