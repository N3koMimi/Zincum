<?php session_start(); ?>
<html>
<link rel="stylesheet" type="text/css" href="../lib/ttyFont.css">
<link rel="stylesheet" type="text/css" href="../lib/bash.css">

<style>
#pd{
display: none;
}
</style>
<script>
function pwd(){
var div = document.getElementById('pd');
div.style.display = 'block';
}
</script>

www login:
<br><br>

<form method="POST" action='libauth.php'>
<div id='un'>Username<input type='text'     name='token' value='<?php echo $_POST['token']; ?>' class='minimal'><input type='submit' id ='ot' name='more' class='shhh'               ></div>
<div id='pd'>Password<input type='password' name='key'                                          class='minimal'><input type='submit'          name='auth' class='login' value='login'></div>
</html>

<?php
if (isset ($_POST['more'])){echo "<script>var div = document.getElementById('pd');div.style.display = 'block';document.getElementById('ot').disabled = true; </script>";}
$pfile = '../etc/passwd';
$raw = file_get_contents($pfile);
$seg1 = explode("\n",$raw);
$seg1inf = count($seg1, COUNT_RECURSIVE);
$seg1inf = $seg1inf - 1;
$seg2 = array();
foreach ($seg1 as $key => $a){
if ($key !== $seg1inf){
$seg3 = explode(' ',$a);
foreach ($seg3 as $b){
array_push($seg2,$b);
}
}
}
$c4 = count($seg2, COUNT_RECURSIVE);
$c4 = $c4 - 1;
for ($n = 0; $n < $c4; $n++){
$code = '$'.$seg2[$n].' = "'.$seg2[$n+1].'";';
eval (' '.$code);
$n = $n + 1;
}
if (isset($_POST['auth'])){
$token = $_POST['token'];
$key = $_POST['key'];
$code = '
global $'.$token.';
if ($'.$token.' == "'.md5($key).'"){
$_SESSION["keyauth"] = 1;
$_SESSION["keyuser"] = '.$token.';
}else{echo "Wrong UN/PWD<script>var div = document.getElementById(\'un\');div.style.display = \'none\';</script>";}
';
eval(' '.$code);
}
?>
