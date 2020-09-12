<?php 
$conf = '../sysFiles';
$raw = file_get_contents($conf);
$sysFiles = explode("\n",$raw);
$fin = '';
foreach ($sysFiles as $a){
if (substr($a, 0, 1) !== '#') { $fin = $fin . $a . ' '; }
}
$sysFiles = explode(" ",$fin);
?>
