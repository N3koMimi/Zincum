<?php

function say($var,$color,$size){
    echo '<font color="'.$color.'" size="'.$size.'">'.$var.'</font>';
}

function cls(){
    echo " ";
}

function cat($catfile){
    echo file_get_contents($catfile);
}

function cp($file,$newfile){
    if (!copy($file, $newfile)) {
        echo "<font color='red'>failed to copy ".$file."</font>";
    }else{
    	echo "<font color='lime'>copied ".$file." successfully !</font>";
    }
}

function ls($heb){
    $ls = '';
    $dircont = scandir($heb."./");
    foreach ($dircont as $entry){
        if (is_dir($entry)){$entry = $entry.'/';}
        $ls = $ls . $entry . "<br>";
    }
    echo $ls;
}

function mv($mvif,$mvof){
    if (copy($mvif, $mvof)) {
        unlink ($mvif);
        echo "<font color='lime'>Operation completed successfully</font>";
    }else{
        echo "<font color='red'>Failed at phase 1 'copy' , maybe check your perms or check if file exists</font>";
    }
}

function rrmdir($dir) {
  $dir = $dir;
  if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file)
    if ($file != "." && $file != "..") rrmdir("$dir/$file");
    rmdir($dir);
  }
  else if (file_exists($dir)) unlink($dir);
  echo '<font color="orange">Operation Completed</font>';
}

function logout(){
	unset($_SESSION['keyuser']);
	unset($_SESSION['keyauth']);
	unset($_SESSION['keyitcn']);
}

function rm($goneForever){
    if (is_dir($goneForever)) {
    	rrmdir($goneForever);
    }else{
    	if(unlink($goneForever)){
    	    echo '<font color="lime">File '.$goneForever.' has been deleted successfully</font>';
    	}else{
    	    echo '<font color="red">remove failed , check permisions ?</font>';
    	}
    }
}

function rcopy($src, $dst) {
  $src = $src;
  $dst = $dst;
  if (file_exists($dst)) rrmdir($dst);
  if (is_dir($src)) {
    mkdir($dst);
    $files = scandir($src);
    foreach ($files as $file)
    if ($file != "." && $file != "..") rcopy("$src/$file", "$dst/$file");
  }
  else if (file_exists($src)) copy($src, $dst);
}

function cd($abc){
    global $userdir;
    if ($abc == ''){
        session_start();
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $userdir;
    }elseif ($abc == '~'){
        session_start();
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $userdir;
    }elseif ($abc == '.'){
        echo 'Hahaha , you funny guy';
    }elseif ($abc == './'){
        echo 'Hahaha , you funny guy';
    }else{
        if (substr($abc, -1) !== "/"){$abc = $abc."/";}
        echo "changed dir to ".$abc;
        trim ($abc, " \n\0");
        session_start();
        $tbt = $_SESSION['dir'];
        $abc = $tbt.$abc;
        unset ($_SESSION['dir']);
        $_SESSION['dir'] = $abc;
    }
}

?>
