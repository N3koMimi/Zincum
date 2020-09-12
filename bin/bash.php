<?php
session_start();
$userdir = '../root/';
$auth = $_SESSION['keyauth'];
$user = $_SESSION['keyuser'];
$ITCN = $_SESSION['keyitcn'];
if ($auth !== 1){echo '<link rel="stylesheet" type="text/css" href="../lib/ttyFont.css"><body alink="white" vlink="white" link="white" style="font-size: 30px; font-family: \'CCM\'; background-color:black; color: white;">No users detected , please authenticate <a href="../lib/libauth.php">here</a>';die();}
$dirview = 'ERROR: ';

$compkgs = '../etc/sysPKG';
$pkgs = file_get_contents($compkgs);
include '../lib/libreadsysconf.php';
readSYSpkgs($pkgs);

readPKGS();
include 'libdir.php';
if ($_SESSION['libdir'] !== 1){cd('');$_SESSION['libdir'] = 1;}
?>

<html>

<link rel="stylesheet" type="text/css" href="../lib/ttyFont.css">
<link rel="stylesheet" type="text/css" href="../lib/bash.css">

<?php 
if (isset($_POST['ok'])){
$com = $_POST['rat'];
include '../lib/libBash.php';
}

function hahaPathGoFix($f){
$letsee = explode('/',$f);
foreach ($letsee as $key => $sd){
if ($sd == '..'){
unset($letsee[$key]);
unset($letsee[$key-1]);
}
unset($letsee[0]);
}
foreach ($letsee as $fin){
echo '/'.$fin;
}
}

$userview = '<font color="magenta">'.$user.'@www </font>';
?>

<form method='POST' action='bash.php'>
<?php echo $userview; hahaPathGoFix('/bin/'.$_SESSION['dir']); echo ' : '; ?><input type='text' name='rat' class='minimal'><input type='submit' name='ok' class='shhh'>
</form>

</html>
