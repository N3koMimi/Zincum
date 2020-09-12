<?php

if ($LA == 'bridge'){
$LO = '';
foreach ($LC as $key => $mod){
if ($key > 0){
$LO = $LO . $mod . ' ';
}
}
$com = 'bridge("'.$LO.'")';
}

?>
