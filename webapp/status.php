<?php

$url=$_SERVER['REQUEST_URI'];
header("Refresh:5; URL=$url");

$output = shell_exec('cat status.txt');
echo "<pre>$output</pre>";

?>
