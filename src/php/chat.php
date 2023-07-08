<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
	header("location: login.php");
}

?>
<?php

include_once "header.php";
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
	<link rel="stylesheet" href="../styles/chat.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="wrapper chat-container">
		<section class="chat-area">
			<header>
				<?php
				include_once "config.php";
				$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

				$sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id ={$_SESSION['unique_id']}");
				if (mysqli_num_rows($sql) > 0) {
					$row = mysqli_fetch_assoc($sql);
				} else {
					header("location:users.php");
				}

				?>
				<a href="user.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
				<img src="../php/images/<?php echo $row['img'] ?>" alt="" />



				<div class="details">
					<span> <?php echo $row['fname'] . " " . $row['lname'] ?></span>

					<p><?php echo $row['status'] ?></p>
				</div>
			</header>
			<div class="chat-box">

			</div>
			<form action="#" class="typing-area">
				<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden />
				<input type="text" name="incoming_id" value="<?php echo htmlspecialchars($_GET['user_id']); ?>" class="incoming_id" hidden />

				<!-- <input type="text" name="incoming_id" value=" class="incoming_id" hidden /> Add this line -->
				<input type="text" name="message" class="input-field" placeholder="Type a message here..." />
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>

		</section>
	</div>
	<script src="../../scripts/chat.js"></script>
</body>

</html>