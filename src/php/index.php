<?php

session_start();
if (isset($_SESSION['unique_id'])) {
	header("location: users.php");
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Chat With AS</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../../src/styles/styles.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="
			padding: 0;
			margin: 0;
			width: 100%;
			height: 100%;
			overflow-x: hidden;
			background-color: #131619;
		">
	<div class="container">
		<section class="form login signup">
			<header>
				<div class="header_logo">
					<img src="../../Assets/svg/logo.svg" alt="logo" />
				</div>
			</header>
			<form action="login.php" method="post" class="form1">
				<div class="hero-title">
					<h1>
						Let's get
						<span style="
									background-clip: text;
									-webkit-background-clip: text;
									color: transparent;
									font-weight: 600;

									/* Define the gradient */
									background-image: linear-gradient(
										45deg,
										#82dbf7 0.67%,
										#b6f09c 100%
									);
								">Chat!</span>
					</h1>
					<p style="width: 110%">
						Log in to chat with your friends and hangout
					</p>
				</div>
				<div class="error-txt" style="
							color: #fff;
							background-color: #2d1a19;
							color: red;
							border: 2px solid rgb(255, 0, 0);
							text-align: center;
							padding-top: 10px;
							border-radius: 12px;
							font-size: 18px;
							font-weight: 500;
							width: 160%;
							height: 50px;
							margin-bottom: 20px;
						"></div>
				<div class="field">
					<label>Email</label>
					<br />
					<br />

					<input type="text" name="email" placeholder="Enter Email address " required />
				</div>
				<div class="field input pass-input">
					<label>Password</label>
					<br />
					<br />

					<input type="password" name="password" placeholder="Enter Password " required />
					<i style="left: 145.5%" class="fas fa-eye"></i>
				</div>
				<div class="field-btn button">
					<input type="submit" placeholder="Continue to Chat" value="Log in" required />
				</div>
			</form>
			<div class="link">
				Not Yet Signed Up?
				<a href="../../src/php/registration.php">signup Now </a>
			</div>
		</section>
		<div class="login-img">
			<img src="../../Assets/abstract-04.png" alt="hero-img" />
		</div>
	</div>

	<script src="../../scripts/pass-show-hide.js" async defer></script>
	<script src="../../scripts/login.js" async defer></script>
</body>

</html>