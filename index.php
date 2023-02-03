<?php
include('database_connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
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
<section class="w3l-cover-3">
		<div class="cover top-bottom">
			<div class="container">
				<div class="middle-section text-center">
					<div class="section-width">
						<!--<p>It's great to be home!</p>-->
						<h2>Welcome to Dream Property Dealers</h2>
						<!--<div class="most-searches">-->
						<!--	<h4>Most Searches</h4>-->
						<!--	<ul>-->
						<!--		<li><a href="#link">Villa</a></li>-->
						<!--		<li><a href="#link">Apartment</a></li>-->
						<!--		<li><a href="#link">Private house</a></li>-->
						<!--	</ul>-->
						<!--</div>-->
						<!--<form action="#" class="w3l-cover-3-gd" method="GET">-->
						<!--	<input type="search" name="text" placeholder="Enter keywords" required>-->
						<!--	<span class="input-group-btn">-->
						<!--		<select class="btn btn-default" name="ext" required>-->
						<!--			<option selected="">Office</option>-->
						<!--			<option>Villa</option>-->
						<!--			<option>Apartment</option>-->
						<!--			<option>Private house</option>-->
						<!--			<option>Building</option>-->
						<!--			<option>Shop</option>-->
						<!--			<option>Social housing</option>-->
						<!--			<option>Town house</option>-->
						<!--		</select>-->
						<!--	</span>-->
						<!--	<span class="input-group-btn">-->
						<!--		<select class="btn btn-default" name="ext" required>-->
						<!--			<option selected="">Select Country</option>-->
						<!--			<option>Australia</option>-->
						<!--			<option>London</option>-->
						<!--			<option>India</option>-->
						<!--			<option>Bangladesh</option>-->
						<!--			<option>Saudi Arabia</option>-->
						<!--			<option>America</option>-->
						<!--			<option>Srilanka</option>-->
						<!--		</select>-->
						<!--	</span>-->
						<!--	<button type="submit" class="btn-primary">Search</button>-->
						<!--</form>-->
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading text-center mx-auto">
                <h3 class="title-big">Our Properties</h3>
            </div>
            <div class="row pt-md-5 pt-4">
                <?php
                
                $e="SELECT * FROM `property` ORDER BY `p_id` DESC LIMIT 0,6";
                $d=$con->query($e);
                $au="0";
                while($R=$d->fetch_assoc()){ 
                    
                ?>
                <div class="col-lg-4 col-md-6 mt-3">
                    <a href="propertyDetail.php?id=<?php echo $R[p_id]?>">
                        <div class="box16">
                            <!--<div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                            <img class="img-fluid" src="admin/ibo_panel/production/images/<?php echo $R[p_image];?>" alt="" style="height:300px;width:100%;">
                            <div class="box-content">
                                <h3 class="title"><?php echo '₹'.$R[p_price];?></h3>
                                <span class="post"><?php echo $R[p_address].",".$R[p_city].",".$R[p_state].",".$R[p_country];?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                }
                ?>
                
                <!--<div class="col-lg-4 col-md-6 mt-md-0 mt-4">-->
                <!--    <a href="propertyDetail.php">-->
                <!--        <div class="box16">-->
                            <!--<div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                <!--            <img class="img-fluid" src="assets/images/p2.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title">₹37 Lakh</h3>-->
                <!--                <span class="post">Rajwada Indore,M.P ,India</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-6 mt-lg-0 pt-lg-0 mt-4 pt-md-2">-->
                <!--    <a href="propertyDetail.php">-->
                <!--        <div class="box16">-->
                            <!--<div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                <!--            <img class="img-fluid" src="assets/images/p3.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title">₹41 Lakh</h3>-->
                <!--                <span class="post">Gwalior , M.P ,India</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-6 mt-4 pt-md-2">-->
                <!--    <a href="property-single.html">-->
                <!--        <div class="box16">-->
                <!--            <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                <!--            <img class="img-fluid" src="assets/images/p4.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title">$19,00,000</h3>-->
                <!--                <span class="post">51 Merrick Way, Coral Gables, USA</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-6 mt-4 pt-md-2">-->
                <!--    <a href="property-single.html">-->
                <!--        <div class="box16">-->
                <!--            <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                <!--            <img class="img-fluid" src="assets/images/p5.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title">$26,00,000</h3>-->
                <!--                <span class="post">51 Merrick Way, Coral Gables, USA</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-4 col-md-6 mt-4 pt-md-2">-->
                <!--    <a href="property-single.html">-->
                <!--        <div class="box16">-->
                <!--            <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>-->
                <!--            <img class="img-fluid" src="assets/images/p6.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title">$34,00,000</h3>-->
                <!--                <span class="post">51 Merrick Way, Coral Gables, USA</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>
<section class="w3l-index3" id="about">
    
<!-- /bottom-grids-->
<section class="w3l-bottom-grids py-5" id="steps">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-home"></span>
                    <h4><a href="allProperty.php" class="title-head">Buy a Plot</a></h4>
                    <p>“Home is the starting place of love, hope and dreams.” “The magic thing about home is that it feels good to leave, and it feels even better to come back.” </p>
                    <!--<a href="allProperty.php" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-home"></span>
                    <h4><a href="allProperty.php" class="title-head">Buy a Property </a></h4>
                    <p>“Home is where love resides, memories are created, friends always belong, and laughter never ends.” “A house is made of bricks and beams.</p>
                    <!--<a href="allProperty.php" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-building-o"></span>
                    <h4><a href="allProperty.php" class="title-head">Buy a Home</a></h4>
                    <p>In this home… We do second chances. We do real. We do mistakes. We do I’m sorrys. We do loud really well. We do hugs. We do together best of all.</p>
                    <!--<a href="allProperty.php" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->
<!--<section class="locations-1 popular" id="locations">-->
<!--    <div class="locations py-5">-->
<!--        <div class="container py-lg-5 py-md-4">-->
<!--            <div class="heading text-center mx-auto">-->
<!--                <h6 class="title-small">Explore cities</h6>-->
<!--                <h3 class="title-big">Popular Locations</h3>-->
<!--            </div>-->
<!--            <div class="row pt-5">-->
<!--                <div class="col-lg-3 col-md-4 col-6">-->
<!--                    <a href="allProperty.php">-->
<!--                        <div class="box16">-->
<!--                            <img class="img-fluid" src="assets/images/img1.jpg" alt="" style="height:200px;">-->
<!--                            <div class="box-content">-->
<!--                                <h3 class="title mb-1">Indore</h3>-->
                                <!--<span class="post">4 listings</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-4 col-6">-->
<!--                    <a href="allProperty.php">-->
<!--                        <div class="box16">-->
<!--                            <img class="img-fluid" src="assets/images/img2.jpg" alt="" style="height:200px;">-->
<!--                            <div class="box-content">-->
<!--                                <h3 class="title mb-1">Bhopal</h3>-->
                                <!--<span class="post">4 listings</span>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-4 col-6" >-->
<!--                    <a href="allProperty.php">-->
<!--                        <div class="box16">-->
<!--                            <img class="img-fluid" src="assets/images/img3.jpg" alt="" style="height:200px;">-->
<!--                            <div class="box-content">-->
<!--                                <h3 class="title mb-1">Gwalior</h3>-->
                                <!--<span class="post">4 listings</span>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-4 col-6 mt-lg-0 pt-lg-0 mt-sm-4 mt-3 pt-md-2">-->
<!--                    <a href="allProperty.php">-->
<!--                        <div class="box16">-->
<!--                            <img class="img-fluid" src="assets/images/img4.jpg" alt="" style="height:200px;">-->
<!--                            <div class="box-content">-->
<!--                                <h3 class="title mb-1">Ujjain</h3>-->
                                <!--<span class="post">4 listings</span>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
                <!--<div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">-->
                <!--    <a href="#url">-->
                <!--        <div class="box16">-->
                <!--            <img class="img-fluid" src="assets/images/p5.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title mb-1">Paris</h3>-->
                <!--                <span class="post">4 listings</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">-->
                <!--    <a href="#url">-->
                <!--        <div class="box16">-->
                <!--            <img class="img-fluid" src="assets/images/p6.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title mb-1">New Jersy</h3>-->
                <!--                <span class="post">4 listings</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">-->
                <!--    <a href="#url">-->
                <!--        <div class="box16">-->
                <!--            <img class="img-fluid" src="assets/images/p7.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title mb-1">France</h3>-->
                <!--                <span class="post">4 listings</span>-->

                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
                <!--<div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">-->
                <!--    <a href="#url">-->
                <!--        <div class="box16">-->
                <!--            <img class="img-fluid" src="assets/images/p8.jpg" alt="">-->
                <!--            <div class="box-content">-->
                <!--                <h3 class="title mb-1">Newyork</h3>-->
                <!--                <span class="post">4 listings</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="w3l-index3" id="about">
    <!--<div class="midd-w3 py-5">-->
    <!--    <div class="container pb-lg-5 pb-md-4 pb-2">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-5 pr-lg-0">-->
    <!--                <div class="w3l-left-img1">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-7 pl-lg-0">-->
    <!--                <div class="w3l-right-info">-->
    <!--                    <h6 class="title-small">Our clients</h6>-->
    <!--                    <div class="client-grid">-->
    <!--                        <div class="client-title">-->
    <!--                            <h3 class="title-big">We value client relationships</h3>-->
    <!--                        </div>-->
    <!--                        <div class="clients-info">-->
    <!--                            <h3 class="title-big">45,200</h3>-->
    <!--                            <p>Satisfied customers</p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="w3l-clients" id="testimonials">-->
    <!--                        <div id="owl-demo1" class="owl-carousel owl-theme mt-4 pt-2 mb-4">-->
    <!--                            <div class="item">-->
    <!--                                <div class="testimonial-content">-->
    <!--                                    <div class="testimonial">-->
    <!--                                        <div class="testi-des">-->
    <!--                                            <div class="peopl align-self">-->
    <!--                                                <h4>John wilson</h4>-->
    <!--                                                <p class="indentity">Communication executive</p>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <blockquote>-->
    <!--                                            <q>OMG! I cannot believe that I have got a property new private house after-->
    <!--                                                getting villa. It was very comfortable. I can't say enough about Real Estate</q>-->
    <!--                                        </blockquote>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="item">-->
    <!--                                <div class="testimonial-content">-->
    <!--                                    <div class="testimonial">-->
    <!--                                        <div class="testi-des">-->
    <!--                                            <div class="peopl align-self">-->
    <!--                                                <h4>Julia sakura</h4>-->
    <!--                                                <p class="indentity">Digital Marketer</p>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <blockquote>-->
    <!--                                            <q>OMG! I cannot believe that I have got a property new private house after-->
    <!--                                                getting villa. It was very comfortable. I can't say enough about Real Estate</q>-->
    <!--                                        </blockquote>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="item">-->
    <!--                                <div class="testimonial-content">-->
    <!--                                    <div class="testimonial">-->
    <!--                                        <div class="testi-des">-->
    <!--                                            <div class="peopl align-self">-->
    <!--                                                <h4>John wilson</h4>-->
    <!--                                                <p class="indentity">Web Developer</p>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <blockquote>-->
    <!--                                            <q>OMG! I cannot believe that I have got a property new private house after-->
    <!--                                                getting villa. It was very comfortable. I can't say enough about Real Estate</q>-->
    <!--                                        </blockquote>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="item">-->
    <!--                                <div class="testimonial-content">-->
    <!--                                    <div class="testimonial">-->
    <!--                                        <div class="testi-des">-->
    <!--                                            <div class="peopl align-self">-->
    <!--                                                <h4>Julia sakura</h4>-->
    <!--                                                <p class="indentity">Digital Marketer</p>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <blockquote>-->
    <!--                                            <q>OMG! I cannot believe that I have got a property new private house after-->
    <!--                                                getting villa. It was very comfortable. I can't say enough about Real Estate</q>-->
    <!--                                        </blockquote>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <a href="#agents" class="btn btn-style btn-primary mt-5">Contact our agents</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

<!--  News section -->
<!--<div class="w3l-news" id="news">-->
<!--    <section id="grids5-block" class="py-5">-->
<!--        <div class="container py-lg-5 py-md-4 py-2">-->
<!--            <h3 class="title-big text-center">Our Clients Reviews</h3>-->
<!--            <div class="row mt-lg-5 mt-4 pt-3">-->
<!--                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-4">-->
<!--                    <div class="grids5-info">-->
<!--                        <span class="posted-date">-->
<!--                            <a href="#blog-single">-->
<!--                                <span class="small">2022</span>-->
<!--                                <span class="big">16</span>-->
<!--                                <span class="small">October</span>-->
<!--                            </a>-->
<!--                        </span>-->
<!--                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/p1.jpg" alt=""-->
<!--                                class="img-fluid news-image" /></a>-->
<!--                        <div class="blog-info">-->
<!--                            <a href="#category" class="category">Harshit Soni</a>-->
<!--                            <h4><a href="#blog-single">Amazing Place to Own a House in away from City Crowd and With All Amenities</a></h4>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">-->
<!--                    <div class="grids5-info">-->
<!--                        <span class="posted-date">-->
<!--                            <a href="#blog-single">-->
<!--                                <span class="small">2022</span>-->
<!--                                <span class="big">19</span>-->
<!--                                <span class="small">October</span>-->
<!--                            </a>-->
<!--                        </span>-->
<!--                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/p2.jpg" alt=""-->
<!--                                class="img-fluid news-image" /></a>-->
<!--                        <div class="blog-info">-->
<!--                            <a href="#category" class="category">Dr. Pushpendra Sengar</a>-->
<!--                            <h4><a href="#blog-single">I was visited at First time with My brother. I am very happy to watch a Lavish Life Style with Minimum Expenses. </a></h4>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">-->
<!--                    <div class="grids5-info">-->
<!--                        <span class="posted-date">-->
<!--                            <a href="#blog-single">-->
<!--                                <span class="small">2022</span>-->
<!--                                <span class="big">20</span>-->
<!--                                <span class="small">October</span>-->
<!--                            </a>-->
<!--                        </span>-->
<!--                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/p3.jpg" alt=""-->
<!--                                class="img-fluid news-image" /></a>-->
<!--                        <div class="blog-info">-->
<!--                            <a href="#category" class="category">Satendra katare</a>-->
<!--                            <h4><a href="#blog-single">It’s My Dream To Be Part Of HG Emerald. As a Residing Member, By purchase a 2 bhk. Because Best Township, Best Landscaping, Best layout, Best Construction Quality, And Best Neibhour Residing There.</a></h4>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</div>-->
<!--  //News section -->

 <!-- footers 20 -->
 <?php
 include('include/footer.php');
 ?>
 <!-- footers 20 -->
 

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