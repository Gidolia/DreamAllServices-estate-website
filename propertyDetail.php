<?php
include('database_connect.php');
$p=$con->query("SELECT * FROM `property` WHERE `p_id`='$_GET[id]'");
$pd=$p->fetch_assoc();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Property Detail</title>

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Property</li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> property Detail</li>
        </ul>
    </div>
</section>
<!--/blog-post-->
<section class="w3l-blog post-content py-5">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="inner mb-4">
            <!--<ul class="blog-single-author-date align-items-center">-->
            <!--    <li>-->
            <!--        <div class="listing-category"><a href="contact.php"><span>Buy</span></a><a href="contact.php"><span>Sale</span></a></div>-->
            <!--    </li>-->
            <!--    <li><span class="fa fa-clock-o"></span> 5 months ago</li>-->
            <!--    <li><span class="fa fa-eye"></span> 250 views</li>-->
            <!--</ul>-->
        </div>
        <div class="post-content">
            <h2 class="title-single"><?php echo $pd[p_name]?></h2>
        </div>
        <div class="blo-singl mb-4">
            <ul class="blog-single-author-date align-items-center">
                <li>
                    <p><?php echo $pd[p_address]?>, <?php echo $pd[p_city]?>, <?php echo $pd[p_state]?>,<?php echo $pd[p_country]?></p>
                </li>
                <li></li>
                <li></li>
                <li><span class="fa fa-share-square-o"></span><?php echo $pd[p_area]?></li>
            </ul>
            <ul class="share-post">
                <a href="#url" class="cost-estate m-o"><?php echo "₹",$pd[p_price]?></a>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-8 w3l-news">
                <div class="blog-single-post">
                    <div class="single-post-image mb-5">
                        <div class="owl-blog owl-carousel owl-theme">
                            <div class="item">
                                <div class="card">
                                    <img src="admin/ibo_panel/production/images/<?php echo $pd[p_image];?>" class="img-fluid radius-image" alt="image" style="height:auto;width:100%;">
                                </div>
                            </div>
                            <!--<div class="item">-->
                            <!--    <div class="card">-->
                            <!--        <img src="assets/images/p2.jpg" class="img-fluid radius-image" alt="image">-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="item">-->
                            <!--    <div class="card">-->
                            <!--        <img src="assets/images/p3.jpg" class="img-fluid radius-image" alt="image">-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="single-post-content">
                        <h3 class="post-content-title mb-3">Description</h3>
                        <p class="mb-4">
                            <?php echo $pd[p_description]?>
                        </p>
                        <!--<div class="single-bg-white">-->
                        <!--    <h3 class="post-content-title mb-4">Property detail</h3>-->
                        <!--    <ul class="details-list">-->
                        <!--        <li><strong>Property id :</strong> PRPT12345 </li>-->
                        <!--        <li><strong>Property size :</strong> 1200sqft </li>-->
                        <!--        <li><strong>Rooms :</strong> 2 </li>-->
                        <!--        <li><strong>Bedrooms :</strong> 5 </li>-->
                        <!--        <li><strong>Bathrooms :</strong> 2 </li>-->
                        <!--        <li><strong>Exterior material :</strong> Brick </li>-->
                        <!--        <li><strong>Structure type :</strong> Wood </li>-->
                        <!--        <li><strong>Garage size :</strong> 15 cars </li>-->
                        <!--        <li><strong>Garages :</strong> 15 </li>-->
                        <!--        <li><strong>Property Price :</strong> $ 750 </li>-->
                        <!--        <li><strong>Built Year :</strong> 2018 </li>-->
                        <!--        <li><strong>Avaiable from :</strong> Aug 2019 </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="single-bg-white">-->
                        <!--    <h3 class="post-content-title mb-4">Infrastructure</h3>-->
                        <!--    <ul class="details-list">-->
                        <!--        <li><strong>Air Conditioning </strong></li>-->
                        <!--        <li><strong>Buil-In Wardrobes </strong> </li>-->
                        <!--        <li><strong>Dishwasher</strong> </li>-->
                        <!--        <li><strong>Floor Coverings </strong> </li>-->
                        <!--        <li><strong>Medical / Clinic </strong> </li>-->
                        <!--        <li><strong>Fencing</strong> </li>-->
                        <!--        <li><strong>Internet and wifi </strong> </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>

                    <!--<div class="single-bg-white">-->
                    <!--    <h3 class="post-content-title mb-4">Location</h3>-->
                    <!--    <div class="agent-map">-->
                    <!--        <iframe-->
                    <!--            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"-->
                    <!--            frameborder="0" style="border:0" allowfullscreen=""></iframe>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="single-bg-white mb-0">-->
                    <!--    <h3 class="post-content-title mb-4">Video</h3>-->
                    <!--    <div class="post-content">-->
                    <!--        <iframe src="https://www.youtube.com/embed/jqP3m3ElcxA" frameborder="0"-->
                    <!--            allowfullscreen=""></iframe>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                <aside class="sidebar">

                    <!-- Popular Post Widget-->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Contact an Dealer</h4>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><img src="admin/ibo_panel/production/images/<?php echo $pd[p_image];?>" class="radius-image" alt="">
                            </figure>
                            <div class="text mb-0"><a href="">Dreamallservices
                                </a>
                                <div class="post-info">+91-83192114147</div>
                                <div class="post-info">dreamholiday79@gmail.com</div>
                            </div>
                        </article>
                        
                        <a href="contact.php?id=<?php echo $pd[p_id]?>"><button type="submit" class="btn btn-primary btn-style w-100" >Request </button></a>
                        
                    </div>


                    <!-- Popular Post Widget-->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Popular Properties</h4>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><img src="assets/images/l1.jpg" class="radius-image" alt="">
                            </figure>
                            <div class="text"><a href="#blog-single">Why we are the best in the business
                                </a>
                                <div class="post-info">Sep 09, 2020 - 2 comments</div>
                            </div>
                        </article>

                        
                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>
<!--//blog-posts-->
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