<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="projet.css">
</head>
<body>
<header>
<div class="container">
<div class="row">
  <!--icon-->
  <i class="icon fa fa-bars fa-2x"></i>

<!--logo-->
<div class="col-md-3 col-xs-12">
<h2 class="x">2MBOUTIQUE</h2>
</div>
<!--nav-->
<nav class="col-md-9 col-xs-12">
<ul class="nav-list">
<li class="list"><a href="">Contact</a></li>
<li class="list"><a href="">Panier</a></li>
<li class="list"><a href="">Mode Femme</a></li>
<li class="list"><a href="">Bijoux&Montre</a></li>
<li class="list"><a href="">Chaussures</a></li>
<li class="list"><a href="">Commander</a></li>
</ul>
</nav>

</div>
</div>
</header>
<!--/header-->
<section class="sections home text-center">
 <div class="overlay">
 <div class="container">
<div class="home-content">
<h3 class="home-title">AU COEUR DE LA BEAUTE</h3>
  <P class="home-desc" >   
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Ratione soluta delectus incidunt quos dolor accusantium, excepturi quasi nesciunt ab dolore, laudantium, libero a nihil animi temporibus corrupti magnam. Eveniet, neque.
  </P>
<button class="btn-button"><a href="http://localhost/projet/index.php"target="_blank">boutique</a></button> 
 
<button class="btn-button">Discover more</button>

</div>
  </div>
 </div>
</section>
<!--About-->
<section class="sections-about">
  <div class="container">
    <div class="section-header text-center">
    <h2 class="section-title">About Us</h2>
    <div class="line"> <span></span> </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus culpa repellendus officia saepe officiis beatae labore natus reiciendis facere! Aperiam enim, repellendus fugit eos ut praesentium accusantium saepe amet eligendi.</p>
    </div>
  </div>
</section>
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>
<script>
$(document).ready(function(){
$('i.icon')click(function(){
  $('.nav-list').slideToggle();
});
$(window).scroll(function(){
  var sc=$(this).srcrolltop();
  if(sc > 100){
    $('header').addClass('sticky');
  } else{$('header').removeClass('sticky');

  }

});


});

</script>




</html>