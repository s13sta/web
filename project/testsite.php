<?php
 echo "Test Page";

 echo "<br>";
 #$refer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
 $refer = $_SERVER["HTTP_REFERER"];
 $ip = $_SERVER['REMOTE_ADDR'];
 $current = date("Y-m-d H:i:s");

 echo $refer;
 echo "<br>";
 echo $ip;
 echo "<br>";
 echo $current;
?>
