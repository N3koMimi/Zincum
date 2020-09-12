<?php

//if single module
//if ($com == ""){$com = $com."()";}
if ($com == "ls"){$com = $com."('')";}
//if ($com == "help"){$com = $com."()";}
//if ($com == "kurt"){$com = $com."()";}
//if ($com == "about"){$com = $com."()";}
if ($com == "logout"){$com = $com."()";}
//if ($com == "network"){$com = $com."()";}
if ($com == "cls"){$com = $com."()";}
//if ($com == "vdir"){$com = $com."()";}
if ($com == "cd"){$com = $com."('~')";}
if ($com == "rrmdir"){$com = $com."()";}
//if ($com == "version"){$com = $com."()";}
//if ($com == "pose"){$com = "randomFun()";}
//if ($com == "refreshDB"){$com = $com."()";}
//if ($com == "reengineer"){$com = $com."()";}

//if multi module
if (strpos($com, " ") == true){
$LC = explode(' ',$com);
$LA = $LC[0];

//if ($LA == 'TEST'){$com = 'TEST("'.$LC[1].'")';}
if ($LA == 'cd'){$com = 'cd("'.$LC[1].'")';}
if ($LA == 'ls'){$com = 'ls("'.$LC[1].'")';}
if ($LA == 'rm'){$com = 'rm("'.$LC[1].'")';}
if ($LA == 'cat'){$com = 'cat("'.$LC[1].'")';}
if ($LA == 'redir'){$com = 'redir("'.$LC[1].'")';}
if ($LA == 'mv'){$com = 'mv("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'cp'){$com = 'cp("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'chmod'){$com = 'chmod("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'chown'){$com = 'chown("'.$LC[1].'","'.$LC[2].'")';}
//if ($LA == 'www'){$com = 'www("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'wget'){$com = 'wget("'.$LC[1].'","'.$LC[2].'")';}
if ($LA == 'rcopy'){$com = 'rcopy("'.$LC[1].'","'.$LC[2].'")';}
//if ($LA == 'zap'){$com = 'zap("'.$LC[1].'","'.$LC[2].'","'.$LC[3].'")';}
if ($LA == 'say'){$com = 'say("'.$LC[1].'","'.$LC[2].'","'.$LC[3].'")';}
include "libBridge.php";
}

//custom 3rd party OneAccessCommands config
$oacFile = 'libOACaddon.php';
if (file_exists($oacFile)){include $oacFile;}
?>
