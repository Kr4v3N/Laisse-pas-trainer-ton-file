<?php

if(isset($_GET['id'])) {
    $filemname = $_GET['id'];
    unlink('Upload/.$filename');
    header('Location: index.php');
}


