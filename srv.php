<?php
header("Access-Control-Allow-Origin:*");
$link=$_GET["link"];
//link
$result=file_get_contents($link."?__a=".urlencode("1"));
//get json
echo $result;
?>
