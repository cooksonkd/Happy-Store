<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Happy Online Store</title>
		<meta charset="UTF-8">
        <link rel="icon" href="style/logo.png">
		<link rel="stylesheet" type="text/css" href="style/css.css" />
	</head>
	<body>
		<div id="homelogo">
			<a href="index.php"><img src="style/logo.png" alt="Logo" width="100px" height="97px" style="margin-top: 5px"></a>
		</div>
		<img src="style/head.jpg" alt="header" id="header">
		<div class="topnav" id="myTopnav">
			<a href="index.php">Home</a>
			<a href="surfBoards.php">Surf Boards</a>
			<a href="wetSuits.php">Wet Suits</a>
			<a href="beachClothing.php">Beach Clothing</a>
			<a href="about.php">About Our Store</a>
			<a href="javascript:void(0);" class="icon" onclick="responsive()">&#9776;</a>
		</div>
	<?php
		if(isset($_SESSION['user_name'])){
			$member = $_SESSION['user_name'];
			echo"<p id='welcome'>Welcome to our store <b>" . $member . "</b>. (<a href='logout.php'>Logout</a>)</p>";
			//unset($_SESSION['user_name']);
			//session_destroy();
		}
		else echo "<p id='welcome'>Welcome to our store. Please <a href='login.php'>Login</a> or <a href='registration.php'>Register</a></p>";
	?>
	<script type="text/javascript">
         function responsive() {
             var x = document.getElementById("myTopnav");
             if (x.className === "topnav") {
                 x.className += " responsive";
             } else {
	             x.className = "topnav";
             }
         }
	</script>
