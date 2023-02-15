<?php
    session_start();
    if ($_SESSION['key']!="admin"){
        header('Location: index.php');
    }
?>
