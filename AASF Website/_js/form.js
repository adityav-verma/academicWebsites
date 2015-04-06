
/*To the change the addEvent form according to the type of value*/
function changeEventType(val){
	//alert('HI!');
	if(val == 'ct' || val == 'le' || val == 'me'){
		var b = "<label for='org' class='text'>Organisers of the Event (comma seperated values)</label><textarea name='org' id='org' tabindex='60'></textarea>";
				
		var a = "<label for='judge' class='text'>Judges of the Event (comma seperated values)</label><textarea name='judge' id='judge' tabindex='60'></textarea>";
		
		document.getElementById('tBox2').innerHTML = a;
		document.getElementById('tBox1').innerHTML = b;
	}
	else if(val == 'pc'){
		
		var a = "<label for='pSetter' class='text'>Problem Setter (comma seperated values)</label><textarea name='pSetter' id='pSetter' tabindex='60'></textarea>";
		var b = "<label for='pTester' class='text'>Problem Tester (comma seperated values)</label><textarea name='pTester' id='pTester' tabindex='60'></textarea>";
		
		document.getElementById('tBox1').innerHTML = a;
		document.getElementById('tBox2').innerHTML = b;
	}
	else{
		var a = "<label for='org' class='text'>Organisers of the Event (comma seperated values)</label><textarea name='org' id='org' tabindex='60'></textarea>";
		
		document.getElementById('tBox1').innerHTML = a;
		document.getElementById('tBox2').innerHTML = "";
	}
}
/*addEvent form js functions ends here*/

/*formValidation for addEvent form*/
function addEventValidator(){
	var name = document.getElementById('name');
	var type = document.getElementById('type');
	var sDate = document.getElementById('datepicker');
	var sTime = document.getElementById('sTime');
	var eDate = document.getElementById('datepicker2');
	var eTime = document.getElementById('eTime');
	var venue = document.getElementById('venue');
	if(isNotEmpty(name, "Name")){
		if(isNotEmpty(sDate, "Date")){
			if(isNotEmpty(sTime, "Time")){
				if(isNotEmpty(eDate, "Date")){
					if(isNotEmpty(eTime, "Time")){
						if(isNotEmpty(venue, "Venue")){
							if(type.value == 'hiq' || type.value == 'ws'){
								var org = document.getElementById('org');
								var data = document.getElementById('data');
								if(isNotEmpty(org, "Organisers")){
									if(isNotEmpty(data, "Data"))
										return true;	
								}
								
							}
							else if(type.value == 'ct' || type.value == 'le' || type.value == 'me'){
								var org = document.getElementById('org');
								var data = document.getElementById('data');
								var judges = document.getElementById('judge');
								if(isNotEmpty(org, "Organisers")){
									if(isNotEmpty(judges, "Judges")){
										if(isNotEmpty(data, "Data"))
											return true; 	
									}
								}
							}
							else{
									var pSetter = document.getElementById('pSetter');
									var pTester = document.getElementById('pTester');
									var data = document.getElementById('data');
								if(isNotEmpty(pSetter, "Problem Setter")){
								    if(isNotEmpty(pTester, "Problem Tester")){
										if(isNotEmpty(data, "Data"))
											return true; 	
									}
								}
							}			
						}	
					}	
				}	
			}	
		}
	}
	return false;
}
/*Form Validation for add Event form ends here*/


function isNotEmpty(elem, msg){
	if(elem.value.length == 0){
		alert("Enter "+msg);
		elem.focus();
		return false;
	}
	return true;
}


function isValidEmail(elem, msg){
	var x = elem.value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  		alert("Not a valid e-mail address");
  		return false;
	}
	return true;
}

/*Validation for Contact form*/
function contactValidation(){
	var name = document.getElementById('cName');
	var email = document.getElementById('cEmail');
	var q = document.getElementById('cQuery');
		
	if(isNotEmpty(name, "Name")){
		if(isValidEmail(email, "a Valid Email")){
			if(isNotEmpty(q, "Query, Feedback or Suggestion")){
				return true;	
			}	
		}	
	}
	return false;
}

/*Validation for addResult form*/
function resultValidation(){
	var first = document.getElementById('first');
	var second = document.getElementById('second');
	var firstyear = document.getElementById('firstyear');
	if(isNotEmpty(first, "First Position Holder")){
		if(isNotEmpty(second, "Second Position Holder")){
			if(isNotEmpty(firstyear, "First from First Year"))
				return true;	
		}	
	}
	return false;	
}


function loginValidator(){
	var uName = document.getElementById('user');
	var pass = document.getElementById('pass');
	if(isNotEmpty(uName, "your Username")){
		if(isNotEmpty(pass, "your Password"))
			return true;	
	}
	return false;
}

function editValidation(){
	var name = document.getElementById('progEvent');	
	var date = document.getElementById('pcDate');
	var set = document.getElementById('progSetter');
	var tet = document.getElementById('progTester');
	var one = document.getElementById('one');
	var two = document.getElementById('two');
	var three = document.getElementById('three');
	var four = document.getElementById('four');
	var five = document.getElementById('five');
	
	if(isNotEmpty(name, "Name of PC")){
		if(isNotEmpty(date, "Date")){
			if(isNotEmpty(set, "Setter")){
				if(isNotEmpty(tet, "Tester")){
					return true;	
				}	
			}	
		}
	}
	return false;
}

