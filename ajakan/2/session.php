<?php
    session_start();
    if ($_SESSION['key']!="Admin"){
        header('Location: index.php');
    }
?>
