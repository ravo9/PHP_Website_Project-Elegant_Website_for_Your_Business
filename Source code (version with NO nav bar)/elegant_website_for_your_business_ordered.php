<?php

	$date = $desc = $spec = $website_type = $dynamic_elements = $other_dynamic_elements = $hosting_option = $name = $email = $phone = "";

	$date = date("Y/m/d h:i");
	$desc = $_POST["desc"];
	$spec = $_POST["spec"];
	if (isset($_POST["website_type"]))
		$website_type = $_POST["website_type"];
	foreach($_POST['elements'] as $element)
		$dynamic_elements .= ($element . ", ");
	$other_dynamic_elements = $_POST["other_dynamic_elements"];
	if (isset($_POST["hosting_option"]))
		$hosting_option = $_POST["hosting_option"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	
	#if ($_SERVER["REQUEST_METHOD"] == "POST") 
	
	$to      = 'rafalozog@gmail.com';
	$subject = 'Elegant-Websites Order';
	$message = "Elegant Websites - New Order \r\n\n" 
		. $date . "\n\n"
		. "Website description: \n"
		. "		" . $desc . "\n\n"
		. "Website type: \n"
		. "		" . $website_type . "\n\n"
		. "Desired dynamic elements: \n"
		. "		" . $dynamic_elements
		. "		" . $other_dynamic_elements . "\n\n"
		. "Hosting option: \n"
		. "		" . $hosting_option . "\n\n"
		. "Technical specification: \n"
		. "		" . $spec . "\n\n"
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
		<a href="/" class="links_no_decoration">Elegant Website for Your Business</a>
	</div>
	
	<div id="benefits">
		<div class="container">
		<div class="row">
                <div class="col-md-4 text-center">
					<img class="img-thumbnail" src="img/c5.jpg">
				</div>
				<div class="col-md-8">
				
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
			All rights reserved 2017 &copy Elegant Website for Your Business - Rafal Ozog Web Development, Edinburgh
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
