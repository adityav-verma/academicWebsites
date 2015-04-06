var xmlHttp;

function view(key)
{
//alert("hi");

//document.getElementById('result').style.display='block';
document.getElementById('fade').style.display='block';

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax/view.php?key="+key;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("result").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}

function show(key,table)
{

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  } 

var url="ajax/show.php?key="+key+"&table="+table;

xmlHttp.onreadystatechange=function()
  {
     
	 if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
     { 
		
		var theresponse = xmlHttp.responseText ;

	 document.getElementById("left").innerHTML=theresponse;
	 }
  }     
xmlHttp.open("GET",url,true);
xmlHttp.send(null);

}


function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
