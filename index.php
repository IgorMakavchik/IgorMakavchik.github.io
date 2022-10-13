<?php
require 'includes/info.php';
require 'includes/myFunctions.php';

$myPageName ='Home Page';
require 'includes/header.php';

$page = 0;
require 'includes/navbar.php';





//<!--    About Cattery  -->
LandingPageJumbotron($kittens, $bestVideos);
//<!--    End About Cattery  -->






require 'includes/footer.php';

?>
