<?php

function readSYSpkgs($raw){
$pkeygee = explode("\n",$raw);
$c4 = count($pkeygee, COUNT_RECURSIVE);
$c4 = $c4 - 1;unset($pkeygee[$c4]);
foreach ($pkeygee as $comfile){
include '../bin/'.$comfile;
}
}

function readPKGS(){
$pkdir = '../var/pkg/PKGS/';
$nc = scandir($pkdir);
$filter = array('.','..');
$clean = array_diff($nc,$filter);
foreach ($clean as $comfile){
include '../bin/'.$comfile.'.php';
}
}

function readpasswd(){
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
}

?>
