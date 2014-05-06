<?php if(!isset($_SESSION))session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./media/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Show Your Desktop</a>
			</div>
			<div class="navbar-left">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="desktopList.php">Their Dekstop</a></li>
					<li><a href="yourDesktop.php">Your Desktop</a></li>
				<?php if(!empty($_SESSION['iduser'])){?>
					<li><a href="yourProfile.php">Your Profile</a></li>
				<?php }else{ ?>
					<li><a href="subscribe.php">Subscribe</a></li>
				<?php } ?>
				</ul>
			</div>
			<div class="navbar-right">
				<?php if(empty($_SESSION['iduser'])){ ?>
					<form class="navbar-form" method="post" action="login.php">
						<input type="text" name="login" class="form-control" placeholder="Login">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<input type="submit" value="Login" class="btn btn-success">
					</form>
				<?php } else { ?>
					<form class="navbar-form" action="logout.php">
						<input type="submit" value="Logout" class="btn btn-danger">
					</form>
				<?php } ?>
			</div>
		</div>
	</nav>
</div>
<?php include_once ('errors.php'); ?>
</body>
</html>

