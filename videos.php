<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="images/bigTVlogo.png" />
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" media="screen,projection">

	<link href="css/musicVideos.css" rel="stylesheet">
	<!-- If you'd like to support IE8 -->
	
	<title>Tizzy Visions | Videos</title>
	


	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
	

	<?php 
		include 'navbar.php';
		$playlistID = $_GET['id']; 
		echo '<div class="c-outer" id="'.$playlistID.'"></div>';
	?>

	<!-- Latest jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script type="text/javascript" src="js/playlistVideos.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('nav i').addClass('purple-text');
			$('nav i').addClass('text-darken-4');
		});
	</script>
	

</body>

</html>
