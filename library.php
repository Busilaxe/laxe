
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>WEBDESIGNER</title>
	<link rel="stylesheet" type="text/css" href="layout3.css">
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
<body >
	<br> <br>
	<h1 class="font2">Extend our library</h1>
	<form enctype="multipart/form-data" method="post" action="library_update.php">
		<input type="file" name="filesent2">
		<input type="submit">
	</form>
	<br><br>
	<h1 class="font2">LOOKING FOR A FILE OR A TUTORIAL?</h1>
	<div >
		<?php 
	
	$base=new PDO('mysql:host=localhost;dbname=ants','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$request=$base->query('SELECT file_name, size FROM courses  ORDER BY file_name ');

	if (isset($_GET['look_for']) AND !empty($_GET['look_for'])) 
	{
		$look_for=htmlspecialchars($_GET['look_for']);
		$request=$base->query('SELECT file_name, size FROM courses WHERE file_name LIKE "%'.$look_for.'%"');
	}
	 ?>
	</div>

	 <form method="get">
	 	<input type="search" name="look_for">
	 	<input type="submit">
	 </form>

	
<?php 
if ($request->rowCount()>0) 
{	
	While($found=$request->fetch())
		{
			$size=$found['size']/1000000;
			
					echo '<table class="font3"><tr ><td>'.$found['file_name']. "</td><td>" .$size.'mb</td><td><a href="courseuploaded/'.$found['file_name'].'">download</a><br></td></tr><table>';
				
			
		} 
		
}

else { echo "No result for '".$_GET['look_for'],"'";}
?>


<br><br>
</body>
<footer>
	 <div class="foot">
	 	
	 		<div class="layout_footer">
                <h2><a href="faq.php">FAQ</a></h2>
	 			<form>Make a comment <br><textarea></textarea><br>
	 		<input type="submit" name="" value="submit">
                    </form></div>
	 		
	 		<div class="layout_footer">
	 			<h2>CONTACT US</h2>
	 			<a href="mailto:antsvision@gmail.com"><img src="icons/gmail_48px.png"></a>
	 			<br>
	 			<a href="" style="border: 2px solid">BLOG</a>
	 		</div>
	 		<div class="layout_footer">
	 			<form><h2>NEWSLETTER</h2> <br>
	 				<input type="email" name="" placeholder="mail adress" size="30px">
	 				<br>
	 					<input type="submit" name="" value="submit">
	 			</form>
	 		</div>
	 </div>
    <div style="margin-left: auto; margin-right: auto ;width: 20%;">
    	<a href="" style="float: left"></a>  BURKINA FASO <br> Koudougou</div>
</footer>
</html>