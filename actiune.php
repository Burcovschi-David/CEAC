<?php

if($_POST['alege']=="elevi"){
    header("Location: elevi");
}else if($_POST['alege']=="parinti"){
    header("Location: parinti");
}else{
     header("Location: index.php");
}

?>
