<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php
$additional_head_code = '<link href="//getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">';
require_once('head.php');
?>
<body style="margin: 0; padding: 0;">
  <?php include('navbar.php'); ?>


  <!-- Carousel
  ================================================== -->
  <style>
  .carousel .carousel-caption {
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 4px;
  }
  </style>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 100vh;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox" style="height: 100vh;">
      <div class="item active" style="height: 100vh;">
        <img class="first-slide" src="http://thefort.com/wp-content/uploads/2015/09/pumpkins.jpg" style="height: 100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>Welcome to Trick or Treat Rater</h1>
            <p>"Chipping away at the American Debt, one candy bar at a time!" - Thomas</p>
          </div>
        </div>
      </div>
      <div class="item" style="height: 100vh;">
        <img class="second-slide" src="http://b.fastcompany.net/multisite_files/fastcompany/poster/2013/09/3018644-poster-candy.jpg" style="height: 100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>What is Trick or Treat Rater?</h1>
            <p>Trick or Treat Rater is a website to make your trick or treating route more efficient. It is a cloud based website where users update reviews for houses so you will know which houses give out the best candy. This website is 99.99% guaranteed to give you more candy.</p>
          </div>
        </div>
      </div>
      <div class="item" style="height: 100vh;">
        <img class="third-slide" src="http://www.candy.com/media/catalog/category/c_16b1ae86769eca54fe231c65c01ceb33_By-Type.jpg" alt="Third slide" style="height: 100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>Time to Halloween</h1>
            <p>It may only be <?php echo( date('F j') ); ?>, but it's always Halloween at Trick or Treat Rater!</p>
            <?php include('countdown.php'); ?>
          </div>
        </div>
      </div>
      <div class="item" style="height: 100vh;">
        <img class="fourth-slide" src="https://upload.wikimedia.org/wikipedia/commons/f/f7/Pumpkin.jpg" style="height: 100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>Get started now!</h1>
            <p>Type your address into the search bar.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container">

    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2015 Trick or Treat Rater</p>
    </footer>

  </div><!-- /.container -->


</body>
</html>
