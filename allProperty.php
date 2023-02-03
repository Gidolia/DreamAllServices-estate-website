<?php
include('database_connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Property</title>

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>All Properties</li>
        </ul>
    </div>
</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
        <?php
        $hg="SELECT * FROM `property` ";
        $hh=$con->query($hg);
        while($val=$hh->fetch_assoc()){
        ?>
                <div class="col-lg-4 col-md-6 listing-img">
                    <a href="propertyDetail.php?id=<?php echo $val[p_id];?>">
                        <div class="box16">
                            <div class="rentext-listing-category">
                                <!--<a href="contact.php"><span>Buy</span></a>-->
                                <!--<a href="contact.php"><span>Sale</span></a></span><a href="propertyDetail.php"><span>View Detail</span></a>-->
                            </div>
                            <img class="img-fluid" src="admin/ibo_panel/production/images/<?php echo $val[p_image];?>" alt="" style="height:300px;width:100%;">
                            <div class="box-content">
                                <h3 class="title"><?php echo "₹".$val[p_price];?></h3>
                            </div>
                        </div>
                    </a>
                    <div class="listing-details blog-details align-self">
                        <h4 class="user_title agent">
                            <a href="propertyDetail"><?php echo $val[p_name];?></a>
                        </h4>
                        <p class="user_position"><?php echo $val[p_address];?> , <?php echo $val[p_city];?> , <?php echo $val[p_state];?> , <?php echo $val[p_country];?></p>
                        <ul class="mt-3 estate-info">
                            <!--<li><span class="fa fa-bed"></span> 1 Bed</li>-->
                            <!--<li><span class="fa fa-shower"></span> 2 Baths</li>-->
                            <li><span class="fa fa-share-square-o"></span> <?php echo $val[p_area];?></li>
                        </ul>
                        
                    </div>
                </div>
        <?php
        }
        ?>
                
                
            </div>

        </div>
    </div>
</section>
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