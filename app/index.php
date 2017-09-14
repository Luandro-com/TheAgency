	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
<script type="text/javascript" src="agency.js"></script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<link rel="icon" type="image/png" href="ref/favicon.png">


 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="agency.css" />

<title>Visual Effects For Film At Your Fingertips.</title>
</head>

<body>
<div class="wrapper">
<div id="menu">
<ul>
	<li><a href="index.php?p=home">Home</a></li>
	<li><a href="index.php?p=commercials">Commercials</a></li>
	<li><a href="index.php?p=films">Short Films</a></li>  
	<li><a href="index.php?p=tutorials">Tutorials</a></li>
	<li><a href="index.php?p=about">About</a></li>
   	<li><a href="index.php?p=contact">Contact us</a></li>
    

	
</ul>
</div>
<h1><a href="index.php?p=home"><img src="ref/logo.jpg"/></a></h1>


<div id="main">
<?php
$pages_dir='pages';
if (!empty($_GET['p'])){
	$pages= scandir($pages_dir, 0);
	unset ($pages[0], $pages[1]);
	
	$p=$_GET['p'];
	if (in_array ($p.'.inc.php', $pages)) {
		include ($pages_dir.'/'.$p .'.inc.php'); 
		}
		else {
			echo 'Invalid Page<BR>'; } 
			}
			else {
				include($pages_dir.'/home.inc.php'); 
				}
?>
</div>
<div class="push"></div>
</div>
<hr />
<footer>
© 2013 The Agency VFX.

</footer>
</body>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider( {
		controlNav: false, // 1,2,3... navigation
		directionNav: false, // Next & Prev navigation
    	pauseTime: 5000, // How long each slide will show
        pauseOnHover: true, // Stop animation while hovering
	
	}
	);
	$('#slider2').nivoSlider( {
		controlNav: false, // 1,2,3... navigation
		directionNav: false, // Next & Prev navigation
    	pauseTime: 6000, // How long each slide will show
        pauseOnHover: true, // Stop animation while hovering
	
	}
	);
	$('#slider3').nivoSlider( {
		controlNav: false, // 1,2,3... navigation
		directionNav: false, // Next & Prev navigation
    	pauseTime: 4000, // How long each slide will show
        pauseOnHover: true, // Stop animation while hovering
	
	}
	);
	$('#slider4').nivoSlider( {
		controlNav: false, // 1,2,3... navigation
		directionNav: false, // Next & Prev navigation
    	pauseTime: 5000, // How long each slide will show
        pauseOnHover: true, // Stop animation while hovering
	
	}
	);
	$('#slider5').nivoSlider( {
		controlNav: false, // 1,2,3... navigation
		directionNav: false, // Next & Prev navigation
    	pauseTime: 5000, // How long each slide will show
        pauseOnHover: true, // Stop animation while hovering
	
	}
	);
});
</script>
</html>