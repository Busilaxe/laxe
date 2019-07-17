<?php session_start();
require('captcha.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>WEBDESIGNER</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<link rel="stylesheet" type="text/css" href="layout1.css">
	<meta charset="utf-8">
</head>
<header>
    <div id="logo">
        <h2 id="ants"><span style="color: red">>ANTS</span>-VISION</h2>
        <link rel="stylesheet" type="text/css" href="layout.css">
    </div>
    </header>  
    <nav class="font">
        <ul>
            <li><a href="index.php" class="HOME">Home</a></li>
            <li><a href="help_to.php" class="HELP">Help to...</a></li>
            <li><a href="library.php" class="LIBRARY">Library</a></li>
            <li><a href="our_team.php" class="OUR">Our team</a></li>
        </ul>
    </nav>
</header>
<body>
	<form action="project.php" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>Personal data</legend>
		<div class="form">
		<label for="1">First Name</label><br><input type="text" name="first_name" id="1"><br>
	<label for="2">Last Name</label><br><input type="text" name="last_name" id="2"><br>
	<label for="3">Email address</label><br><input type="email" name="email" id="3"><br>
	<label for="4">Phone Number</label><br><input type="tel" name="phone_number" id="4"><br>
	<label for="5">City</label><br><input type="text" name="city" id="5"><br>
	<label for="6">Company</label><br><input type="text" name="company" id="5">
	
	</div>
	</fieldset>
<fieldset>
	<legend>What is your project</legend>

	<div class="form">
		<label>Type of the web-site</label><br><select name="type">
		<option>vitrine website(static)</option>
		<option>dynamic website</option>
		<option>e-commerce</option>
	</select><br>
	<label>Please describe us a bit your project</label><br><textarea name="description"></textarea><br>
	<label>You can also upload a file containing the whole project</label><br>
	<input type="file" name="filesent" value="Upload"><br>
	<figcaption>supported extensions(.doc, docx, pdf)</figcaption>
	
	</div>
</fieldset>

	<fieldset>
		<legend>Last step</legend>
		<div class="form">
		<label> date of beginninig</label> <br><input type="date" name="date1"><br>
	<label>price</label><br> <input type="number" name="price" min="110" step="5" placeholder="your budget in $"><br>
	
	<div class="form"><label for="captcha">enter the captcha <?php echo captcha(); ?>
	</label><br>
	<input type="text" name="try_captcha">
	<br><input type="submit" name="submit"></div>
	</fieldset>
</form>
</body>
<br><br>
<?php include('footer.php') ?>
</html>