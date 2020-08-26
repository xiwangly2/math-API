<?php
/**
由xiwangly编写，用于访问该接口快速运算一些值，请保留著作权，还在不断改进中……
教程：https://www.lolichan.vip/threads/qrspeed-6.53/
http://域名/math.php?x=x的值&y=y的值&z=z的值&m=计算方式
*/
$x=$_GET["x"];
$y=$_GET["y"];
$z=$_GET["z"];
$m=$_GET["m"];
$fx=$_GET["fx"];
$p=$_GET["p"];
$d1=$_GET["d1"];
$d2=$_GET["d2"];
$d3=$_GET["d3"];
$d4=$_GET["d4"];
$d5=$_GET["d5"];
$d6=$_GET["d6"];
$d7=$_GET["d7"];
$d8=$_GET["d8"];
$d9=$_GET["d9"];
$d10=$GET["d10"];
$d11=$_GET["d11"];
$d12=$_GET["d12"];
$d13=$_GET["d13"];
$d14=$_GET["d14"];
$d15=$_GET["d15"];
$d16=$_GET["d16"];
$d17=$_GET["d17"];
$d18=$_GET["d18"];
$d19=$_GET["d19"];
function sa($x,$y)
{
	$total=$x + $y;
	return $total;
}
function ss($x,$y)
{
	$total=$x - $y;
	return $total;
}
function sm($x,$y)
{
	$total=$x * $y;
	return $total;
}
function sd($x,$y)
{
	$total=$x / $y;
	return $total;
}
function sr($x,$y)
{
	$total=$x % $y;
	return $total;
}
function s($x,$y)
{
	$total=$x . $y;
	return $total;
}
if($x == ""&$y == ""&$z == ""&$m == "")
{
	$url="https://www.lolichan.vip/threads/qrspeed-6.53/";
	header("Location: $url");
}
else if($m == "a")
{
	echo sa($x,$y);
}
else if($m == "s")
{
	echo ss($x,$y);
}
else if($m == "m")
{
	echo sm($x,$y);
}
else if($m == "d")
{
	echo sd($x,$y);
}
else if($m == "r")
{
	echo sr($x,$y);
}
else if($m == "ss")
{
	$and_sss=$x . $y . $z;
	echo $and_sss;
}
else if($m == "pow")
{
	echo pow($x,$y);
}
else if($m == "abs")
{
	echo abs($x);
}
else if($m == "acos")
{
	echo acos($x);
}
else if($m == "acosh")
{
	echo acosh($x);
}
else if($m == "asin")
{
	echo asin($x);
}
else if($m == "asinh")
{
	echo asinh($x);
}
else if($m == "atan")
{
	echo atan($x);
}
else if($m == "atan2")
{
	echo atan2($x,$y);
}
else if($m == "atanh")
{
	echo atanh($x);
}
else if($m == "base")
{
	echo base_convert($x,$y,$z);
}
else if($m == "bindec")
{
	echo bindec($x);
}
else if($m == "ceil")
{
	echo ceil($x);
}
else if($m == "cos")
{
	$x=floatval($x);
	echo cos($x);
}
else if($m == "cosh")
{
	$x=floatval($x);
	echo cosh($x);
}
else if($m == "decbin")
{
	echo decbin($x);
}
else if($m == "dechex")
{
	echo dechex($x);
}
else if($m == "decoct")
{
	echo decoct($x);
}
else if($m == "deg2rad")
{
	echo deg2rad($x);
}
else if($m == "exp")
{
	echo exp($x);
}
else if($m == "expm1")
{
	echo expm1($x);
}
else if($m == "floor")
{
	echo floor($x);
}
else if($m == "fmod")
{
	echo fmod($x,$y);
}
else if($m == "getrandmax")
{
	echo rand($x,getrandmax());
}
else if($m == "hexdec")
{
	echo hexdec($x);
}
else if($m == "hypot")
{
	echo hypot($x,$y);
}
else if($m == "finite")
{
	echo is_finite($x);
}
else if($m == "infinite")
{
	echo is_infinite($x);
}
else if($m == "nan")
{
	echo is_nan($x);
}
else if($m == "lcg")
{
	echo lcg_value();
}
else if($m == "log"&$y == "")
{
	echo log($x);
}
else if($m == "log")
{
	echo log($x,$y);
}
else if($m == "log10")
{
	echo log10($x);
}
else if($m == "log1p")
{
	echo log1p($x);
}
else if($m == "max"&$z == "")
{
	echo max($x,$y);
}
else if($m == "max")
{
	echo max($x,$y,$z);
}
else if($m == "min"&$z == "")
{
	echo min($x,$y);
}
else if($m == "min")
{
	echo min($x,$y,$z);
}
else if($m == "mtgetrandmax")
{
	echo mt_rand($x,mt_getrandmax());
}
else if($m == "mtrand")
{
	echo mt_rand($x,$y);
}
else if($m == "mtsrand")
{
	echo mt_srand($x);
}
else if($m == "octdec")
{
	echo octdec($x);
}
else if($m == "pi")
{
	echo (pi());
}
else if($m == "rad2deg")
{
	echo rad2deg($x);
}
else if($m == "rand")
{
	echo rand($x,$y);
}
else if($m == "round")
{
	echo round($x);
}
else if($m == "sin")
{
	$x=floatval($x);
	echo sin($x);
}
else if($m == "sinh")
{
	$x=floatval($x);
	echo sinh($x);
}
else if($m == "sqrt")
{
	echo sqrt($x);
}
else if($m == "srand")
{
	echo srand($x);
}
else if($m == "tan")
{
	$x=floatval($x);
	echo tan($x);
}
else if($m == "tanh")
{
	$x=floatval($x);
	echo tanh($x);
}
else if($m == "incremental")
{
	echo cos($x);
}
else if($m == "aa")
{
	echo (++$x);
}
else if($m == "rr")
{
	echo (--$x);
}
else if($m == "echox")
{
	echo ($x);
}
else if($m == "echoy")
{
	echo ($y);
}
else if($m == "echoz")
{
	echo ($z);
}
else if($m == "e")
{
	echo (M_E);
}
else if($m == "euler")
{
	echo (M_EULER);
}
else if($m == "url")
{
	header("Location: $x");
}
else if($m == "time")
{
	echo time();
}
else if($m == "date")
{
	echo date($x);
}
else if($m == "md5"&$y == "true")
{
	echo md5($x,TRUE);
}
else if($m == "md5")
{
	echo md5($x);
}
else if($m == "uniqid"&$y == "true")
{
	echo uniqid($x,TRUE);
}
else if($m == "uniqid")
{
	echo uniqid($x);
}
else if($m == "tf")
{
	$tf=mt_rand(0,1);
	if($tf == "1")
	{
		echo "true";
	}
	else if($tf == "0")
	{
		echo "false";
	}
}
else if($m == "md5file")
{
	echo md5_file($x);
}
else if($m == "base64encode")
{
	echo base64_encode($x);
}
else if($m == "base64decode")
{
	echo base64_decode($x);
}
else if($m == "and")
{
	if($x and $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "or")
{
	if($x or $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "xor")
{
	if($x xor $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "andand")
{
	if($x && $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "oror")
{
	if($x || $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "not")
{
	if($x != $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "equal")
{
	if($x == $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "lessgreater")
{
	if($x <> $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "greater")
{
	if($x > $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "less")
{
	if($x < $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "greaterequal")
{
	if($x >= $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "lessequal")
{
	if($x <= $y)
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "areacircle")
{
	echo M_PI * $x * $x;
}
else if($m == "floatval")
{
	echo floatval($x);
}
else if($m == "doubleval")
{
	echo doubleval($x);
}
else if($m == "intval")
{
	echo intval($x);
}
else if($m == "boolval")
{
	echo (boolval($x) ? "true" : "false");
}
else if($m == "empty")
{
	if(empty($x))
	{
		echo "true";
	}
	else
	{
		echo "false";
	}
}
else if($m == "uuencode")
{
	echo convert_uuencode($x);
}
else if($m == "uudecode")
{
	echo convert_uudecode($x);
}
else if($m == "fx")
{
	$fx1="$x";
	$fx1="$fx1";
	echo ($fx1);
}
else if($m == "cmp")
{
	if($x < $y)
	{
		echo "-1";
	}
	elseif($x == $y)
	{
		echo "0";
	}
	elseif($x > $y)
	{
		echo "1";
	}
}
else if($m == "preg")
{
	$keywords = preg_match("$x","$y");
	echo ($keywords);
}

else
{
	echo "未知的表达";
}
?>