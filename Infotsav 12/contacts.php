<?php
session_start();
session_destroy();
?>
<html>
<head><script type='text/javascript'>
function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();
}
</script>
<title>ContactUs</title>
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
</head>
<body background="back.jpg">
<a href="home.php"><img src="bottom.jpg" border="0"></a>
<div style="width: 250px; height: 300px;  float: left">
													
													</div>
												
													</br>
												
<div style="width: 300px; height: 300px;  float: left ;font-family: AlphaMaleModern; color:f26522">
<h1>CONTACT US</h1>
<h3>Aditya Verma</h3>
<p>
<span class="phone">Phone: &nbsp;&nbsp;</span>+91 9691571631</br>
                                                   
<span class="phone">E-mail: &nbsp;&nbsp;</span>meetadi3@gmail.com
                                                    </p>
													 </p>
                                                    
													<h3>Prateek Jain</h3>
<p>
<span
class="phone">Phone: &nbsp;&nbsp;	</span>+91 7828212362</br>
                                                        <span
class="phone">E-mail: &nbsp;&nbsp;</span>prateek.rocks1234@gmail.com

                                                    </p>
                                                    
<h3>Shubham Agarwal</h3>
<p>
<span
class="phone">Phone: &nbsp;&nbsp;</span>+91 9098090878</br>
                                                        <span
class="phone">E-mail: &nbsp;&nbsp;</span>shubham.iiitm.11@gmail.com

                                                   
                                                   
													</div>
													<div style="width: 150px; height: 300px;  float: left">
													
													</div>
													
	<div style="width: 400px; height: 300px;  float: left; font-family: AlphaMaleModern; color:f26522">		
	<h1>OUR ADDRESS	</h1>
<iframe width="425" height="200" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=IIITM+gwalior&amp;aq=&amp;sll=26.22403,78.180851&amp;sspn=0.165696,0.338173&amp;ie=UTF8&amp;hq=IIITM+gwalior&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=17884927282381626249&amp;ll=26.248468,78.174592&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=IIITM+gwalior&amp;aq=&amp;sll=26.22403,78.180851&amp;sspn=0.165696,0.338173&amp;ie=UTF8&amp;hq=IIITM+gwalior&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=17884927282381626249&amp;ll=26.248468,78.174592" style="color:#0000FF;text-align:left">View Larger Map</a></small>
<p>ABV-INDIAN INSTITUTE OF INFORMATION TECHNOLOGY AND MANAGEMENT </BR>NH-2 MORENA LINK ROAD, GWALIOR	
</p>
</div></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br>
<div style="width: 250px; height: 100px;  float: left">
													
													</div>
<div style="font-family: AlphaMaleModern; color:f26522">
<h2>QUERIES</h2	>
<form action="MAILTO:shubham.iiitm.11@gmail.com" method="post" enctype="text/plain">
Name:
<input type="text" name="name" value="Your Name" id="txt_lname" onClick="SelectAll('txt_lname')";>
E-mail:
<input type="text" name="mail" value="Email-Id" id="txt_Id" onClick="SelectAll('txt_Id')";><br><br><div style="width: 250px; height: 100px;  float: left">
													
													</div>
Comment:
<input type="text" name="comment" value="Your Query" id="txt_q" onClick="SelectAll('txt_q')"; size="50"><br><br>
<input type="submit" value="Send" class="button">&nbsp;&nbsp;
<input type="reset" value="Reset" class="button">
</form>

</div >

</body>
</html>