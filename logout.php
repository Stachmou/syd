<?php
if(!isset($_SESSION))session_start();	
if(isset($_SESSION['iduser']))unset($_SESSION['iduser']);
header('Location:home.php');
?>