<?php 
$conf = 'list';
$raw = file_get_contents($conf);
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
for ($n = 0; $n <= $c4; $n++){
$opt = $opt . '<a class="select" href="' . $seg2[$n+1] . '">' . $seg2[$n] . '</a><br>';
$n = $n + 1;
}
?>
