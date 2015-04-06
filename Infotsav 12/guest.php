<?php
session_start();
session_destroy();
?>
<html>
<head><title>GUEST LECTURES</title>
<link rel="shortcut icon" type="image/x-icon" href="a.ico">
<style type="text/css">body, a:hover {cursor: url(cur1002.cur), progress !important;}</style>
<style>
.button
{
background-color:#050505;
border-bottom:solid;
border-left: solid;
border-right:solid;
border-top: solid;
color:#f26522;
width:150px;
height:30px;

font-family: AlphaMaleModern
}

#text_box{
float:left;
background:"green";
font-size:12px;
padding:4px 2px;
border:solid 1px "black";

width:200px;
margin:4px 4 20px 10px;
}

</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	<style type="text/css">
		* { margin: 0; outline: none; }
		body { background-color: #444444; }
		.c { clear: both; }
		#wrapper { margin: 0 auto; padding: 0 40px 60px 40px; width: 960px; }
		h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }
	</style>

	<!-- sliderman.js -->
	<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
</head>
<body background="back.jpg">
<a href="home.php"><img src="bottom.jpg" border="0"></a>
<div style="width: 270px; height: 400px;  float: left">
													
													</div>
													<br>
												
													
<div style="width: 800px; height: 250px ;float:left;font-family: AlphaMaleModern; color:f26522">
<center><h1>GUEST LECTURES</h1></center>
<div id="wrapper">

		<div id="examples_outer">
			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">Featured Guest: <strong>Ed Nair: Senior Editor- Dataquest and Global Services </strong></div>
					<img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description">Featured Guest: <strong>AS Rao: Advisor to DSIR, Govt. Of India.</strong></div>
					
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>

		<div class="c"></div>
	</div>
</div>
</body>
</html>