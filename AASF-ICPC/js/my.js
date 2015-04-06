$(document).ready(function(){
	
    //showing content JS
    $("#rules").click(function(){
        $("#cont").load("showContent.php?key=rules");
    });
	
    $("#ann").click(function(){
        $("#cont").load("showContent.php?key=ann");
    });
    
        $("#judge").click(function(){
        $("#cont").load("showContent.php?key=judge");
    });
    
        $("#time").click(function(){
        $("#cont").load("showContent.php?key=time");
    });
    
    
        $("#aasf").click(function(){
        $("#cont").load("showContent.php?key=aasf");
    });
    
    
        $("#contact").click(function(){
        $("#cont").load("showContent.php?key=contact");
    });
    
        $("#home").click(function(){
        $("#cont").load("showContent.php?key=home");
    });
    
    $('ul li').click( function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
});
//taking variables
var ccN=0,fN=0,fdN=0,sN=0,sdN=0,tN=0,tdN=0,eN=0;

function formValidator(){
//return false;
    var teamName = document.getElementById("teamName");
	//alert(fN+" " + fdN + " " +eN + " " + sN + " " + sdN);
	var xxx = teamName.value.indexOf(" ");
    if(xxx == -1){ 
		if(ccN == 1 && fN == 1 && fdN == 1 && sN == 1 && sdN == 1 && eN == 1){
			if((tN == 0 && tdN == 0) || (tN == 1 && tdN == 1)){
				//alert(document.getElementById("fYear").value);
				return true;
			}
		}
		else 
			return false;
	}
    
    return false;
}


function checkTeam(){
	//alert("bhakkk!!");
    var name = document.getElementById("teamName");
	
    if(name.value.length == 0){
		document.getElementById("teamSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Team Name cannot be Empty!!</span></div>";
		ccN = -1;
    }
	
    else if(name.value.length > 0){
		//alert("hello");
		ccN = 1;
		namex = name.value+"";
		namex = namex.toLowerCase();
		var x = namex.indexOf("	");
		if(x != -1){
			document.getElementById("teamSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   No spaces allowed, Use _ or - to separate words!</span></div>";
		}
		else{
			var y = "checks.php?id=team&val="+namex;
			$("#teamSuccess").load(y);
		}
	}
}


function checkfName(){
    var name = document.getElementById("fMem");
    if(name.value.length == 0){
		document.getElementById("fSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   At least Two Members are compulsory!</span></div>";	
		fN = 0;
    }
    else{
		document.getElementById("fSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
		fN = 1;
    }
}
function checksName(){
    var name = document.getElementById("sMem");
    if(name.value.length == 0){
		document.getElementById("sSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   At least Two Members are compulsory!</span></div>";	
		sN = 0;
    }
    else{
		document.getElementById("sSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
		sN = 1;
    }
}

function checktName(){
    var name = document.getElementById("tMem");
    if(name.value.length > 0){
		document.getElementById("tSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
		tN = 1;
		
    }
    else if(name.value.length == 0){
		document.getElementById("tSuccess").innerHTML = "";	
		tN = 0;
    }
}

function checkfd(){
	var course = document.getElementById("fDet").value;
	var xx = document.getElementById("fYear").value;
	var fYear = xx.substr(0, 4);
	var fRol = xx.substr(5);
	//alert(course + " " + fYear + " " + fRol);
	
	if(fYear.length == 4 && fRol.length == 3 && fYear >= 2009 && fYear <=2013 && fRol >=1 && fRol <=130){
		document.getElementById("fdSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";
			fdN = 1;
	}
	else{
		document.getElementById("fdSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter a Valid Roll Number</span></div>";		
		fdN = 0;
	}
}

function checksd(){
	var course = document.getElementById("sDet").value;
	var xx = document.getElementById("sYear").value;
	var fYear = xx.substr(0, 4);
	var fRol = xx.substr(5);
	//alert(course + " " + fYear + " " + fRol);
	
	if(fYear.length == 4 && fRol.length == 3 && fYear >= 2009 && fYear <=2013 && fRol >=1 && fRol <=130){
		document.getElementById("sdSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
		sdN = 1;
	}
	else{
		document.getElementById("sdSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter a Valid Roll Number</span></div>";		
		sdN = 0;
	}
}

function checktd(){
	var name = document.getElementById("tMem").value;
	var xx = document.getElementById("tYear").value;
	var tYear = xx.substr(0, 4);
	var tRol = xx.substr(5);
	
	if(name.length > 0 && xx.length > 0){
		//alert("hello");
		if(tYear.length == 4 && tRol.length == 3 && tYear >= 2009 && tYear <=2013 && tRol >=1 && tRol <=130){
			document.getElementById("tdSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
			tdN = 1;
			tN = 1;
		}
		else{
			tN = 1; tdN = 0;
			document.getElementById("tdSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter Both Valid Fields for Third Member</span></div>";
		}
	}
	else if (name.length == 0 && xx.length == 0){
		tN = 0; tdN = 0;
		document.getElementById("tdSuccess").innerHTML ="";
	}
	else{
		tN = 1; tdN = 0;
		document.getElementById("tdSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter Both Valid Fields for Third Member</span></div>";
	}
}
function checkEmail(){
    var name = document.getElementById("email");
    if(name.value.length == 0){
		document.getElementById("mSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter a Valid Email-Id</span></div>";	
		eN = 0;
    }
    else{
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(name.value.match(emailExp)){
		document.getElementById("mSuccess").innerHTML = "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'>   Okay!</span></div>";	
			eN = 1;
		}
		else{
			document.getElementById("mSuccess").innerHTML = "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove'>   Enter a Valid Email-Id</span></div>";
			eN = 0;
		}
    }
}
