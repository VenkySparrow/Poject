<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                  <?php include('title.php');?>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                    
                       <?php include('main_menu.php');?>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- banner section -->
    <section class="w3l-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 banner-left d-flex align-items-center pl-lg-5">
                    <div>
                        <h3 class="text-white mb-4">Advanced Restaurant Food Ordering System <br>
                           </h3>
                        <p class="banner-text text-white">Open Everyday - <span>7 Am to 10 Pm</span>
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 banner-right">
                    <div class="small-images">
                        <div class="ban-grid position-relative">
                            <img src="assets/images/ban4.jpg" class="img-responsive" alt="" />
                            <div class="img-ban-sec">
                                <h5>Fast Foods</h5>
                                <a href="#" class="btn p-0">More <i class="fa fa-angle-right ml-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="ban-grid position-relative mt-4">
                            <img src="assets/images/ban2.jpg" class="img-responsive" alt="" />
                            <div class="img-ban-sec">
                                <h5>Breakfasts</h5>
                                <a href="#" class="btn p-0">More <i class="fa fa-angle-right ml-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-between align-items-center pb-lg-5">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <div class="image-box inverse position-relative">
                        <div class="image-box__static">
                            <img src="assets/images/about2.jpg" alt="" width="364" height="459">
                        </div>
                        <div class="image-box__float">
                            <img src="assets/images/about1.jpg" alt="" width="364" height="459">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-left pl-lg-5 mt-lg-0 mt-5">
                    <h3 class="title-style mb-3">The Amazing Bitros & <br>Delicious Food</h3>
                    <p class="mt-4">People these days are constantly yearningfor daily tasks to be faster and easier as a result of the rapid
advancements in many fields of technology.</p>
                    <div class="address-sec d-flex align-items-center mt-5">
                        <i class="fa fa-map-marker mr-4" aria-hidden="true"></i>
                        <h6>7th Street,kk nagar, <br>Trichy, <br>Tamilnadu.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- dishes section -->
    <section class="w3l-recipes py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 recipe-left mb-md-0 mb-5">
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2 text-white">Our Dishes</h3>
                        <p class="lead text-white">
                            The AdvancedRestaurant Food Ordering Systemintroducesacutting-edgeapproachtorevolutionizethefood
orderingprocess withinarestaurantenvironment.
                        </p>
                    </div>
                    <div class="menu-sec mt-5 pt-md-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>Tomato Toast Ricotta</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$19.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sec mt-sm-5 mt-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>Chicken Salad</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$40.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sec mt-sm-5 mt-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>The Ultimate Veggie </h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$36.50</h6>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-style-white btn-style-border mt-5" href="about.html">View More</a>
                </div>
                <div class="col-lg-6 recipe-right pl-5">
                    <img src="assets/images/image1.png" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- //dishes section -->

    <!-- grids section -->
 
    <!-- //grids section -->

    <!-- stats section -->
    <section class="w3-bottom-stats py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-7 pr-lg-5">
                    <h5 class="text-new mb-4">Hello. <br>Our structure has been present for over 36 years. <br>We
                        make
                        the best !
                    </h5>
                    <p class="mb-3">In Our proposed System, the manager is allowed to make changes to the menu, table status, and other
restaurant-related information. The chef can prepare the cuisine by viewing the order data and table number,
ensuringerror-freedelivery.
                    </p>
                  
                   
                </div>
                <div class="col-md-5 mt-md-0 mt-5">
                    <div class="counter text-center">
                        <div class="timer count-title count-number" data-to="6370" data-speed="1500"></div>
                        <p class="count-text mt-2">happy customer's</p>
                    </div>
                    <div class="counter text-center mt-5">
                        <div class="timer count-title count-number" data-to="421" data-speed="1500"></div>
                        <p class="count-text mt-2">master chef's</p>
                    </div>
                    <div class="counter text-center mt-5">
                        <div class="timer count-title count-number" data-to="7300" data-speed="1500"></div>
                        <p class="count-text mt-2">Order's Everyday</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->

    <!-- specials section -->
    <section class="w3l-portfolio-8 py-5">
        <div class="portfolio-main py-md-5 py-4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="section-heading mb-sm-5 mb-4">
                            <h3 class="title-style mb-2">Our Specials</h3>
                          
                        </div>
                    </div>
                </div>
                <div class="row galler-top">
                    <div class="col-md-4 col-sm-6 protfolio-item hover14">
                        <a href="menu.html" data-lightbox="example-set" data-title="Branding Design">
                            <figure>
                                <img src="assets/images/g1.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Noodles</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 protfolio-item hover14 mt-sm-0 mt-4">
                        <a href="menu.html" data-lightbox="example-set" data-title="Gradient Website Development">
                            <figure>
                                <img src="assets/images/g2.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Cakes</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 protfolio-item hover14 mt-md-0 mt-4">
                        <a href="menu.html" data-lightbox="example-set" data-title="Design and Development">
                            <figure>
                                <img src="assets/images/g3.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Pizzas</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 protfolio-item hover14 mt-4">
                        <a href="menu.html" data-lightbox="example-set" data-title="Magazine Content Writing">
                            <figure>
                                <img src="assets/images/g4.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Drinks</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 protfolio-item hover14 mt-4">
                        <a href="menu.html" data-lightbox="example-set" data-title="Magazine Content Writing">
                            <figure>
                                <img src="assets/images/g5.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Hamburgers</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 protfolio-item hover14 mt-4">
                        <a href="menu.html" data-lightbox="example-set" data-title="Magazine Content Writing">
                            <figure>
                                <img src="assets/images/g6.jpg" alt="product" class="img-fluid">
                                <div class="p-4">
                                    <p>Bistros</p>
                                    <a href="menu.html" class="mb-5 img-title">Meals</a>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- //specials section -->

    <!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
          
          
                <!-- copyright -->
                <div class="w3l-copyright mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <div class="row bottom-copies pt-md-5 pt-4 mt-md-5 mt-4">
                        <p class="col-lg-8 copy-footer-29">All rights reserved. Design by <a
                                href="#" >
                                Admin</a></p>

                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onClick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

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

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>