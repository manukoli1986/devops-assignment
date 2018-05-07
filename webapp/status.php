<?php

$url=$_SERVER['REQUEST_URI'];
header("Refresh:7; URL=$url");

$output = shell_exec('cat status.txt');
echo "<pre>$output</pre>";

?>
