<?php

session_start();
if (!isset($_SESSION['unique_id'])) {
	header("location: index.php");
}
?>
<?php
include_once "header.php";
?>
!DOCTYPE html>
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
	<link rel="stylesheet" href="../styles/user.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="wrapper Rectangle3">
		<section class="users">
			<header>

				<?php
				include_once "./config.php";
				$sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id ={$_SESSION['unique_id']}");
				if (mysqli_num_rows($sql) > 0) {
					$row = mysqli_fetch_assoc($sql);
				}

				?>

				<div class="content">
					<img src="./images/<?php echo $row['img'] ?>" alt="" />

					<div class="Status"></div>
					<div class="details">
						<span> <?php echo $row['fname'] . " " . $row['lname'] ?> </span>
						<div class="Status-2"></div>

						<p><?php echo $row['status'] ?></p>
					</div>
				</div>
				<a href="logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
			</header>

			<hr class="hr" />

			<div class="search">
				<span class="text"> Select an user to start chat </span>
				<input type="text" placeholder="Enter name to search" /><button>
					<i class="fas fa-search"></i>
				</button>
			</div>
			<center>

				<div class="users-list">

				</div>
			</center>
		</section>
	</div>

	<script src="../../scripts/user.js" async defer></script>
</body>

</html>