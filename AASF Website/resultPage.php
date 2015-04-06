	<div class="left">
   	  <form name="f" method="post" action="">
   	    <fieldset>
          <legend>Result</legend>
          <ul>
            <li>
              <label for="resEvent" class="text" onClick="getResult()">Select an Event</label>
              <select name="resEvent" id="resEvent">
              <?php
			  	include('dbcon.php');
              	$x = "SELECT * FROM `winners` NATURAL JOIN `events`";
				$rr = mysql_query($x) or die(mysql_error());
				while($r = mysql_fetch_array($rr)){
					echo "<option value=".$r['id'].">".$r['name']."</option>";
				}
			  ?>
              </select>
            </li>
            <li>
              <div id="b"><input type="button" name="getResult" id="gRB" value="Get Result!" onClick="gR()" class="x"></div>
            </li>
            <li>
              <label for="getPcRating" class="text">Get Programming Contest Rating</label>
              <input type="button" name="getPcRating" id="getPcRating" value="Get Rating!" class="x">
            </li>
          </ul>
   	    </fieldset>
  	  </form>
    </div>