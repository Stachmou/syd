<?php
if(!isset($_SESSION))session_start();
include_once('params.php');

if(empty($_POST['login']) || empty($_POST['password']))
{
	$_SESSION['error'][]='Please fillfull the form';
	header('Location:home.php');
}

else {
	$query = 'SELECT * FROM users WHERE login = '.$db->quote($_POST['login']).' AND password = '.$db->quote($_POST['password']);
	$results = $db->query($query);
	$results->setFetchMode(PDO::FETCH_OBJ);
	$users = $results->fetchAll();
	if (count($users)>0){
		$_SESSION['iduser'] = $users[0]->id;
		$_SESSION['success'][]='You are now connected';
		header('Location:home.php');
	}
	else{
		$_SESSION['error'][]='Bad login or password';
		header('Location:home.php');
	}
}

