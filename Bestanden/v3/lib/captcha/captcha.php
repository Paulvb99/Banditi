<?
$first = rand(1, 26);
$second = rand(1, 26);
$third = rand(1, 26);
$fourth = rand(1, 26);
$captcha = ("$first  $second  $third  $fourth");
$security = $_GET['security'];
$code = $_GET['code'];
$code = ereg_replace("10", "J", $code);
$code = ereg_replace("11", "K", $code);
$code = ereg_replace("12", "L", $code);
$code = ereg_replace("13", "M", $code);
$code = ereg_replace("14", "N", $code);
$code = ereg_replace("15", "O", $code);
$code = ereg_replace("16", "P", $code);
$code = ereg_replace("17", "Q", $code);
$code = ereg_replace("18", "R", $code);
$code = ereg_replace("19", "S", $code);
$code = ereg_replace("20", "T", $code);
$code = ereg_replace("21", "U", $code);
$code = ereg_replace("22", "V", $code);
$code = ereg_replace("23", "W", $code);
$code = ereg_replace("24", "X", $code);
$code = ereg_replace("25", "Y", $code);
$code = ereg_replace("26", "Z", $code);
$code = ereg_replace("0", "", $code);
$code = ereg_replace("1", "A", $code);
$code = ereg_replace("2", "B", $code);
$code = ereg_replace("3", "C", $code);
$code = ereg_replace("4", "D", $code);
$code = ereg_replace("5", "E", $code);
$code = ereg_replace("6", "F", $code);
$code = ereg_replace("7", "G", $code);
$code = ereg_replace("8", "H", $code);
$code = ereg_replace("9", "I", $code);
$image = imagecreatefromjpeg("img/captcha.jpg");
$bgColor = imagecolorallocate ($image, 255, 255, 255);
$textColor = imagecolorallocate ($image, 255, 255, 255);
imagestring ($image, 30, 30, 12,  $code, $textColor);
header('Content-type: images/gif');
imagejpeg($image);
?>
<img src="lib/captcha/captcha.php" border="1">
