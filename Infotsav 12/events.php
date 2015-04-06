<?php
session_start();
session_destroy();
?>
<html>
    <head>
        <title>Events</title>
		<link rel="shortcut icon" type="image/x-icon" href="a.ico">
<style type="text/css">body, a:hover {cursor: url(cur1002.cur), progress !important;}</style>

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/alljava.js"></script>
		<style>
		.black_overlay{
			display: none;
			position: absolute;
			top: 0%;
			left: 0%;
			width: 100%;
			height: 100%;
			background-color: black;
			z-index:1001;
			-moz-opacity: 0.8;
			opacity:.8;
			filter: alpha(opacity=80);
		}
		.white_content {
			display: none;
			position: absolute;
			top: 10%;
			left: 15%;
			width: 70%;
			height: 70%;
			padding: 16px;
			border: 16px solid  #931719;
	
			background-color:black;
			z-index:9000;
			overflow: auto;
		}
		a {
outline: none;
}
a:active { outline: none; }
a:focus { -moz-outline-style: none; }
	</style>
		<style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background:#fff url(event_back.jpg) no-repeat;
            }
            #content{
                margin:0 auto;
            }


        </style>
    </head>

    <body background="event_back.jpg">
	<a href="home.php"><img src="bottom.jpg" border="0"></a>
        <div id="content">
            <a class="back" href="#"></a>
            <div class="title"></div>

            <div class="navigation" id="nav">
                <div class="item technical">
                    <img src="images/gear.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Technical</h2>
                    <ul>
                        <li><a onClick = "view('akraman');" href="#">Aakraman</a></li>
                        <li><a onClick = "view('rev_e');" href="#">Reverse Engineering</a></li>
                        <li><a onClick = "view('la_i');" href="#">La-Ingenious</a></li>
						<li><a onClick = "view('code_weavers');" href="#">Code Weavers</a></li>
						<li><a onClick = "view('web_m');" href="#">Web Mania</a></li>
						<li><a onClick = "view('witch_h');" href="#">Witch Hunt</a></li>
                    </ul>
                </div>
                <div class="item mag">
                    <img src="images/gear.png" alt="" width="250" height="250" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Managerial</h2>
                    <ul>
                        <li><a onClick = "view('analyst');" href="#">Analyst</a></li>
                        <li><a onClick = "view('brouhaha');" href="#">Brouhaha</a></li>
                        <li><a onClick = "view('pinnacle');" href="#">Pinnacle</a></li>
						<li><a onClick = "view('tycoon');" href="#">Tycoon</a></li>
                    </ul>
                </div>

                <div class="item game">
                    <img src="images/gear.png" alt="" width="250" height="250" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Gamiacs</h2>
                    <ul>
                        <li><a onClick = "view('cstrike');" href="#">CS 1.6</a></li>
                        <li><a onClick = "view('nfs');" href="#">NFS</a></li>
                        <li><a onClick = "view('fifa');" href="#">FIFA</a></li>
                    </ul>
                </div>
				<div class="item on">
                    <img src="images/gear.png" alt="" width="250" height="250" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Online Events</h2>
                    <ul>
                        <li><a onClick = "view('forex');" href="#">Forex</a></li>
                        <li><a onClick = "view('stock_s');" href="#">Stock Sutra</a></li>
                        <li><a onClick = "view('trove_t');" href="#">Trove Trace</a></li>
						<li><a onClick = "view('job_b');" href="#">Job Bureau</a></li>
                    </ul>
                </div>
                <div class="item fav">
                    <img src="images/gear.png" alt="" width="250" height="250" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Robo Fiesta</h2>
                    <ul>
                        <li><a onClick = "view('line_s');" href="#">Line Sequentes</a></li>
                        <li><a onClick = "view('open_c');" href="#">Open Challenge</a></li>
                        <li><a onClick = "view('robo_r');" href="#">Robo Race</a></li>
						<li><a onClick = "view('robo_s');" href="#">Robo Soccer</a></li>
						<li><a onClick = "view('robo_w');" href="#">RoboWars mini</a></li>
                    </ul>
                </div>
            </div>
        </div>
		
		<div id="result" class="white_content"></div>
		<div id="fade" class="black_overlay"></div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="bubble.js"></script>
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
			$("a").click(function(){

				$('#result').fadeIn(3000, function() {
					// Animation complete
				  });
			  })
			  ;


            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'380px',
                        'height'    :'380px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'100px',
                        'height'    :'100px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
		
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="register.php"><font color="#000000" size="+2" face="alphamalemodern" ><marquee  behavior="alternate" bgcolor="#931719"  scrollamount="5">To Register for Any Event, Register for INFOTSAV!!</marquee></font></a>
    </body>

</html>