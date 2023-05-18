<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../profile/logindex.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Profile Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/profilehome.css">
    <link rel="shortcut icon" href="../home/img/PM-icon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Condensed&family=Source+Sans+Pro&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
</head>

<body class="loggedin">
		<nav class="navtop">
			<img src="../home/img/PM-transparent green-logo.png"width="70px" height="65px" id=logo alt="Pawfect Match Logo image" style="margin-left: 100px;" />
				<div>
					<h1>Pawfect Match</h1>
					<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
					<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				</div>
		</nav>
		
		<div class="content">
			<h2>Home Page</h2>
			<p>Hello there and welcome back, <?=$_SESSION['name']?>!</p>
		</div>

		<?php require_once "index.php"?>
	</body>
</html>
