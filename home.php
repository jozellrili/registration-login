<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
	<meta name="autor" content="Jozell M. Rili">
  	<meta name="description" content="Simple Registration-Login Page">

  	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="">
		<div class="box">
			<form method="POST" action="logout.php">
				<p><?php echo "Hello ".$_SESSION['username']."!"; ?></p>
				<p><?php echo "I see you're ".$_SESSION["age"]." now. How have you been?"; ?></p>
				<br/>
				<button>Logout</button>
			</form>
		</div>	
	</div>

</body>
</html>