<?php include "willa-config.php"?>
<!DOCTYPE html>
<html lang="pl">
     
<head>
 <!-- <title><?=$title?></title> -->
    <title>Willa "U Irenki"</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
       <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <!--   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
       <link rel="stylesheet" href="css/nav.css" />
       <link rel="stylesheet" href="css/willa.css" />
       <link rel="stylesheet" href="css/form.css" />
    
</head>
<!-- START WRAPPER -->
<body>          
<div class="wrapper">
  <div class="translator" id="google_translate_element"></div>
 
<header> 

    <!-- slider -->
    <div class="slider">
        
        <img src="images/apt2.png" class="mySlides"  alt="apt2">
        <img src="images/kuch.png" class="mySlides"  alt="kuch">
        <img src="images/laz.png" class="mySlides"  alt="laz">
        <img src="images/jad.png" class="mySlides"  alt="jad">
        <img src="images/laz2.png" class="mySlides"  alt="laz2">
        <img src="images/pry.png" class="mySlides"  alt="pry">
        <img src="images/syp.png" class="mySlides"  alt="syp">
        
        

    </div> 
<div class="logo"> <h1><a href="index.php"><i class="logo fa"></i> U Irenki</a></h1> </div>

     <nav>
       <ul class="topnav" id="myTopnav">
       <?=makeLinks($nav1)?>
       <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
    
</header>    
        
<!-- START LEFT COL -->
    
    <!--google translator function-->
    <script>
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'pl'}, 'google_translate_element');
}
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    
  <script>   
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1} 
            x[slideIndex-1].style.display = "block"; 
            setTimeout(carousel, 4000); // Change image every 4 seconds
        } 
    </script>   
<section>
<h2 class='pageID'><?=$PageID?></h2> 