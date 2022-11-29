<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("YOU SHALL NOT PASS!<p><a href='index.php'>Entrar</a></p>");
}
?>