<?php
    include_once 'contactform.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Lit</title>
  <link rel="shortcut icon" href="img/getlit-brand.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/bootstrap-css/bootstrap.css">
  <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="styles/custom-css/get-lit.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">

  <link rel="stylesheet" type="text/css" href="assets/aos/dist//aos.css">
  
  <link href="assets/assets/demos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">

</head>

<body>
  <main>
    <section id="section-a">
  <!-- ********** Header start here ******** -->
      <header class="container-fluid">
        <!-- Navigation bar start here -->
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid d-flex ">
            <a class="navbar-brand" href="">
              <img src="img/getlit-brand.svg" width="48" height="48" alt="" class="d-inline-block align-top" style="background-color: white; border-radius: 50%;">
              <span id="brand-name" style="color: white;">Get Lit</span>
            </a>

            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->

            <!-- Navigation List -->

            <!-- <div class="collapse navbar-collapse custom-nav" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                <li class="nav-item">
                  <a class="nav-link px-4 font-weight-bold" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 font-weight-bold" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-4 font-weight-bold" href="about-us.html">Grooves</a>
                </li>
              </ul>
            </div> -->

          </div>
        </nav>
        <!-- ********** Header Finish here ******** -->
        <!--- Two Column Section -->
        <div class="container p-lg-4">
          <div class="row">
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-12">
                          <h2 class="text-left pb-1 pt-5" style="color: white;">The Very Best Strains,</h2>
                          <h1 class=" media pb-5" style="color: white;">Right At Your Doorstep.</h1>
                          <p style="color: white">Find the closest, trusted cannabis dealers with the very best strains in your area, and get it delivered at your doorstep.</p>
                      </div>
                      <div class="sub-header-col-left">
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" data-aos-easing="ease-in-out" data-aos-mirror="true" id="typed-strings">
                        <p class="">Coming Soon!</p>
                        </div>
                          <?php if(isset($_SESSION['status'])){
                            echo "<div class='alert alert-success'>'".$_SESSION['status']."'</div>";
                        } else if(isset($_SESSION['error'])) {
                            echo "<div class='alert alert-danger'>'".$_SESSION['status']."'</div>";
                        } ?>
                        <form class="contact-form" action="" method="post">
                          <div class="form-group input-group">
                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" style="background-color: white;" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            <div class="">
                            <button type="submit" name="submit" class="btn input-group-append btn-primary">Notify Me When This Goes live!</button>
                          </div>
                        </form>
                      </div> 
                  </div>
              </div>
              <div class="col-md-6">
                  <img src="" alt="" class="">
              </div>
          </div>
          </div>
      </header>
    </section>
    <section id="section-b"></section>
  </main>
  <!--- Two Column Section Ends Here-->
  
  

    <!--- One Colum Section -->
    <div class="container-fluid">
      <div class="row text-center">
          <div class="col-12">
              <h5 class="display-4">How it works</h5>
              <p class="lead col-md-8 text-center mx-auto" >The Get Lit App connects you to the very best dealers of every kind of starains you can think of. ITt brings that high right at your doorstep with just an order of the App. Connecting you to only the most trusted plugs, your area has got to offer. Sound litty right?.</p>
          </div>
      </div>
    </div>
    <!--- One Colum Section Ends Here -->

    <!--- Three Column Section Starts Here-->
    <div class="container ">
      <div class="row text-center d-flex justify-content-center align-items-center">
          <div class="col-lg-3 col-md-4 h-100">
              <div class="card">
                <div class="card-body mx-auto">
                  <img src="img/emojileaf.svg" width="50" height="47.11" class="img-fluid">
                  <h5 class="card-title">Wide Range Of Strains to Pick From</h5>
                  <p class="card-text">Get to pick any bud of choice, be it Indica, Sativa and Hybrid.</p>
                </div>
              </div> 
          </div>
          <div class="col-lg-3 col-md-4 h-100">
              <div class="card">
                <div class="card-body mx-auto">
                  <img src="img/emojihand.svg" width="34.38" height="47.13" class="img-fluid">
                  <h5 class="card-title">Choose Drop Location And Time</h5>
                  <p class="card-text">Get to the a convinent place and time for pickup.</p>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-4 h-100">
              <div class="card">
                <div class="card-body mx-auto">
                  <img src="img/emojitruck.svg" width="63" height="63" class="img-fluid">
                  <h5 class="card-title">Speedy Delivery</h5>
                  <p class="card-text">Get your Kush delivered on time with ease</p>
                </div>
              </div>
          </div>
      </div>
    </div>
    <!--- Three Column Section Ends Here-->


    <!--- Carousel Section Starts Here -->

    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="img/mobile1.svg" alt="mobile1" class="img-fluid">
      </div>
      <div class="item">
        <img src="img/mobile2.svg" alt="mobile2" class="img-fluid">
      </div>
      <div class="item">
        <img src="img/mobile3.svg" alt="mobile3" class="img-fluid">
      </div>
      <div class="item">
        <img src="img/mobile4.svg" alt="mobile4" class="img-fluid">
      </div>
      <div class="item">
        <img src="img/mobile5.svg" alt="mobile5" class="img-fluid">
      </div>
      <div class="item">
        <img src="img/mobile6.svg" alt="mobile6" class="img-fluid">
      </div>
    </div>

    <!--- Carousel Section Ends Here -->
  

    <!--- A Second One Colum Section Starts Here -->
    <!-- <div class="container">
      <div class="row text-left reduce-width-four">
          <div class="col-12">
              <h5 class="display-4">Coming Soon!</h5>
          </div>
      </div>
    </div> -->
    <!--- A Second One Colum Section Ends Here -->

    <!--- Four Column Section Starts Here-->
                    
    <div class="container ">
      <div class="row text-center d-flex justify-content-left align-items-left reduce-width-four">
         <div class="col-4">
          <img src="img/mobile1.svg" alt="">
        <div class="bg-shadow"></div>
        </div>
        <div class="col-8">
          <div class="footer-coming-soon col-12">
            <div class="row footer-row-two">
                <h5 class="h5-coming-soon">Coming Soon!</h5>
           </div>
        </div>
        <div class="col-8">
          <div class="row footer-row">
          <div class="col-sm-3 col-3">
              <div class="circle">
                <span id="days">120</span>
              </div> 
              <div id="sub-days">
                Days
              </div>
          </div>
          <div class="col-sm-3 col-3">
              <div class="circle">
                <span id="hours">48</span>
              </div> 
              <div id="sub-days">
                Hours
              </div>
          </div>
          <div class="col-sm-3 col-3">
              <div class="circle">
                <span id="mins">30</span>
              </div> 
              <div id="sub-days">
                Minutes
              </div>
          </div>
          <div class="col-sm-3 col-3">
              <div class="circle">
                <span id="secs">50</span>
              </div> 
              <div id="sub-days">
                Seconds
            </div>
          </div>
              <div class="row text-left reduce-width-four">
                <div class="col-12">
                    <p class="footer-bottom-text">Get To Know When The Lituation Begins.</p>
                </div>            
                <?php if(isset($_SESSION['status'])){
                    echo "<div class='alert alert-success'>'".$_SESSION['status']."'</div>";
                } else if(isset($_SESSION['error'])) {
                    echo "<div class='alert alert-danger'>'".$_SESSION['status']."'</div>";
                } ?>
                <form class="contact-form" action="" method="post">
                    <div class="form-group mx-auto input-group">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="email" name="email" class="form-control second" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" style="background-color: white;" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        <div class="lastBtn">
                          <button type="submit" name="submit" class="btn btn-success-second">Get Me Lit!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
    <!--- Four Column Section Ends Here-->

      
  <!-- Footer -->
  <footer class="footer container-fluid ml-auto">
    <img src="img/facebook.svg" alt="">
    <img src="img/intsagram.svg" alt="intsagram">
    <img src="img/twitter.svg" alt="twitter">
  </footer>

  <script src="js/bootstrap-js/popper.js"></script>
  <script src="js/bootstrap-js/jquery.js"></script>
  <script src="js/bootstrap-js/bootstrap.js"></script>
  <script src="OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
  <script src="OwlCarousel/dist/owl.carousel.js"></script>
  <script src="js/custom-js/get-lit.js"></script>
  <script src="assets/aos/dist/aos.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script>
      AOS.init();
  </script>
  <script type="text/javascript">
    $(document).scroll(function(){
      $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script src="assets/lib/typed.js" type="text/javascript"></script>
  <script src="assets/assets/demos.js"></script>

  <script>
    var typed = new Typed("#typed", {
  stringsElement: '#typed-strings',
  typeSpeed: 55,
  backSpeed: 20,
  fadeOut: true,
  showCursor: true,
  loop: true,
  onBegin: function(self) { prettyLog('onBegin ' + self) },
  onComplete: function(self) { prettyLog('onCmplete ' + self) },
  preStringTyped: function(pos, self) { prettyLog('preStringTyped ' + pos + ' ' + self); },
  onStringTyped: function(pos, self) { prettyLog('onStringTyped ' + pos + ' ' + self) },
  onLastStringBackspaced: function(self) { prettyLog('onLastStringBackspaced ' + self) },
  onTypingPaused: function(pos, self) { prettyLog('onTypingPaused ' + pos + ' ' + self) },
  onTypingResumed: function(pos, self) { prettyLog('onTypingResumed ' + pos + ' ' + self) },
  onReset: function(self) { prettyLog('onReset ' + self) },
  onStop: function(pos, self) { prettyLog('onStop ' + pos + ' ' + self) },
  onStart: function(pos, self) { prettyLog('onStart ' + pos + ' ' + self) },
  onDestroy: function(self) { prettyLog('onDestroy ' + self) }
});
  </script>

</body>

</html>

