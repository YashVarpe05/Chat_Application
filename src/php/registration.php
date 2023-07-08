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
	<link rel="stylesheet" href="../styles/styles.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="wrapper2">
		<section class="form signup">
			<header>
				<div class="header_logo">
					<img src="../../Assets/svg/logo.svg" alt="" />
					<a href="" class="">Log in</a>
				</div>
				<!-- Real time Chat App -->
			</header>
			<form action="#" class="form1" enctype="multipart/form-data">
				<!-- <div class="error-txt">This sis an error Message</div> -->
				<div class="hero-title">
					Connect with your team and friend chat with them .
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
							width: 100%;
							height: 50px;
							margin-bottom: 20px;
						"></div>
				<div class="name-details">
					<div class="field-1">
						<label>First Name</label>
						<label>Last Name</label>
						<!-- <br /> -->
					</div>
					<div class="field-1">
						<input type="text" name="fname" placeholder="First Name"" required
							/>
							<!-- <br /> -->
							<input
								type=" text" name="lname" placeholder="Last Name " required />
					</div>
					<div class="field">
						<label>Email address</label>
						<br />
						<br />

						<input type="text" name="email" placeholder="Enter Email address " required />
					</div>
					<div class="field-1">
						<label>Password </label>
						<label>Confirm Password </label>
						<!-- <br /> -->
					</div>
					<div class="field-1 pass-btn">
						<input type="password" name="password" placeholder="Enter Password" required />
						<!-- <br /> -->
						<input type="password" name="password" placeholder="Enter confirm Password " required />
					</div>
					<div class="field photo-btn">
						<label for="">Photo</label>
						<br />
						<br />

						<input type="file" name="image" style="
									align-items: center;
									padding-top: 12px;
									padding-left: 10px;
									cursor: pointer;
								" required />
					</div>
					<div class="field-btn button-1">
						<input type="submit" placeholder="Continue to Chat" value="Create free Account" required />
					</div>
				</div>
			</form>
			<div class="link">
				Already Signed Up? <a href="../php/index.php">Login Now </a>
			</div>
		</section>
		<div class="login-img">
			<img src="../../Assets/abstract-02.png" alt="" />
		</div>
	</div>

	<!-- <script src="./scripts/main.js" async defer></script> -->
	<script src="../../scripts/validation.js" async defer></script>
	<script src="../../scripts/signup.js" async defer></script>
</body>

</html>