<div class="contactForm">
<form action="contactData.php" method="post" name="contact" id="contact" onSubmit="return contactValidation()">
<fieldset>
  <legend>Contact Us</legend>
  <ul>
	  <li>
		<label for="cName" class="text">Enter your Name</label>
		<input type="text" name="cName" id="cName">
	  </li>
	  <li>
		<label for="cEmail" class="text">Enter your Email</label>
		<input type="text" name="cEmail" id="cEmail">
	  </li>
	  <li>
		<label for="cQuery" class="text">Enter your Query, Suggestion or FeedBack</label>
		<textarea name="cQuery" id="cQuery" cols="45" rows="5"></textarea>
	  </li>
	  <li>
		<input type="submit" name="submit" id="submit" value="Submit!">
	  </li>
  </ul>
</fieldset>
<p>&nbsp;</p>
</form>
</div>