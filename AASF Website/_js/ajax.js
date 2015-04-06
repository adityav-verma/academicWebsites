// JavaScript Document

function pop(key){		//for showing the data about the events!
	var xmlhttp, url;
	$('#popCont').load('showData.php?key='+key);/*
	//alert("Hi");
	if(window.XMLHttpRequest){		//checks xml or activex request
		xmlhttp = new XMLHttpRequest();	
	}	
	else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");	
	}					//for data about events
		url = "showData.php?key="+key;
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('popCont').innerHTML =xmlhttp.responseText;	
		}	
	};
	
	xmlhttp.open('GET', url, true);
	xmlhttp.send();*/
}

function gR(){		//for showing the result
	var xmlhttp, url;
	var key = document.getElementById('resEvent').value;
	//alert(key);
	$('#popCont').load('showResult.php?key='+key);
}

function viewRating(page){
	$('#popCont').load('showRating.php?key='+page);
}

$(document).ready(function() {
	
	$('#changeP').click(function(){
		$('#popCont').load('changePass.php');	
	});
	
	$('#te').click(function(){		/*for showing team aasf popup*/
		$('#popCont').load('teamAasf.php');	
	});
	
	$('#contact').click(function(){		/*for showing the contact form */
		$('#popCont').load('contactForm.php');	
	});
	
    $('#re').click(function(){		/*for showing the result portal*/
		$("#ind").fadeOut(100);
		$("#res").fadeIn(500);
		
	});

	$('#viewCal').click(function(){
		$('#popCont').load('viewCalender.php');	
	});								/*for showing the index page*/
	$('#in').click(function(){
		$("#res").fadeOut(100);
		$("#ind").fadeIn(500);	
	});
	
	$('#ad').click(function(){
		alert("hkghbk");
		document.location.assign('index.php');
		$("#ind").fadeOut(100);
		$("#res").fadeIn(500);
	});
	
	$('#login').click(function(){		/*for showing the login form in popUp*/
		$('#popCont').load('loginForm.php');	
	});
	
});
