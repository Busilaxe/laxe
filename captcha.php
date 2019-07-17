<?php 
//captcha simple...
/*function motlist()
{
	$liste= array('giovanni', 'emmanuel', 'gourounsi');
return $liste[array_rand($liste)];
}
function captcha()
{
	$mot= motlist();
	$_SESSION['captcha']=$mot;
  return $mot;
}*/
//captcha avec mot aleatoire
/*{
	$list= array_merge(range('a','z'), range('A', 'Z'), range('0', '9'));
	$list_char=count($list)-1;
	$mot='';
	for ($i=0; $i < $n; $i++) 
	{ 
		$mot=$list[mt_rand(0, $list_char)];
	}
	return $mot;
}
?>*/
/*<?php 
	function captcha()
	{
		$captcha=motlist(1);
		$_SESSION['captcha']=$captcha;
		return $captcha;
	}*/
	//captcha using a file with rand words

 function captcha()
{
	$list=file('dico.txt');
	$captcha= trim($list[array_rand($list)]);
	$_SESSION['captcha']=$captcha;
return $captcha;
}
		/*$_SESSION['captcha']=mt_rand(1000, 9999);
	$img= imagecreate(120, 50);
	$fonts= 'droid.ttf';
	$bg= imagecolorallocate($img, 205, 105, 155);
	$textcolor= imagecolorallocate($img, 0, 0, 0);
	imagettftext($img, 20, 5, 0, 40, $textcolor, $fonts, $_SESSION['captcha']);
	header('Content-type:image/jpeg');
	imagejpeg($img);
	imagedestroy($img);*/

 ?>