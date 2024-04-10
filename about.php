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
 <link rel="stylesheet" type="text/css" href="css/main.css">
<body>
 <header>
    <h2><a href="#">GREEN UNIVERSITY
</a></h2>
    <nav>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php"  class="active">About</a></li>
      <li><a href="contact.php">Contact</a></li>
            <?php
if (isset($_SESSION['name'])) {
?>
      <li><a href="logout.php"  class="sign-button">SignOut</a></li>
      <li><a href="welcome.php"   class="user-button" ><?php echo $_SESSION['name'] ?></a></li>


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
    <div class="background-image" style="background: url('img/bg3.jpg'); background-size: cover;"></div>
    <div class="hero-content-area">
      <h1>HOME/ABOUT</h1>
      <h3>WHO WE ARE?</h3>
    </div>
  </section>




  <section class="destinations">
    <h3 class="title">Learn more</h3>
    <p>Welcome to the Green University, under the partnership with the Professionals and Certification Institute. Green University is a registered professional in the Sri Lanka.</p>
    <hr>
    

<section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 class="font-weight-bold">Welcome To <span class="text-custom">Lorem Ipsum</span></h3>
                            <p class="section_subtitle mx-auto text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br/>Lorem Ipsum has been the industry's standard dummy text.</p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-6">
                        <div class="about_header_main mt-3">
                            <div class="about_icon_box">
                                <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                            </div>
                            <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy text of the printing industry.</h4>
                            <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                            <p class="text-muted mt-3"> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img_about mt-3">
                            <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Creative Design</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fab fa-angellist"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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



</head>