<?php
    $key = $_GET['key'];
    if($key == "rules"){
        echo "                <h2>Rules and Regulations:</h2>
							<h3>The Qualifier Phase:</h3>
                <ul>
                    <li>Team size should not exceed three candidates</li>
                    <li>All the teams should be registered properly prior to the contest.</li>
                    <li>The Qualifier phase will select best two teams from first academic year. Other seats are on ranking basis.</li>
                    <li>It isn't an inter batch contest hence your team members can belong to different year; this may fetch you some benefit at the Qualifier's result.</li>
					<li>You are advised to arrive at the venue before time, we do not guarantee  which operating system you may be provided with.</li>
                </ul>
				<h3>The Final Battle:</h3>
				<ul>
					<li>All the short listed teams are eligible for the contest; no restructuring is permittable.</li>
				</ul>
				";
    }
    else if($key == "home"){
        echo "<h2>About AASF-ICPC 2014</h2>
                <p>Begun with the new semester and still no coding on.....?
Well to bring back the heat on AASF brings to you the AASF-ICPC; the coding marathon for all the coding maniacs.</p><p>
This coding extravaganza will be brought to you in the very same flavor as was the ACM-ICPC.
So all the interested candidates form your teams and revise all your tactics  because this will be the most competitive 'Programming Contest' that you have ever participated in the institute.</p><p>
	Head Over to Announcements for latest updates!
</p>";        
    }
    
    else if($key == "judge"){
        echo "<h2>Judging Criteria:</h2><ul>
                <li>All the problems have same points alloted to them.</li>
                <li>Number of seats for the Final round may vary, depending on the performance.</li>
                <li>To get a seat for the Final round contest, a team has to submit at least one correct program (Applicable for all teams including 1st year).</li>
                <li>Teams are ranked according to the most problems solved. Ties will be broken by the total time for each team in ascending order of time.</li>
                <li>The decision of the organizers in declaring the results will be final. No queries in this regard will be entertained.</li>
                </ul>";    
    }
    
    else if($key == "time"){
        echo "<h2>Timeline: </h2>
                <p>1<sup>st</sup> Round: <strong>15<sup>th</sup> February, 2014</strong></p><p>Final Round: <strong>22<sup>nd</sup> February, 2014</strong></p>";
    }
    
    else if($key == "aasf"){
        echo "<h2>About AASF: </h2>
                <p>AASF aims to inculcate in the students the spirit of excellence in every field. innovation of ideas is an integral part of the forum. With peer to peer learning methodology, the forum has been laboriously
				engaged in organising activities like hIQs as they act as a catalyst to evolve and nurture knowledge and know how. Forum activities can be divided mainly into three sections i.e. Technical, Managerial & Literary
				</p>
					<ul>
						<li>Our Website: <a target='_blank' href='http://www.aasf.iiitm.in'>http://www.aasf.iiitm.in</a></li>
						<li>Our Facebook Page: <a target='_blank' href='http://www.facebook.com/AASFIIITM'>http://www.facebook.com/AASFIIITM</a></li>
						<li>Our Facebook Profile: <a target='_blank' href='http://www.facebook.com/abhigyan.abhikaushalam'>http://www.facebook.com/abhigyan.abhikaushalam</a></li>
					</ul>";    
    }
    
    else if($key == "contact"){
        echo "<h2>Contact Us: </h2>
                <p>Aditya Verma<br>09479807390<br>(meetadi3@gmail.com)</p><br>
                <p>Raj Kumar Verma<br>08989931117<br>(raj672kap@gmail.com)</p><br>";
    }
	
    else if($key == "ann"){
        echo "<h2>Announcements: </h2>
					<ul>
						<li>Registrations is only open for First Year Students till <strong>23rd January, 2014.</strong></li>
						<li>Timeline is up!</li>
						<li>Keep a look on this sections for latest updates!</li>
					</ul>";  
    }
?>
