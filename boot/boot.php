<html>

<link rel="stylesheet" type="text/css" href="../lib/ttyFont.css">
<link rel="stylesheet" type="text/css" href="../lib/boot.css">

<img src='logo.png' class='logo'>&nbsp;<img src='logo.png' class='logo'>&nbsp;<img src='logo.png' class='logo'>&nbsp;<img src='logo.png' class='logo'>
<br><br>
[<font color='green'>pass</font>]initializing<br>

</html>

<?php

$var = '';
echo '[<font color=\'green\'>pass</font>]Setting variables<br>';


if (@fopen("https://www.google.com", "r")){
echo '[<font color=\'green\'>pass</font>]Checking internet connection<br>';$noNET = 0;
}else{
echo '[<font color=\'red\'>fail</font>]Checking internet connection<br>';$noNET = 1;
}
session_start();
if ($noNET == 0){$_SESSION['keyitcn'] = 0;}else{$_SESSION['keyitcn'] = 1;}

include 'smoke/libreadsys.php';
foreach ($sysFiles as $file){
if ($file == 'autochk'){
$do = 1;
}else{
$do = 0;
}
}
if ($do == 1){
include 'chksys.php';
}else{
echo '[<font color=\'orange\'>ignore</font>]auto check system files<br>';
}

echo '[<font color=\'red\'>fail</font>]Making a good joke<br>';

echo '[<font color=\'green\'>pass</font>]loading modules<br>';

echo '[<font color=\'green\'>pass</font>]initialize libBridge<br>';

echo '[<font color=\'green\'>pass</font>]initialize libreadsysconf<br>';

echo '[<font color=\'green\'>pass</font>]initialize libcommands<br>';

echo '[<font color=\'green\'>pass</font>]initialize auth bank<br>';

echo '[<font color=\'green\'>pass</font>]initialize libauth<br>';

echo '[<font color=\'gray\'>standby..</font>]Entering virtual TTY<br>';
?>
