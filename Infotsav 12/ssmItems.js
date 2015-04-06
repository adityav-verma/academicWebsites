<!--

/*
Configure menu styles below
NOTE: To edit the link colors, go to the STYLE tags and edit the ssm2Items colors
*/
YOffset=420; // no quotes!!
XOffset=0;
staticYOffset=30; // no quotes!!
slideSpeed=20 // no quotes!!
waitTime=100; // no quotes!! this sets the time the menu stays out for after the mouse goes off it.
menuBGColor="black";
menuIsStatic="yes"; //this sets whether menu should stay static on the screen
menuWidth=200; // Must be a multiple of 10! no quotes!!
menuCols=2;
hdrFontFamily="Alphamalemodern";
hdrFontSize="8";
hdrFontColor="white";
hdrBGColor="black";
hdrAlign="center";
hdrVAlign="center";
hdrHeight="15";
linkFontFamily="Alphamalemodern";
linkFontSize="6.5";
linkFontColor="white";
linkBGColor="white";
linkOverBGColor="gray";
linkTarget="_top";
linkAlign="center";
barBGColor="#171717";
barFontFamily="Algerian";
barFontSize="5";
barFontColor="#f26522";
barVAlign="center";
barWidth=40; // no quotes!!
barText="USER"; // <IMG> tag supported. Put exact html for an image to show.

///////////////////////////

// ssmItems[...]=[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
ssmItems[0]=["LOGIN ", "login.php", ""]
ssmItems[1]=["REGISTER", "register.php", ""]







buildMenu();

//-->