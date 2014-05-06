<?php
if(!isset($_SESSION))session_start();

if (isset($_SESSION['error'])){
	$errors = $_SESSION['error'];
	foreach ($errors as $oneError)
	{
		echo '<div class="container"><div class="alert alert-danger">'.$oneError.'</div></div>';
	}
	unset($_SESSION['error']);
}

if (isset($_SESSION['success'])){
	$successes = $_SESSION['success'];
	foreach ($successes as $oneSuccess)
	{
		echo '<div class="container"><div class="alert alert-success">'.$oneSuccess.'</div></div>';
	}
	unset($_SESSION['success']);
}