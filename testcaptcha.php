<?php session_start(); 
if (isset($_POST['captcha']))
{
	if ($_SESSION['captcha'] == $_POST['captcha'])
{
	echo "captcha valide";
}
else
{
	echo "captcha invalide";
}
}

?>
<form method="post" >
	<img src="captcha.php"><label>enter the captcha
	</label><br><input type="text" name="captcha"><br>
	<div class="form"> <input type="submit" name="submit"></div>
</form>