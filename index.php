<html>

<head>
	<meta name="title" content="Tizzy Visions | Cinematography, Videography & Photography">
	<meta name="description" content="Portfolio website for Chayce Tisdale the cinematograhper, videographer, and photographer.Come share the vision.">
	<meta name="author" content="Byron Brown">
	<link rel="icon" type="image/png" href="images/bigTVlogo.png" />
	
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.css">

	<meta name="pinterest" content="nopin" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="index.css">

	<title>Tizzy Visions | Cinematography, Videography & Photography</title>
	
</head>

<body onload = "showToast('Click/Tap screen or press Enter to enter site!', 5000)">
	
	<header class="v-header container">
		<div class="fullscreen-video-wrap">
			<video playsinline muted loop autoplay src="videos/intro.mp4" class="responsive-video"></video>
		</div>
		<div class="header-overlay"></div>
		<div id="logo" class="header-content ">
				<!--
				<a  href="TVhome.php"><img width="400px" height="auto" src="images/bigTVlogo.png"></a>
				-->
			
		</div>
	</header>
	

	

	<!-- Latest jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script>
		$(document).ready(() => {
			document.body.addEventListener('touchstart', function(e){
		        window.location.href="TVhome.php";
		    }, false)



			 

			document.body.addEventListener('click', () => {
				
					window.location.href="TVhome.php";
					console.log();
				
			});
			document.body.addEventListener('keyup', function(e) {
				if (e.keyCode == 13) {
					window.location.href="TVhome.php";
					console.log(e);
				}
			});
		});

		

		function showToast(message, duration) {
	            M.toast({html: '<p>'+message+'</p>'}, duration);
	    }


	</script>
</body>

</html>
