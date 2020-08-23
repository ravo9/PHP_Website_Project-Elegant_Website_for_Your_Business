<?php

	$date = $purpose = $form = $style = $functionality =  $existing = $name = $email = $phone = "";

	$date = date("Y/m/d h:i");
	$purpose = $_POST["purpose"];
	$form = $_POST["form"];
	$style = $_POST["style"];
	$functionality = $_POST["functionality"];
	$existing = $_POST["existing"];
	/*if (isset($_POST["website_type"]))
		$website_type = $_POST["website_type"];*/
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];

	#if ($_SERVER["REQUEST_METHOD"] == "POST")

	$to      = 'elegantwebsitesforyou@gmail.com';
	$subject = 'Elegant-Websites Order';
	$message = "Elegant Websites - New Order \r\n\n"
		. $date . "\n\n"
		. "Website purpose: \n"
		. "		" . $purpose . "\n\n"
		. "Website form: \n"
		. "		" . $form . "\n\n"
		. "Website style: \n"
		. "		" . $style . "\n\n"
		. "Website functionality: \n"
		. "		" . $functionality . "\n\n\n"
		. "Existing website improvements: \n"
		. "		" . $existing . "\n\n\n"
		. "Customer's details: " . "\n"
		. "		" . $name . "\n"
		. "		" . $email . "\n"
		. "		" . $phone . "\n"
		;
	$headers = 'From: elegantwebsitesforyou@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>

	<title>Elegant Websites for Your Business</title>

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
		<a href="index.php" class="links_no_decoration">Elegant Websites for Your Business</a>

		<div id="nav_bar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="order.php" style="color: grey;">Enquiry</a></li>
				<li><a href="contact.php">Contact</a></li>
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
					<div style="height: 30px;"></div>
					Thank you for your order! I will contact you soon to confirm the details.<br/>
                    Later, <strong>the free website project</strong> will be prepared for you.<br/>
                    If you will accept the project and its total price, I will implement it!<br/>
					<a href="index.php" class="btn btn-success mt-4" style="width: 280px; height: 35px; padding-top: 7px; margin-left: 160px; border-radius: 8px;" />Done</a>
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

<script>

    function toggle_dynamic_elements() {
    var x = document.getElementById("dynamic_elements");
    var d1 = document.getElementById("dynamic_choice");
    var d2 = document.getElementById("not_sure_choice");
    if (d1.checked == true || d2.checked == true) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
      }
    }

</script>
</html>
