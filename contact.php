<!DOCTYPE html>
<html>

<head>
	<title>Contact TV</title>
	<link rel="icon" type="image/png" href="images/bigTVlogo.png" />
	<link rel="preload" href="images/IMG_5936.JPG" as="image" media="(min-width: 601px)">
	<link rel="preload" href="images/IMG_5935.JPG" as="image" media="(min-width: 601px)">
	<link rel="preload" href="images/IMG_5937.JPG" as="image" media="(min-width: 601px)">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="css/contactcss.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Latest jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).on('load', function() {
			$(".loader").fadeIn("fast");
			$(".loader").fadeOut("slow");
		});

	</script>
	<style>
		#map {
			height: 400px;
		}

		

		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 35px;
			border-style: solid;
			border-color: black;
			border-width: 2px;
			outline: none;
			background-color: transparent;
			color: black;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}

		#myBtn:hover {
			background-color: #1e0033;
		}

		.page-footer {
			background-color: #1e0033;
		}
	</style>



</head>

<body>
	<div class="loader"></div>

	
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="small material-icons">keyboard_arrow_up</i></button>

	
	<!--  Parallax Section  -->
	<div class="parallax-container">
		<?php include 'navbar.php'; ?>
		<div class="parallax"><img src="images/IMG_5936.JPG"></div>
	</div>
	<div class="section white">
		<div class="row container">
			<div class="col s12 m10 offset-m1">
				<h2 class="header">Contact</h2>
				<p class="grey-text text-darken-3 lighten-3">Got a question? We've got the answer. Please feel free to contact us, and we will be sure to get back to you within 24 business hours. For all bookings inquiries, please refer to the "book now" section down below. Thank you for choosing Tizzy Visions! We look forward to working with you! </p>

				<h4 class="light">Contact Form</h4>
				<div class="row">
					<form action="email.php" method="post" class="col s6">
						<div class="row">
							<div class="input-field col s8">
								<input id="input_text" type="text" name="name" data-length="25">
								<label for="input_text">Name</label>
							</div>


							<div class="input-field col s8">
								<input id="input_text" type="text" name="subject" data-length="25">
								<label for="input_text">Subject</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea2" name="message" class="materialize-textarea" data-length="120"></textarea>
								<label for="textarea2">Message</label>
							</div>
						</div>
						<div class="row">
							<button class="btn waves-effect waves-light" type="submit" name="submit">Send
				    <i class="material-icons right">send</i>
				</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<div class="parallax-container">
		<div class="parallax"><img src="images/IMG_5935.JPG"></div>
	</div>
	<div class="section white">
		<div class="row container">
			<div class="col s12 m10 offset-m1">
				<h2 class="header">Book a Video</h2>

				<!-- Start Square Appointments Embed Code -->
				<script src='https://squareup.com/appointments/buyer/widget/cd97512f-8b6a-406a-87f0-92f1ff2bfe77/WA0H4KKD3PBNN.js'></script>
				<!-- End Square Appointments EmbedCode -->
			</div>
		</div>
	</div>



	<div class="parallax-container">
		<div class="parallax"><img src="images/IMG_5937.JPG"></div>
	</div>


	<div id="map"></div>
	<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Connect</h5>
							<a href="https://twitter.com/tizzy_visions" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @TIZZY_VISIONS</a>
							<br>
							<a href="https://www.instagram.com/tizzy_visions/?ref=badge" class="ig-b- ig-b-16"><img src="//badges.instagram.com/static/images/ig-badge-16.png" alt="Instagram" /> <b>Follow on Instagram</b></a>
							<br>
							<div class="g-ytsubscribe" data-channel="CKTIZZY" data-layout="full" data-count="default"></div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© Copyright Tizzy Visions 2016 - 2018, All rights reserved.
			
		</div>
	</div>
</footer>
	


	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>


	<script>
		
		var marker;


		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: {
					lat: 33.174325,
					lng: -97.100046,
					gestureHandling: 'cooperative'
				}
			});
			var image = {
				url: 'images/tvlogo.svg',
				// This marker is 20 pixels wide by 32 pixels high.
				size: new google.maps.Size(50, 35),
				// The origin for this image is (0, 0).
				origin: new google.maps.Point(0, 0),
				// The anchor for this image is the base of the flagpole at (0, 32).
				anchor: new google.maps.Point(0, 25)
			};

			marker = new google.maps.Marker({
				position: {
					lat: 33.174325,
					lng: -97.100046
				},
				map: map,
				animation: google.maps.Animation.DROP,
				icon: image
			});
			marker.setAnimation(google.maps.Animation.BOUNCE)
		}


	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_hOCZR9Ti20Kd7LdB7MPqY8OOGdWrtX4&callback=initMap">


	</script>

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}

	</script>

	<script type="text/javascript" src="js/script.js"></script>
	<!-- Twitter Button -->
	<script>
		! function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
				p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = p + '://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js, fjs);
			}
		}(document, 'script', 'twitter-wjs');

	</script>
	<script src="https://apis.google.com/js/platform.js"></script>




</body>

</html>
