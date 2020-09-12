<?php

function wget($if,$of){
    if(!@copy($if,'./'.$of))
    {
        $errors= error_get_last();
        echo "<font color='red'>COPY ERROR: ".$errors['type'];
        echo "<br />\n".$errors['message']."</font>";
    } else {
        echo "<font color='lime'>File copied from remote!</font>";
    }
}

?>
