<!DOCTYPE html>
<html lang="en">
<?php
/*require_once("connect.php");*/

if (isset($_POST["submit"])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone-number'];
  }
}
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>register page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php"><em>AUCTION</em> PROJ</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li> <a href="index.php" class="external">Home</a></li>

        <li><a href="#section4">feeds</a></li>
        <li><a href="#section6">Contact</a></li>
        <li><a href="Login.php" class="external">LOGIN</a></li>
      </ul>
    </nav>
  </header>


  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Join now for <em>The christimas gifts</em> and start collecting rare products</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online auctions</h6>
            </div>
            <form id="contact" action="php/controller/AddUserController.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="username" type="text" class="form-control" id="name" placeholder="Your username" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="password" class="form-control" placeholder="Your password" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="L_name" type="text" class="form-control" placeholder="Your last name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="BOD" type="date" class="form-control" placeholder="bot" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="country" type="text" class="form-control" placeholder="Your country" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="city" type="text" class="form-control" placeholder="Your city" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="" id="form-submit" name="submit" class="button"><input class="" type="submit" value="Register now" name="submit"></button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>feeds</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/double edge.jfif" alt="Course #1">
            <div class="down-content">
              <h4>most expensive coin</h4>
              <p>Double eagle has been sold for $18.9M in New york! </p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="https://edition.cnn.com/style/article/double-eagle-coin-auction-record/index.html">read more <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/cristimas.jfif" alt="Course #2">
            <div class="down-content">
              <h4>marry christmas</h4>
              <p>we wish you a marry christmas and happy new year</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/newcollection.jfif" alt="Course #3">
            <div class="down-content">
              <h4>New collection</h4>
              <p>new collection of products comeing soon get ready</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">browse products <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/rare car.jfif" alt="Course #4">
            <div class="down-content">
              <h4>super rare car</h4>
              <p>one of the raries cars in the world is up in auction check it now!</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#">car link <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/bidding.jfif" alt="">
            <div class="down-content">
              <h4>auction article</h4>
              <p>first time to join auctions? read this article to know all you need to know.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="https://www.graysauctioneers.com/blog-posts/2020/7/29/how-do-auctions-work#:~:text=An%20item%20comes%20up%20for,to%20take%20home%20the%20item.">visit <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/double edge.jfif" alt="">
            <div class="down-content">
              <h4>most expensive coin</h4>
              <p>Double eagle has been sold for $18.9M in New york!</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="https://edition.cnn.com/style/article/double-eagle-coin-auction-record/index.html">read more <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/cristimas.jfif" alt="">
            <div class="down-content">
              <h4>marry christmas</h4>
              <p>we wish you a marry christmas and happy new year</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/newcollection.jfif" alt="">
            <div class="down-content">
              <h4>New collection</h4>
              <p>new collection of products comeing soon get ready</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">browse products <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/rare car.jfif" alt="">
            <div class="down-content">
              <h4>super rare car</h4>
              <p>one of the raries cars in the world is up in auction check it now!</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">car link <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/bidding.jfif" alt="">
            <div class="down-content">
              <h4>auction article</h4>
              <p>first time to join auctions? read this article to know all you need to know.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="https://www.graysauctioneers.com/blog-posts/2020/7/29/how-do-auctions-work#:~:text=An%20item%20comes%20up%20for,to%20take%20home%20the%20item">visit <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ring.jfif" alt="">
            <div class="down-content">
              <h4>The Oppenheimer Blue</h4>
              <p>the most expensive blue diamond in auction history, sold for $57.9 million in 2016.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#"> <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about online auction</em></h4>
            <p>we are working hard for collection valuable products for you and making the auction secure all the time
              <br><br>feal free to contact as for any complations we will respond to you as fast as possible
            </p>
            <div class="main-button"><a rel="nofollow" href="#login" target="_parent">login</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>learn more about auctions</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=OclsTGrcQlQ" class="play"><img src="assets/images/learn auctions.jfif"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">



          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by AUCTION PROJ

            | Design: <a href="#HEMEDRO" rel="sponsored" target="_parent">HEMEDRO</a><br>
            Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a>

          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>