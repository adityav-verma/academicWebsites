$(document).ready(function(){
		
		$(".eHead").click(function(){		//bring the popup when p with class eHead is clicked
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});


		$("#viewRating").click(function(){		//bring the popup when p with class eHead is clicked
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});

		$("#getPcRating").click(function(){		//bring the popup when p with class eHead is clicked
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});

		$("#changeP").click(function(){		//bring the popup when p with class eHead is clicked
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});

		$("#viewCal").click(function(){		//bring the popup when p with class eHead is clicked
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});


		/*exit the popup*/
		$("#exit").click(function(){		
			$('#popUp').animate({left:'-100%'});
			$('#popBack').fadeOut(500);
			document.getElementById('popCont').innerHTML="";
		});
		$("#popBack").click(function(){
			$('#popUp').animate({left:'-100%'});
			$('#popBack').fadeOut(500);
			document.getElementById('popCont').innerHTML="";
		});
		/*exit popup ends*/
		
		$("#te").click(function(){			//popup for contact window
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		}); 

		$("#contact").click(function(){			//popup for contact window
			//alert("HI");
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		}); 

		$("#gRB").click(function(){			//popup for contact window
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});
		
		$('#login').click(function(){		//popup window for login form
			$('#popBack').fadeIn(100);
			$('#popUp').fadeIn(300);
			$("#popUp").animate({left:'10%'});	
		});
});
