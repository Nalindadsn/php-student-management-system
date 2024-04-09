<?php session_start();
include_once('includes/config.php');
// if (strlen($_SESSION['id']==0)) {
  
//   } else{
   
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
 <link rel="stylesheet" type="text/css" href="css/main.css"></head>
<body>
 <header>
    <h2><a href="#">GREEN UNIVERSITY
</a></h2>
    <nav>
       <li><a href="index.php" class="active">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php
if (isset($_SESSION['name'])) {
?>
      <li><a href="logout.php"  class="sign-button">Sign Out</a></li>


<?php
}else{
  ?>
      <li><a href="login.php"  class="sign-button">Signin</a></li>


  <?php
}

       ?>
    </nav>
  </header>

  <section class="hero">
    <div class="background-image"></div>
    <div class="hero-content-area">
      <h1>GREEN UNIVERSITY</h1>
      <h3>Unmissable Adventure Tours With Your Friends</h3>
      <a href="#" class="btn">Contact Us Now</a>
    </div>
  </section>

  <section class="destinations">
    <h3 class="title">WHO WE ARE?</h3>
    <p>Welcome to the Green University, under the partnership with the  Professionals and Certification Institute. Green University is a registered professional in the Sri Lanka.</p>
  <div>
      <div class="row">
          
          
<ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

      </div>

  </div>    <hr>

    <ul class="grid">
      <li class="small image-1"></li>
      <li class="large image-2"></li>
      <li class="large image-3"></li>
      <li class="small image-4"></li>
    </ul>
  </section>




  <section class="packages">
    <h3 class="title">OUR SERVICES
</h3>
   

    <ul class="grid">
      <li>
        <i class="fa fa-book fa-4x"></i>
        <h4>
Multidisciplinary study
facilities</h4>
        <p>
We provide the best and modern facilities
for studies.</p>
      </li>
      <li>
        <i class="fa fa-camera-retro fa-4x"></i>
        <h4>
International programs</h4>
        <p>
We provide International recognized
Programs.</p>
      </li>
      <li>
        <i class="fa fa-bicycle fa-4x"></i>
        <h4>
Highly qualified
lecturing staff</h4>
        <p>
We have the most talented Lecturers
more than 25</p>
      </li>
      <li>
        <i class="fa fa-flag-checkered fa-4x"></i>
        <h4>
Using Reflection to
Support to learning</h4>
        <p>
Our latest podcast on evidence-based L&D explores the power of reflection for effective workplace learning.</p>
      </li>
    </ul>
  </section>

  <section class="testimonials">
    <h3 class="title">Testimonials from our Students:</h3>
    <hr>
    <p class="quote">Wow! This tour made me realize how much I love being outside with my friends. After going on one of these tours, I can safely say that beer pong is my favorite game all time, also the cultural programs were really interesting!</p>
    <p class="author">- Albert Herter</p>
    <p class="quote">Wow, this really blew my mind. We had so much fun at the beach, and also some hidden secrets revealed. Come on, I'm living in this city for 5 years. Amazing!</p>
    <p class="author">- Sharon Rosenberg</p>
    <p class="quote">If you want to understand your friends better, head to the mountains. I mean, seriously. It's like sitting next to a campfire and just talk in the sunset, woah. You know? It's like that.</p>
    <p class="author">- Luis Mendoza</p>
  </section>

  <section class="contact">
    <h3 class="title">Learn more</h3>
    <p>Welcome to the Green University, under the partnership with the Professionals and Certification Institute. Green University is a registered professional in the Sri Lanka.</p>
    <hr>
    <form>
      <input type="email" placeholder="Email">
      <a href="#" class="btn">Subscribe now</a>
    </form>
  </section>

  <footer>
    <p>Images courtesy of <a href="">GREEN UNIVERSITY</a>.</p>
    <p>Why are you even reading this?! There's never anything interesting in the footer!</p>
    <ul>
      <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
    </ul>
  </footer>
</body>
</html>



<?php 
// }

 ?>