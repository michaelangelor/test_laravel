<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- attach CSS styles -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  
  <title>Jhun Lopez Photography</title>
</head>
<body>
  <!--  BODY PAGE CONTENT -->
  <!-- attach JavaScripts -->
  <script src="script/jquery-1.10.2.js"></script>
  <script src="script/bootstrap.min.js"></script>
  <script src="//maps.google.com/maps/api/js?sensor=true"></script>
  <script src="script/main.js"></script>

@include('layout.header')
@yield('content')
@include('layout.footer')





<script>


$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#navbar-collapse-main a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
</body>
</html>
