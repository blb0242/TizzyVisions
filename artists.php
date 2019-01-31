<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/bigTVlogo.png" />
	<title>Music Videos | Artists</title>
	<link rel="stylesheet" href="css/artists.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" media="screen,projection">
	<meta name="pinterest" content="nopin" />
    <script src="animejs/anime.js"></script>

</head>

<body>
	
	<?php include 'navbar.php'; ?>
	  <!--- <div id='hold_images'></div> -->
            <div class="container">
                <div id="hold_images" style="min-width: 100%;" class=" carousel">
                <div data-duration="2000 class="ar"><a class="carousel-item" href="#one!"><img src="images/dezAussieTripPoster.jpg"></a></div>
            </div>
            </div>
             
           

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <script src="js/artist.js"></script> 
             <script>
              


                $(document).ready(function(){


                    $('.my_img').hover(function() {
                        $(this).addClass('transition');

                    }, function() {
                        $(this).removeClass('transition');
                    });
                    
                    

                    $('.my_img').click(function() {
                      console.log('clicked');
                        $(this).addClass('active');

                    }, function() {
                        $(this).removeClass('active');
                    });  
                    
                });

             </script>
             <script src="js/script.js"></script>
             <script type="text/javascript" src="js/animation.js"></script>
        
</body>

</html>
