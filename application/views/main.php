<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EcoCycle</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets-main/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets-main/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets-main/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-main/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-main/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>assets-main/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?=base_url()?>assets-main/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?=base_url()?>assets-main/img/logo.png" alt=""> -->
        <h1 class="sitename"><span>e</span>Startup</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Events</a></li>
          <!-- <li><a href="#features">Features</a></li> -->
          <!-- <li><a href="#pricing">Pricing</a></li> -->
          <li><a href="<?=base_url('main/login_page')?>">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>eStartup</h2>
            <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            <div class="d-flex">
              <a href="<?=base_url()?>#contact" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-search fs-4"></i><span>Find your nearest centre</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?=base_url()?>assets-main/img/hero-img.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Blog post</p>

            <? if($blogs){ ?>
            <? foreach($blogs as $blog){ ?>
            <? $blog_cat = get_ref_desc($blog['category'], 'blog_category'); ?>
            <h3><?=$blog['title']?></h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span><?=$blog_cat?></span></li>
            </ul>
            <p class="fst-italic">
              <?php echo substr($blog['content'], 0, '1000') ?>
            </p>
            
            <div align="right">
              <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
            <? } ?>
            <? } ?>
            
          </div>

          
          

          <?/*
          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <p class="who-we-are">Recent Posts</p>
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="<?=base_url()?>assets-main/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets-main/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="<?=base_url()?>assets-main/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

            

          </div>
          */?>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Events</h2>
        <div><span>Check Our</span> <span class="description-title">Events</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          
          <? if($events){ ?>
          <? foreach($events as $event){ ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3><?=$event['name']?></h3>
              </a>
              <p><?php echo substr($event['justification'], 0, '200') ?></p>

              
              <a href="#" class="stretched-link"><?=dmy($event['event_dt'])?></a>
            </div>
          </div><!-- End Service Item -->
          <? } ?>
          <? } ?>


        </div>

      </div>

    </section><!-- /Services Section -->




    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <!-- <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200"> -->
            <form action="<?=base_url('main/do_create_account')?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label>Fullname</label>
                  <input type="text" name="name" class="form-control" placeholder="" required="">
                </div>

                <div class="col-md-6 ">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="" required="">
                </div>

                <div class="col-md-12">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="" required="">
                </div>

                <div class="col-md-12">
                  <label>Register as a</label>
                  <select class="form-control" name="user_type" required>
                      <option value="">Please Select</option>
                      <option value="1">Centre Owner</option>
                      <option value="4">Participant</option>
                  </select>
                </div>

                 <div class="col-md-12">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="" required="">
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <!-- <div class="error-message"></div> -->

                  <? if($this->session->flashdata('error')){ ?>
                  <div class="error-message d-block">
                      <?=$this->session->flashdata('error')?>
                  </div>
                  <? } ?>

                  <? if($this->session->flashdata('success')){ ?>
                  <div class="sent-message d-block">
                      <?=$this->session->flashdata('success')?>
                  </div>
                  <? } ?>

                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Create an account</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">eStartup</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets-main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets-main/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>assets-main/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>assets-main/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=base_url()?>assets-main/js/main.js"></script>

</body>

</html>