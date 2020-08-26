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
//define("e",M_E);
//constant("e");
/**
if($x == "π")
{
	$x="M_PI";
}
else if($y == "π")
{
	$y="M_PI";
}
else if($z == "π")
{
	$z="M_PI";
}
*/
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
/**
	if($z == "")
	{
		echo s($x,$y);
	}
	else
	{*/
		$and_sss=$x . $y . $z;
		echo $and_sss;
//	}
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

else
{
	echo "未知的表达";
}
?>