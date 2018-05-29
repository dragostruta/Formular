<!DOCTYPE html>
<html>
<head>
	<title>Formular</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Public/CSS/default.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-image">

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg poz-abs">
  <a class="navbar-brand size26" href="<?php echo URL;?>index">Formular</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php if (Session::get('loggedIN') == true): ?>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>dashboard/logout">LogOut</a>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>dashboard">Create Form</a>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>edit">Edit Form</a>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>showall">Show All Forms</a>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>settings">Settings Account</a>
		<?php
		if (!empty(Session::get('loggued_on_user'))){
				?>
				<a class="nav-item nav-link disabled size20">
				Hello 
				<?php
				echo Session::get('loggued_on_user');
				?>
				</a>
				<?php
			}
		?>
		<?php else: ?>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>login">LogIn</a>
		<a class="nav-item nav-link size20" href="<?php echo URL;?>signup">SignUp</a>
		<?php endif; ?>
    </div>
  </div>
</nav>
</header>
<div class="container">