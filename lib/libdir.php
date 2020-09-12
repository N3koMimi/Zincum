<?php
    
    global $userdir;
    session_start();
    $wd = $_SESSION['dir'];
    if ($wd == null){cd('');}
    //echo $wd;
    
    chdir ($wd);echo $wd;
?>
