<!DOCTYPE html>
<html>
<head>
    <title></title>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <style type="text/css">
      /*General Styles*/

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 16px;
    font-family: "Raleway", sans-serif;
    color: #555;
}

ul,
nav {
    list-style: none;
}

a {
    text-decoration: none;
    opacity: 0.75;
    color: #fff;
}

a:hover {
    opacity: 1;
}

a.btn {
    border-radius: 4px;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
    background-color: #fff;
    color: #333;
    opacity: 1;
    transition: all 400ms;

}

a.btn:hover {
    background-color: #aaa;

}

section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 100px 80px;
}

section:not(.hero):nth-child(even) {
    background-color: #f5f5f5;
}

.grid {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

hr {
    width: 250px;
    height: 3px;
    background-color: #e07e7b;
    border: 0;
    margin-bottom: 50px;
}

.image-1 {
    background-image: url("img/img1.jpg");
}

.image-2 {
    background-image: url("img/img2.jpeg");
}

.image-3 {
    background-image: url("img/img3.jpeg");
}

.image-4 {
    background-image: url("img/img4.jpeg");
}

section h3.title {
    text-transform: capitalize;
    font: bold 48px "Amatic SC", sans-serif;
    margin-bottom: 30px;
    text-align: center;
}

section p {
    max-width: 775px;
    line-height: 2;
    padding: 0 20px;
    margin-bottom: 30px;
    text-align: center;
}

@media (max-width: 800px) {
    section {
        padding: 50px 20px;
    }
}

/*Header Styles*/

header {
    position: absolute;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 35px 100px 0;
    animation: 1s fadein 0.5s forwards;
    opacity: 0;
    color: #fff;
    z-index: 2;
}

@keyframes fadein {
    100% {
        opacity: 1;
    }
}

header h2 {
    font-family: "Amatic SC", sans-serif;
}

header nav {
    display: flex;
    margin-right: -15px;
}

header nav li {
    margin: 0 15px;
}

@media (max-width: 800px) {
    header {
        padding: 20px 50px;
        flex-direction: column;
    }

    header h2 {
        margin-bottom: 15px;
    }
}

/*Hero Styles*/

.hero {
    position: relative;
    justify-content: center;
    text-align: center;
    min-height: 100vh;
    color: #fff;
}

.hero .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("img/bg.jpg");
    background-size: cover;
    z-index: -1;
    background-color: #333;

}

.hero h1 {
    font: 72px "Amatic SC", sans-serif;
    text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px;
    font-weight: bold;
}

.hero h3 {
    font: 28px "Raleway", sans-serif;
    font-weight: 300;
    text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
    margin-bottom: 40px;
}

.hero a.btn {
    padding: 20px 46px;
}

.hero-content-area {
    opacity: 0;
    margin-top: 100px;
    animation: 1s slidefade 1s forwards;
}

@keyframes slidefade {
    100% {
        opacity: 1;
        margin: 0;
    }
}

@media (max-width: 800px) {
    .hero {
        min-height: 600px;
    }

    .hero h1 {
        font-size: 48px;
    }

    .hero h3 {
        font-size: 24px;
    }

    .hero a.btn {
        padding: 15px 40px;
    }
}

/*Destinations Section*/

.destinations .grid li {
    height: 350px;
    padding: 20px;
    background-clip: content-box;
    background-size: cover;
    background-position: center;
}

.destinations .grid li.small {
    flex-basis: 30%;
}

.destinations .grid li.large {
    flex-basis: 70%;
}

@media (max-width: 1100px) {
    .destinations .grid li.small,
    .destinations .grid li.large {
        flex-basis: 50%;
    }
}

@media (max-width: 800px) {
    .destinations .grid li.small,
    .destinations .grid li.large {
        flex-basis: 100%;
    }
}

/*Packages Section*/

.packages .grid li {
    padding: 50px;
    flex-basis: 50%;
    text-align: center;
}

.packages .grid li i {
    color: #e07e7b;
}

.packages .grid li h4 {
    font-size: 30px;
    margin: 25px 0;
}

@media (max-width: 800px) {
    .packages .grid li {
        flex-basis: 100%;
        padding: 20px;
    }
}

/*Testimonials Section*/

.testimonials .quote {
    font-size: 22px;
    font-weight: 300;
    line-height: 1.5;
    margin: 40px 0 25px;
}

@media (max-width: 800px) {
    .testimonials .quote {
        font-size: 18px;
        margin: 15px 0;
    }

    .testimonials .author {
        font-size: 14px;
    }
}

/*Contact Section*/

.contact form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width: 60%;
}

.contact form .btn {
    padding: 18px 42px;
}

.contact form input {
    padding: 15px;
    margin-right: 30px;
    font-size: 18px;
    color: #555;
    flex: 1;
}

@media (max-width: 1000px) {
    .contact form input {
        flex-basis: 100%;
        margin: 0 0 20px 0;
    }
}

/*Footer Section*/

footer {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #555;
    color: #fff;
    padding: 20px 0;
}

footer ul {
    display: flex;
}

footer ul li {
    margin-left: 16px;
}

footer p {
    text-transform: uppercase;
    font-size: 14px;
    opacity: 0.6;
    align-self: center;
}

@media (max-width: 1100px) {
    footer {
        flex-direction: column;
    }

    footer p {
        text-align: center;
        margin-bottom: 20px;
    }

    footer ul li {
        margin: 0 8px;
    }
}

  </style>
<body>
 <header>
    <h2><a href="#">GREEN UNIVERSITY
</a></h2>
    <nav>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Signin</a></li>
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
    <hr>

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
    <h3 class="title">Testimonials from our adventurers:</h3>
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
    <p>Images courtesy of <a href="http://unsplash.com/">unsplash</a>.</p>
    <p>Why are you even reading this?! There's never anything interesting in the footer!</p>
    <ul>
      <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
      <li><a href="#"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
    </ul>
  </footer>
</body>
</html>



</head>