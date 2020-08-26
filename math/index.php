<?php
//重定向浏览器
//$url=$_GET["url"];
$url="../math.html";
if($url != "")
{
	header("Location: $url");}
else
{
	echo "跳转失败！url=地址";
}
?>
