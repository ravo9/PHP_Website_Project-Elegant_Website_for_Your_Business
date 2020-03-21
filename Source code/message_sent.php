<?php

	$date = $name = $contact = $desc = "";

	$date = date("Y/m/d h:i");
	$name = $_POST["name"];
	$email = $_POST["contact"];
	$desc = $_POST["desc"];

	#if ($_SERVER["REQUEST_METHOD"] == "POST")

	$to      = 'rafalozog@gmail.com';
	$subject = 'Elegant-Websites Message';
	$message = "Elegant Websites - New Message \r\n\n"
		. $date . "\n\n"
		. "Customer's details: " . "\n"
		. "		" . $name . "\n"
		. "		" . $contact . "\n\n"
		. "Message: " . "\n"
		. "		" . $desc . "\n"
		;
	$headers = 'From: elegantwebsitesforyou@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>

	<title>Elegant Website for Your Business</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="Creation of elegant and useful websites, which increase business value, attract customers, make an enterprise open and attainable." />
	<meta name="keywords" content="elegant-website, elegant-websites, websites, website, elegant, web-development, creation, rafal, ozog, business, customers, enterprise, attainable" />

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

<body>

	<div id="logo" class="container">
		<a href="index.php" class="links_no_decoration">Elegant Website for Your Business</a>

		<div id="nav_bar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="order.php">Order</a></li>
				<li><a href="contact.php" style="color: grey;">Contact</a></li>
			</ul>
		</div>
	</div>

	<div id="benefits">
		<div class="container">
		<div class="row">
                <div class="col-md-4 text-center">
					<img class="img-thumbnail" src="img/c5.jpg">
				</div>
				<div class="col-md-8">
					<div style="height: 45px;"></div>
					Thank you for your message! We will answer your question as quick as possible!
					<a href="index.php" class="btn btn-success mt-4" style="width: 280px; height: 35px; padding-top: 7px; margin-left: 160px; border-radius: 8px;" />Ok</a>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			All rights reserved 2020 &copy Elegant Websites for Your Business - Rafal Ozog Web Development, London
		</div>
	</div>

</body>

</html>
