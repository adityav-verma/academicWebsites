<!Doctype HTML>
<?php
	session_start();
	$_SESSION['flag'] = 1;
	//$_SESSION['res'] = -1;
	include('dbcon.php');
	
?>
<html>
    <head>
        <title>AASF-ICPC 2014</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "css/bootstrap.css" rel = "stylesheet">
        <link href = "css/myStyles.css" rel = "stylesheet">
        
        <script src = "http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src = "js/bootstrap.js"></script>
        <script src = "js/my.js"></script>
		<script>
			var val = <?php echo $_SESSION['res']; ?>;
			if(val == 1){
				$(document).ready(function(){
					$('#successReg').modal('show');
				});
				
				//alert("haha!!");
			}
			else if(val == 0){
				$(document).ready(function(){
					$('#failReg').modal('show');
				});				
			}
			<?php unset($_SESSION['res']); ?>
			//alert(val);
		</script>

    </head>
    <body>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
    
    
    
    
       <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">AASF-ICPC 2014</a>
                <button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active" id = "home"><a>Home</a></li>
                        <li id="rules"><a>Rules</a></li>
                        <li id = "judge"><a>Judging Criteria</a></li>
						<li id = "ann"><a>Announcement</a></li>
                        <li id = "time"><a>Timeline</a></li>
                        <li id = "aasf"><a>About AASF</a></li>
                        <li id = "contact"><a>Contact Us</a></li>
                    </ul>
                </div>
            </div>
       </div>
       
       <div class = "container">
            <center><img src = "images/logo.jpg" class = "img-responsive img-rounded"></center>
            <br>
            <div class="jumbotron" id = "cont">
			<h2>About AASF-ICPC 2014</h2>
			<p>Begun with the new semester and still no coding on.....?
				Well to bring back the heat on AASF brings to you the AASF-ICPC; the coding marathon for all the coding maniacs.</p>
				<p>This coding extravaganza will be brought to you in the very same flavor as was the ACM-ICPC.
So all the interested candidates form your teams and revise all your tactics  because this will be the most competitive "Programming Contest" that you have ever participated in the institute.
</p>
<p>Head Over to Announcements for latest updates!</p>
            </div>
       </div>
       
     
       
       <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
        		
            <button class="navbar-btn btn btn-default pull-left" data-toggle="Mmodal" data-target="#regForm">Registration Closed!!</button>
          <!-- <p class="text-danger navbar-text"><strong>Registration Ends at 23:59:59, Today!</strong></p>-->
          <p class="navbar-text"><strong>In Code Lies The Secret Of The Universe!</strong></p>
				<button class="navbar-btn btn btn-info" data-toggle="modal" data-target="#allTeams">Total Teams Registered So Far:
            <?php
            	$qT = "SELECT Count(*) FROM `teams` WHERE `verified` = '1'";
					$rT = mysql_query($qT) or die(mysql_error());
					$rTT = mysql_fetch_array($rT);
					echo $rTT[0];           	
            ?>
            </button>              
            
            <a id = "fb" target="_blank" class="navbar-btn btn btn-primary" href="http://www.facebook.com/AASFIIITM" data-content="It's so simple to create a tooltip for my website!">Like us on Facebook</a>
<div class="fb-like" data-href="https://facebook.com/AASFIIITM" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        
        </div>
       </div>
       
       <!-- modal -->>
       <div class="container">
        <div class = "modal fade" id="regForm" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                        <h3 class="modal-title" id="myModalLabel">AASF-ICPC 2014 Team Registration</h3>
                    </div>
                    <div class="modal-body">   <!--modal body-->
                    
                    
                        <!-- Main Registration Form starts from here -->
                        <form role = "form" method="POST" action="register.php" onSubmit="return formValidator()">
                        
                        
                            <div class = "form-group" id="xxx">
                                <lable for = "teamName">Enter Your Team Name</lable>
                                <input type="text" class="form-control" id="teamName" name="teamName" placeholder="Team Name" onChange="checkTeam()"  onKeyPress="checkTeam()" onfocus="checkTeam()">
								<div id="teamSuccess"></div>
                            </div>
                            
                            
                            <!--First Member -->
                            <div class = "form-group">
                                <lable for = "fMem">First Member*</lable>
                                <input type="text" class="form-control" id="fMem" name = "fMem" placeholder="First Member" onchange="checkfName()" onfocus="checkfName()" onkeypress="checkfName()">
								<div id="fSuccess"></div>
                            </div>                            
                            <div class = "form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                     
                                      <select class="form-control" id="fDet" name="fDet">
                                        <option value="ipg">IPG</option>
                                        <option value = "mtech">Mtech</option>
                                        <option value = "mba">MBA</option>
                                      </select>
                                    </div>
                                    <div class="col-md-8">
                                        <input type = "text" class="form-control" placeholder="20XX-XXX, eg: 2011-011" id="fYear" name="fYear" onChange="checkfd()" onfocus="checkfd()">
                                    </div>
                                </div>
								<div id="fdSuccess"></div>
                            </div>                                  
                            
                            
                            <!--Second Member -->
                            <div class = "form-group">
                                <lable for = "sMem">Second Member*</lable>
                                <input type="text" class="form-control" id="sMem" name="sMem" placeholder="Second Member" onchange="checksName()" onfocus="checksName()" onkeypress="checksName()">
								<div id="sSuccess"></div>
                            </div>
                            <div class = "form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                     
                                     <select class="form-control" id="sDet" name="sDet">
                                        <option value="ipg">IPG</option>
                                        <option value = "mtech">Mtech</option>
                                        <option value = "mba">MBA</option>
                                      </select>
                                    </div>
                                    <div class="col-md-8">
                                        <input type = "text" class="form-control" placeholder="20XX-XXX, eg: 2011-011" name="sYear" id="sYear" onChange="checksd()" onfocus="checksd()">
                                    </div>

                                </div>
								<div id="sdSuccess"></div>
                            </div>                                     
                            
                            <!--Last Member -->
                            <div class = "form-group">
                                <lable for = "tMem">Third Member</lable>
                                <input type="text" class="form-control" id="tMem" name="tMem" placeholder="Third Member" onchange="checktd()">
								<div id="tSuccess"></div>
                            </div>                            
                            
                            <div class = "form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                     
                                      <select class="form-control" id="tDet" name="tDet">
                                        <option value="ipg">IPG</option>
                                        <option value = "mtech">Mtech</option>
                                        <option value = "mba">MBA</option>
                                      </select>
                                    </div>
                                    <div class="col-md-8">
                                        <input type = "text" class="form-control" placeholder="20XX-XXX, eg: 2011-011" name="tYear" id="tYear" onChange="checktd()">
                                    </div>

                                </div>
								<div id="tdSuccess"></div>
                            </div>         
                            <!-- Member Ends Here -->
 
                            <div class = "form-group">
                                <lable for = "email">Email</lable>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Valid Email for Confirmation" onChange="checkEmail()" onFocus="checkEmail()">
								<div id="mSuccess"></div>
                            </div>  
                            
                            <div class = "form-group">
                                <div class="row">
                                    <div class = "col-md-4 pull-right"><button type="submit" class="form-control btn btn-success" id="sub">Submit</button></div>
                                    <div class = "col-md-4 pull-right"><button type="reset" class="form-control btn btn-primary"  >Reset</button></div>
                                    
                                </div>
                            </div> 
                        </form>
                        <div style="display:none"><p id="al"></p></div>
                        <!--Form Ends Here-->    
                        
                    </div>
                </div>
            </div>
        </div>
       </div> <!-- End of Modal-->
	   
	   <!--start of Registraion Result Modal  -->
	   <div class = "container">
	 <div class="modal fade" id="successReg" tabindex="-1" role="dialog" aria-labelledby="mySuccessModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-success" id="mySuccessModal">Congratulations</h4>
      </div>
      <div class="modal-body">
		<p>We successfully received your details for AASF-ICPC, You will Receive an Email Shortly Confirming your Registration..</p>
		<p>Happy Coding! :)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- End of Result Modal -->
</div>	

<!-- Result Modal2-->
<div class = "container">
	 <div class="modal fade" id="failReg" tabindex="-1" role="dialog" aria-labelledby="myfailModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-danger" id="myfailModal">Could Not Register :(</h4>
      </div>
      <div class="modal-body">
		<p>Team Name already Exists, use a different Team Name to Register..</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- End of Result Modal -->
</div>



	   <!--start of all teams modal -->
	   <div class = "container">
	 <div class="modal fade" id="allTeams" tabindex="-1" role="dialog" aria-labelledby="myAllTeams" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myAllTeams">All Registered Teams</h4>
      </div>
      <div class="modal-body" style="max-height:400px;overflow:auto;">

		<div id="aT">
			<table class="table table-striped table-hover">
					<tr>
					<td><strong>#</strong></td>
					<td><strong>Team Name</strong></td>
					<td><strong>First Member</strong></td>
					<td><strong>Second Member</strong></td>
					<td><strong>Third Member</strong></td>
					<td><strong>Year</strong></td>					
					</tr>
			<?php
				$q = "SELECT * FROM `teams` WHERE `verified` = '1'";
				$c = 1;
				$r = mysql_query($q) or die(mysql_error());
				while($res = mysql_fetch_array($r)){
					echo "<tr>";
					echo "<td>".$c."</td>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['fname']."</td>";
					echo "<td>".$res['sname']."</td>";
					if($res['tname'] == "")
						$k = "-";
					else
						$k = $res['tname'];
					echo "<td>".$k."</td>";
					$x = $res['frol'];
					$y = substr($x, 3, 4);
					echo "<td>".$y."</td>";
					echo "</tr>";
					$c++;
				}
				echo "</table>";
				if($c == 1)
					echo "<h4 class='text-success'>No Registered Teams!</h4>";
					
			?>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- End of All Teams Modal -->
</div>

   
	   
    </body>
</html>
