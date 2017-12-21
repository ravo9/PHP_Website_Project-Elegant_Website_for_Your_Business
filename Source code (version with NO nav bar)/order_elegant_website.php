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
        <form action="elegant_website_for_your_business_ordered.php" name="form" method="post">
	    <div class="row">
	        <div class="col-md-8">
						    <fieldset class="form-group">
							    <legend class="mb-3">1. What kind of website do you need?</legend>
								    <label for="type">
								    <strong>Static Website</strong> displays media, images, text, information and may contain many sub-pages with a proper navigation.
								    <div style="height: 18px"></div>
								    <strong>Dynamic Website</strong> is much more interactive. This type may contain elements like login system, user registration, online Ordering and Booking Systems connected to internal or external database. 
								    </label>
                                    <div style="height: 12px"></div>
								    <input type="radio" name="website_type" class="mb-3 mr-1" id="static_choice" value="static" Onchange="toggle_dynamic_elements()">Static <span class="badge badge-success badge-pill ml-2">£49.99</span> <span class="badge badge-danger badge-pill ml-2" style="text-decoration: line-through">£99.99</span></br>
								    <input type="radio" name="website_type" class="mb-3 mr-1" id="dynamic_choice" value="dynamic" Onchange="toggle_dynamic_elements()">Dynamic <span class="badge badge-success badge-pill ml-2">£49.99 - £149.99*</span> <span class="badge badge-danger badge-pill ml-2" style="text-decoration: line-through">£149.99 - £299.99*</span></br>
								    <div style="margin-left: 30px;">*Depends on project complexity - the price will be specified by e-mail.</div>
							        <div style="height: 20px;"></div>
						    </fieldset>
						
                            <fieldset id="dynamic_elements" style="display: none; margin-top: -10px;">
							    <legend class="mb-3">Please select dynamic elements, which you would like to add:</legend>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="order_system_simple" />Simple Ordering System (orders may be sent by e-mail)</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="booking_system_simple" />Simple Booking System (booking requests may be sent by e-mail)</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="login_system" />User System (login and registration)</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="database" />Database</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="search_engine" />Internal Search Engine</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="order_system_adv" />Advanced Ordering System (related to users and database)</br>
							    <input type="checkbox" class="ml-4 mb-2 mr-1" name="elements[]" value="booking_system_adv" />Advanced Booking System (related to users and database)</br>
                                <div class="ml-4 mb-2 mr-1">
                                Other (please specify): <input class="form-control mt-2" type="text" name="other_dynamic_elements" />
                                </div>
							    <div style="height: 30px;"></div>
						    </fieldset>

						    <fieldset class="form-group">
							    <legend class="mb-3">2. Please describe briefly what should the website be about?</legend>
                                <textarea class="form-control" name="desc" rows="2"></textarea>
							    <div style="height: 23px;"></div>
						    </fieldset>

                            <fieldset class="form-group">
							    <legend class="mb-3">3. Would you like to specify some design or functional features?<br/></legend>
                                           Are there any colours you would like to implement or emphasize?<br/>
                                           Maybe you would like to specify the layout model, e.g:<br/>
                                           <ul>
                                               <li>blog-style,</li>
                                               <li>simple one-page style (this website),</li>
                                               <li>casual main-page with sub-pages acccessible through navigation,</li>
                                               <li>your own vision.</li>
                                          </ul>
                                          <input type="text" class="form-control" name="spec" /></br>
                                           If you don't have your own idea - <strong>don't be worried</strong>. I will prepare the best-fitting website's project we can for you!
							    <div style="height: 23px;"></div>
						    </fieldset>
           
                </div>
            <div class="col-md-4 text-center">
			    <img class="img-thumbnail" src="img/c1.jpg">					
		    </div>			
        </div>
        <div class="row mt-2">
                <div class="col-md-4 text-center">
                     <img class="img-thumbnail" src="img/c3.jpg">
					<div style="height: 30px;"></div>
					<div class="btn btn-warning" style="position: relative; top: 15px; left: 780px; width: 260px; padding-top: 15px; padding-bottom: 15px; line-height: 1.5; border-radius: 10px;">
						Any questions?<br/>
						Contact me:<br/>
						07497173091<br/>
						<span style="font-size: 0.8rem;">elegantwebsitesforyou@gmail.com</span>
					</div>
				</div>
                <div class="col-md-8">
                            <fieldset class="form-group">
							    <legend class="mb-3">4. What about the hosting?</legend>
							    I will prepare the website, but you will also need a <strong>hosting</strong> (server) and <strong>domain</strong> (address) to place it on the Internet. If you would like, I can find the best offer for you and <strong>after you will accept it</strong> - publish the website.<br/><br/>
                                <input type="radio" name="hosting_option" value="yes"><strong>Yes</strong>, please find the best hosting and domain for my website (both prices will be added to receipt <strong>after you will accept</strong>) presented offer*.<br/>  
                                *Usually <span class="badge badge-warning badge-pill">around £20 per year</span> for domain without ads and additional words in address.<br/><br/>
                                <input type="radio" name="hosting_option" value="no"><strong>No</strong>, I just want to order website.<br/>
							    <div style="height: 22px;"></div>
						    </fieldset>

                            <fieldset class="form-group">
							    <legend class="mb-4">5. Please leave a contact to you:</legend>
                                <input class="d-block mb-4" style="margin-left:24px;" type="textarea" name="name" placeholder="First and last name">
								<input class="d-block mb-4" style="margin-left:24px;" type="textarea" name="email" placeholder="E-mail address">
                                <input class="d-block mb-3" style="margin-left:24px;" type="textarea" name="phone" placeholder="Phone number">
							    <div style="height: 10px;"></div>
						    </fieldset>
						
                            <fieldset>
						    <input type="submit" name="submit" class="btn btn-success" style="width: 280px; height: 35px; padding-top: 7px; padding-bottom: 7px; border-radius: 8px;" value="Order" />
						    </fieldset>
				    </div>
			    </div>
            </form>
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
    if (d1.checked == true) {
        x.style.display = "block";
    } else {
        x.style.display = "none";
      }
    } 

</script>
</html>
