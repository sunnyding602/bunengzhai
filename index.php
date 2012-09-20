<?php
require_once('includes/initialize.php');
?>
<?php

require_once ('header.php');

?>

<?php

$title = '不能宅.cn';
?>
<?php

require_once ('jishuqi.php');
?>
<title><?php
echo $title;
?></title>

</head>

<body>

<div class="content">
  <?php
require_once ('login.php');
?>
<?php

require_once ('navigation.php');
?>

<!-- google eyes   start -->
<br />

<SCRIPT src="http://www.520750.com/google_eyes/0TBAQTjt0HQ.js"></SCRIPT>
<style>
#EYES_pupil0__MODULE_ID__,#EYES_pupil1__MODULE_ID__ {
  position:relative;
  width:15px;
  height:15px;
  left:52px;
  top:52px;
}
</style>

<table border=0 align=center cellpadding=0 cellspacing=0 frame=void rules=none>
<tr>
  <td background="http://www.520750.com/google_eyes/eye-r.gif">
   <div style="width:117px;height:117px;">
    <img src="http://www.520750.com/google_eyes/pupil.gif" id="EYES_pupil0__MODULE_ID__">
   </div>
  </td>
  <td background="http://www.520750.com/google_eyes/eye-y.gif">
   <div style="width:117px;height:117px;">
    <img src="http://www.520750.com/google_eyes/pupil.gif" id="EYES_pupil1__MODULE_ID__">
    </div>
  </td>
</tr>
</table>

<script type="text/javascript">
<!-- With thanks to Keith Packard and Jeremy Huxtable and Dylan Parker -->

var EYES__MODULE_ID__ = {
  MAX_DIST : 37,     // furthest pupil can move from center
  EYE_RADIUS : 59,   // eye image width / 2
  PUPIL_RADIUS : 7,  // pupil image width / 2
  pupils : [],

  init : function() {
    _IG_AddDOMEventHandler(document, "mousemove", EYES__MODULE_ID__.moveEyes);
    EYES__MODULE_ID__.pupils =
      [ _gel("EYES_pupil0__MODULE_ID__"), _gel("EYES_pupil1__MODULE_ID__") ];
  },

  moveEyes : function(e) {
    if (!e) e = window.event;
    var app = EYES__MODULE_ID__;

    for (var i = 0; i < app.pupils.length; i++) {
      var pupil = app.pupils[i];

      // The middle points of the eyes
      var midx = app.getPagePos(pupil.parentNode,true) + app.EYE_RADIUS;
      var midy = app.getPagePos(pupil.parentNode,false) + app.EYE_RADIUS;

      // Page scroll
      var scrollx = 0;
      var scrolly = 0;
      if (typeof(window.pageXOffset) == 'number') {
        scrollx = window.pageXOffset;
        scrolly = window.pageYOffset;
      } else {
        scrollx = document.documentElement.scrollLeft;
        scrolly = document.documentElement.scrollTop;
      }

      // The distX/distY from eye middles to the mouse
      var distX = e.clientX + scrollx - midx;
      var distY = e.clientY + scrolly - midy;

      // The absolute distance from eye middles to the mouse
      var dist = Math.sqrt(Math.pow(distX, 2) + Math.pow(distY, 2));

      if (dist > app.MAX_DIST) {
        // mouse out of eyeball, scale distX/distY to be at eyeball edge
        var scale = app.MAX_DIST / dist;
        distX *= scale; distY *= scale;
      }

      // Place the pupil appropriately
      pupil.style.left = parseInt(distX + app.EYE_RADIUS - app.PUPIL_RADIUS) + "px";
      pupil.style.top = parseInt(distY + app.EYE_RADIUS - app.PUPIL_RADIUS) + "px";
    }
  },

  // get page coords for an element
  getPagePos : function(el, left) {
    var val=0;
    while(el != null) {
      val += el["offset"+(left?"Left":"Top")];
      el = el.offsetParent;
    }
    return val;
  }

};

EYES__MODULE_ID__.init();

</script>
<!--google eyes end-->
别偷懒! ta会一直在注视着你哟~
<h1>Welcome! This is BuNengZhai.CN</h1> 
  <h2>your level in the real world</h2>
  <hr size="1" />
  you won't be the world's strongest man,this website will never change
  your dream,but others. let they dream of being you.
  <br />
  <br />
  <strong>不能宅.cn:不知道本网站是做什么的?<a href="about.php">点击帮助</a> | 各位仁兄!下面有周排行榜别忘了点点看</strong>
   <?php $weekrank = "$url_this".'?rank=week'; 
   		$totalrank = "$url_this".'?rank=total'; 
   ?>
   <br />
  <strong><a href="<?php echo $weekrank?>">查看周排行</a></strong> |
  <strong><a href="<?php echo $totalrank?>">查看总排行</a></strong>
  <?php

// Connect to the database
$dbc = mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
mysqli_query ( $dbc, "SET NAMES 'utf8'" );




if(isset($_GET['rank'])){
	if($_GET['rank'] == 'week')
	require_once ('ranklistweek.php');
	
	if($_GET['rank'] == 'total')
	require_once ('ranklist.php');
}else{
		if(isset($_COOKIE['rank'])){
			if($_COOKIE['rank'] == 'week')
			require_once ('ranklistweek.php');
			if($_COOKIE['rank'] == 'total')
			require_once ('ranklist.php');
		}else{
			require_once ('ranklist.php');
			}		
}

		

require_once ('announcement.php');

?>
  <?php
	require_once ('showhottie.php');
	?>
  <hr size="1" />	
  <?php
	require_once ('onlineusers.php')?>
  <hr size="1" />	
  
  <?php
require ('footer.php');
@mysqli_close ( $dbc );
?>
</div>


</body>


</html>