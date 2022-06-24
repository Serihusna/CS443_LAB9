<?php
session_start ();
echo "<html>";

$sid =session_id();
echo "Session ID returned by session_id():".$sid."\n";
$sid=SID;
cho "Session ID returned by SID :".$sid."\n";
$_SESSION["myLogin"]="myWebsite";
echo " A value saved in the session named as myLogin.<br>";

$_SESSION["myColor"]="Blue";
echo " A value saved in the session named as myColor.<br>";

echo "Click <a href=next_page.php>Next Page</a>"
." to retrieve the value.<br>";

echo "</html><br>";
?>
