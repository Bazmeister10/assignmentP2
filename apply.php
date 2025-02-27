<!DOCTYPE html>

<?php

	echo '<html lang="en">
	<head>
	    <meta charset="utf-8" />
	    <meta name="description" content="Apply page for SwinNet website" />
	    <meta name="keywords" content="HTML5, tags" />
	    <meta name="author" content="Finbarr Brennan" />
	    <title>Apply Now</title>
	    <link rel="stylesheet" href="styles/style.css">
		<link rel="icon" href="./images/favicon.ico">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	    <!-- below is code for the navigation bar, specifically when screen size is above 1460px -->
	    <div class="navbar">
		<div class="initial">
		    <a class="link" href=enhancements.php><span>Enhancements</span></a>
		    <a class="link" href=about.php><span>About Us</span></a>
		    <a class="link active" href=apply.php><span>Apply Now</span></a>
		    <a class="link" href=jobs.php><span>Job Opportunities</span></a>
		    <a class="link" href=index.php><span>Homepage</span></a>
		    <a href="index.php">
			<img id="logo" src="styles/images/logo.png" alt="SwinNet logo featuring a cloud icon overlayed with connected nodes. It links to the homepage." title="SwinNet logo" />
		    </a>
		</div>

	    <!-- below is code for the navigation bar, specifically when the screen size is below 1460px, 
		it results in the navigation bar compressing to form a burger menu dropdown -->
		<div class="drop">
		    <button class="buttonDrop"></button>
		    <div class="dropContent">
			<a class="link" href=index.php><span>Homepage</span></a>
			<a class="link" href=jobs.php><span>Job Opportunities</span></a>
			<a class="link active" href=apply.php><span>Apply Now</span></a>
			<a class="link" href=about.php><span>About Us</span></a>
			<a class="link" href=enhancements.php><span>Enhancements</span></a>
		    </div>
		</div>
	    </div>
	    <div class="content">
		<!-- this div is for setting a link destination for the top of the page -->
		<div id="topP">
		    <div class="anchor"></div>
		</div>
		<section class="headAll">
		    <h1>APPLY BELOW</h1>
		</section>

		    <!-- below is a form for the apply page, it features many types of inputs, all with applied animations and patterns -->
		<form action="https://mercury.swin.edu.au/it000000/formtest.php" method="POST" autocomplete="on">

		    <label for="refnum"> Reference Number: </label> <br>
		    <input type="text" id="refnum" name="refnum" maxlength="5" pattern="[A-Za-z\d]{5}" title="5 characters, alphanumeric only" required> <br> <br>

		    <label for="fname"> First Name: </label> <br>
		    <input type="text" id="fname" name="fname" pattern="[A-Za-z]{1,}" maxlength="20" title="Letters only" required> <br> <br>

		    <label for="fname"> Last Name: </label> <br>
		    <input type="text" id="lname" name="lname" pattern="[A-Za-z]{1,}" maxlength="20" title="Letters only" required> <br> <br>

		    <label for="dob"> Date of Birth: </label> <br>
		    <input type="date" id="dob" name="dob" required> <br> <br>

		    <fieldset id="gender">
			<legend> Gender </legend>

			<input type="radio" id="man" name="gender" value="Man" required>
			<label for="man"> Man </label> <br>

			<input type="radio" id="woman" name="gender" value="Woman">
			<label for="woman"> Woman </label> <br>

			<input type="radio" id="other" name="gender" value="Other">
			<label for="other"> Other </label> <br>

			<input type="radio" id="idk" name="gender" value="Prefer not to say">
			<label for="idk"> Prefer Not To Say </label> <br>

		    </fieldset> <br>

		    <label for="address"> Street Address: </label> <br>
		    <input type="text" id="address" name="address" maxlength="40" required> <br> <br>

		    <label for="suburb"> Suburb/Town: </label> <br>
		    <input type="text" id="suburb" name="suburb" maxlength="40" required> <br> <br>

		    <label for="state"> State: </label>           <!-- should we chuck a break here? -->
		    <br>
		    <select id="state" name="state" required>
			<option value="">...</option>
			<option value="vic">VIC</option>
			<option value="nsw">NSW</option>
			<option value="qld">QLD</option>
			<option value="nt">NT</option>
			<option value="wa">WA</option>
			<option value="sa">SA</option>
			<option value="tas">TAS</option>
			<option value="act">ACT</option>
		    </select> <br> <br>

			<label for="postcode"> Postcode </label> <br>
			<input type="text" id="postcode" name="postcode" pattern="[\d]{4}" title="4 numeric characters" required> <br> <br>

		    <label for="email"> Email: </label> <br>
		    <input type="email" id="email" name="email" required> <br> <br>

		    <label for="phone"> Phone Number: </label> <br>
		    <input type="tel" id="phone" name="phone" pattern="[\d\s]{8,12}" required> <br> <br>

				<fieldset id="checkboxes">
					<legend> Skill and Qualifications </legend>

					<input type="checkbox" name="skills[]" id="skill1" value="masters">
					<label for="skill1"> Master\'s Degree </label> <br>

					<input type="checkbox" name="skills[]" id="skill2" value="cissp">
					<label for="skill2"> Valid CISSP Certificate </label> <br>

					<input type="checkbox" name="skills[]" id="skill3" value="exp">
					<label for="skill3"> Relevant Experience </label> <br>

					<input type="checkbox" name="skills[]" id="skill4" value="ccie">
					<label for="skill4"> CCIE Certificate </label> <br>

					<input type="checkbox" name="skills[]" id="skill5" value="tsc">
					<label for="skill5"> Valid Top Secret Clearance License </label> <br>

					<input type="checkbox" name="skills[]" id="skill6" value="adminexp">
					<label for="skill6"> Experience with configurating, administration, troubleshooting, and support networking devices </label> <br>

					<input type="checkbox" name="skills[]" id="skill7" value="linuxexp">
					<label for="skill7"> Experience with Linux </label> <br>
				 </fieldset>

				<br>

		    <label for="otherskills"> Other Skills... </label> <br>
		    <textarea name="otherskills" id="otherskills" rows="30" cols="60" placeholder=
		    "- Experienced in Python coding..."></textarea> <br> <br>


		    <div class="buttonContainer">
			<button type="reset" class="applyNow2 applyAlternate2">RESET</button>
			<button type="submit" class="applyNow applyAlternate">APPLY</button>
		    </div>

		</form>

		<div class="topOfPage"><a href="#topP">CLICK HERE TO RETURN TO TOP OF PAGE</a></div>
	    </div>';

	include 'footer.inc';
			    
	echo '</body>
	</html>';

?>
    
    
    
    
