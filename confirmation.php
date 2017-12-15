<?php

	$date = $type = $desc = $spec = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$date = date("Y-m-d h:i:sa");
	    $desc = $_POST["desc"];
	    $spec = $_POST["spec"];
		if (isset($_POST["type"]) && $_POST["type"] == "static")
			 $type = "static";
		else if (isset($_POST["type"]) && $_POST["type"] == "dynamic")
			 $type = "dynamic";
	}
	
	$to      = 'rafalozog@gmail.com';
	$subject = 'Elegant-Websites Order';
	$message = "Elegant Websites - New Order \r\n" . $date;
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
	<meta name="keywords" content="websites, website, elegant, web-development, creation, rafal, ozog, business, customers, enterprise, attainable" />
	
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
				
					Thank you for your order! We will contact you soon to confirm the details.<br/>
                    After it, we will prepare <strong>a free website project</strong> for you.<br/>
                    If you will accept the project and its total price, we will implement it for you!<br/>
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
