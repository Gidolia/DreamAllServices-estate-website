<?php
include('database_connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Us</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<!--header-->
<?php 
include('include/header.php');
?>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 pt-5" id="contact">
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h5 class="mb-2">Get in touch</h5>
                            <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                            <form  method="post" >
                                <div class="form-grid">
                                    <div class="input-field">
                                        <input type="text" name="name" id="w3lName" placeholder="Your Name"
                                            required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="mob" id="w3lName" placeholder="Your Mobile number"
                                            required="">
                                    </div>
                                </div>
                                <div class="input-field mt-4">
                                    <div class="input-field">
                                        <input type="email" name="email" id="w3lName" placeholder="Your Email"
                                            required="">
                                    </div>
                                </div>
                                <div class="input-field mt-4">
                                    <textarea name="msg" id="w3lMessage" placeholder="Message"></textarea>
                                </div>
                                 
                                <button type="submit" class="btn btn-primary btn-style mt-3" name="contact">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Our Office Address</h5>
                            <p><span class="fa fa-map-marker"></span>Dream Property Dealers Gwalior , M.P </p>

                            <h5 class="mt-4 pt-lg-3">Phone informatiom</h5>
                            <p><span class="fa fa-mobile"></span> <strong>Phone :</strong>
                                <a href=""> +91-8319214147</a></p>

                            <!--<p><span class="fa fa-phone"></span> <strong>Tel :</strong>-->
                            <!--    <a href=""> 0755-353535</a></p>-->

                            <p> <span class="fa fa-envelope"></span> <strong>Email :</strong>
                                <a href="mailto:dreamholiday79@gmail.com"> dreamholiday79@gmail.com</a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="map mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<?php
   if(isset($_POST['contact'])){
            if($_GET[id]!="0"){
                $vl=$_GET[id];
            }else{
                $vl=$_GET[id];
            }
          $qry="INSERT INTO `contact`(`c_id`,`p_id`, `name`, `mobile`, `email`,`message`, `date`, `time`) VALUES (NULL,'$vl','$_POST[name]','$_POST[mob]','$_POST[email]','$_POST[msg]','$date','$time');";
          if($con->query($qry)===TRUE){
              echo"<script>alert('Contacted Successfully ! Dealer Will Contact You Soon !! Thank You');location.href='contact.php';</script>";
          }else{
              echo"<script>alert('Contacted Fail! Try Again);location.href='contact.php';</script>";
          }
      }
      
?>

<!-- //contacts -->
 <!-- footers 20 -->
 <?php 
include('include/footer.php');
?>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>