<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="images/bigTVlogo.png" />
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" media="screen,projection"> 

	<link href="css/dez.css" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.9/mediaelementplayer.css" />

</head>

<body>
	<?php include 'navbar.php'; ?>

	<div class="container">
		<br>
		<video poster="images/dezWorkoutPoster.jpg" playsinline preload="none" id="mediaplayer1" width="100%" height="320">
          <source  type="video/mp4" src="videos/dezFreeSmokeNewSmall.mp4" />
        </video>
        <br>
		<video poster="images/dezAussieTripPoster.jpg" playsinline preload="none" id="mediaplayer2" width="100%" height="320">
          <source  type="video/mp4" src="videos/dezAussieTripSmall.mp4" />
        </video>
        <br>
		<video poster="images/dezPromoPoster.jpg" playsinline preload="none" id="mediaplayer3" width="100%" height="320">
          <source  type="video/mp4" src="videos/dezPersonalCornerPromo.mp4" />
        </video>
		<br>
	</div>
	<!-- Latest jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://cdn.plyr.io/3.3.7/plyr.js"></script>
	 <script src="build/mediaelement-and-player.js"></script>
    <script src="build/renderers/dailymotion.js"></script>
    <script src="build/renderers/facebook.js"></script>
    <script src="build/renderers/soundcloud.js"></script>
    <script src="build/renderers/twitch.js"></script>
    <script src="build/renderers/vimeo.js"></script>
    <script src="build/lang/cs.js"></script>
    <script src="build/lang/de.js"></script>
    <script src="build/lang/es.js"></script>
    <script src="build/lang/fa.js"></script>
    <script src="build/lang/fr.js"></script>
    <script src="build/lang/hr.js"></script>
    <script src="build/lang/hu.js"></script>
    <script src="build/lang/it.js"></script>
    <script src="build/lang/ja.js"></script>
    <script src="build/lang/ko.js"></script>
    <script src="build/lang/ms.js"></script>
    <script src="build/lang/nl.js"></script>
    <script src="build/lang/pl.js"></script>
    <script src="build/lang/pt.js"></script>
    <script src="build/lang/ro.js"></script>
    <script src="build/lang/ru.js"></script>
    <script src="build/lang/sk.js"></script>
    <script src="build/lang/sv.js"></script>
    <script src="build/lang/uk.js"></script>
    <script src="build/lang/zh-cn.js"></script>
    <script src="build/lang/zh.js"></script>
    <script>
      $('#mediaplayer1').mediaelementplayer({
        pluginPath: "build/",
      // When using jQuery's `mediaelementplayer`, an `instance` argument
      // is available in the `success` callback
        success: function(mediaElement, originalNode, instance) {
          // do things
          console.log("success");
          console.log(mediaElement);

        }
      });
      $('#mediaplayer2').mediaelementplayer({
        pluginPath: "build/",
      // When using jQuery's `mediaelementplayer`, an `instance` argument
      // is available in the `success` callback
        success: function(mediaElement, originalNode, instance) {
          // do things
          console.log("success");
          console.log(mediaElement);

        }
      });
      $('#mediaplayer3').mediaelementplayer({
        pluginPath: "build/",
      // When using jQuery's `mediaelementplayer`, an `instance` argument
      // is available in the `success` callback
        success: function(mediaElement, originalNode, instance) {
          // do things
          console.log("success");
          console.log(mediaElement);

        }
      });
    </script>
	 

</body>


</html>
