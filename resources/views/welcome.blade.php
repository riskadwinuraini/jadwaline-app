<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>landing page tracking app</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="/landing/css/line-icons.css">
    <link rel="stylesheet" href="/landing/css/owl.carousel.css">
    <link rel="stylesheet" href="/landing/css/owl.theme.css">
    <link rel="stylesheet" href="/landing/css/animate.css">
    <link rel="stylesheet" href="/landing/css/magnific-popup.css">
    <link rel="stylesheet" href="/landing/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/landing/css/main.css">
    <link rel="stylesheet" href="/landing/css/responsive.css">

  </head>

  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area-2">
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#app-features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#download">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#map-area">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row space-100">
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">LineTrack membantu anda Mempermudah tujuan Perjalanan anda.</h2>
              <p>Ada beberapa jenis perjalanan membantumu lebih bijak dalam menghadapi persoalan hidup. Sebab, disetiap perjalanan selalu menyimpan kisah,cerita atau kenangan yang berkesan untuk dijadikan pelajaran.
                karena itulah, TrackingLine bisa dijadikan solusi perjalanan kehidupan.
              </p>
              <div class="header-button">
                <a href="{{ route('admin.login')}}" class="btn btn-border-filled">Sign in</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="intro-img">
              <img src="img/intro-mobile.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- features Section Start -->
    <div id="app-features" class="section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">features</p>
          <h2 class="section-title wow fadeIn" data-wow-delay="0.2s">Amazing Features</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="content-left text-right">
              <div class="box-item left">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                <div class="text">
                  <h4>User Friendly</h4>
                  <p>TrackingLine memiliki tampilan yang nyaman dan user friendly baik di dekstop maupun mobile device sehingga mudah untuk digunakan</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lni-dashboard"></i>
                </span>
                <div class="text">
                  <h4>Professional</h4>
                  <p>TrackingLine dikerjakan oleh orang-orang yang Professional demi memenuhi kebutuhan dan kepuasaan pelanggan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="show-box">
              <img src="img/features/app.png" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="content-right text-left">
              <div class="box-item right">
                <span class="icon">
                  <i class="lni-shield"></i>
                </span>
                <div class="text">
                  <h4>Terpercaya</h4>
                  <p>TrackingLine dilengkapi dengan berbagai macam validasi untuk mencegah pengguna melakukan kesalahan dalam proses penginputan data</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lni-star-filled"></i>
                </span>
                <div class="text">
                  <h4>Pelayanan Full 24 jam</h4>
                  <p>TrackingLine memiliki kualitas yang terjamin karena dibuat dengan melalui proses yang maksimal sehingga meminimalisir terjadinya bug</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- features Section End -->
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section">
      <div class="container">
        <div class="section-header">
          <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Testimonial</p>
          <h2 class="section-title">Clients Who Loved Us</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img1.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>UIdeck</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img2.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>Tesla Motors</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="img/testimonial/img3.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>Envato Customer</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img2.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">Mark Parker</a></h2>
                      <span>GrayGris Inc.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="img/testimonial/img1.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Clients Section -->
    <div id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <!-- Row and Scroller Wrapper Starts -->
        <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="img/clients/img1.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img2.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img3.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img4.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="img/clients/img5.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Client Section End -->
    <!-- download Section Start -->
    <section id="download">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="download-thumb wow fadeInLeft" data-wow-delay="0.2s">
              <img class="img-fluid" src="img/mac.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="download-wrapper wow fadeInRight" data-wow-delay="0.2s">
              <div>
                <div class="download-text">
                  <h4>Download Our App From Store</h4>
                  <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
                </div>
                <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> From PlayStore<br></a>
                <a href="#" class="btn btn-apple"><i class="lni-apple"></i> From AppStore<br></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Map Section Start -->
    <section id="map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Section Start -->
    <section id="contact">
      <div class="contact-form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="offset-top">
              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
                  <div class="section-header">
                    <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Contact</p>
                    <h2 class="section-title">Love to Hear From You</h2>
                  </div>
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" id="message" placeholder="Message" rows="7" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button">
                          <button class="btn btn-common btn-effect" id="submit" type="submit">Submit</button>
                          <div id="msgSubmit" class="h3 hidden"></div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="img/logo.png" alt="">
              <div class="textwidget">
                <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Create a Free Account</h3>
                <ul class="menu">
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Resource</h3>
                <ul class="menu">
                  <li><a href="#">Comunnity</a></li>
                  <li><a href="#">Become a Partner</a></li>
                  <li><a href="#">Our Technology</a></li>
                  <li><a href="#">Documentation</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Support</h3>
                <ul class="menu">
                  <li><a href="#">Terms & Condition</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Copyright Start  -->
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="site-info float-left">
                  <p>&copy; 2022 - Designed by <a href="http://uideck.com" rel="nofollow">Kel.III</a></p>
                </div>
                <div class="float-right">
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/landing/js/jquery-min.js"></script>
    <script src="/landing/js/popper.min.js"></script>
    <script src="/landing/js/bootstrap.min.js"></script>
    <script src="/landing/js/owl.carousel.js"></script>
    <script src="/landing/js/jquery.mixitup.js"></script>
    <script src="/landing/js/jquery.nav.js"></script>
    <script src="/landing/js/scrolling-nav.js"></script>
    <script src="/landing/js/jquery.easing.min.js"></script>
    <script src="/landing/js/wow.js"></script>
    <script src="/landing/js/jquery.counterup.min.js"></script>
    <script src="/landing/js/nivo-lightbox.js"></script>
    <script src="/landing/js/jquery.magnific-popup.min.js"></script>
    <script src="/landing/js/waypoints.min.js"></script>
    <script src="/landing/js/form-validator.min.js"></script>
    <script src="/landing/js/contact-form-script.js"></script>
    <script src="/landing/js/main.js"></script>

  </body>
</html>
