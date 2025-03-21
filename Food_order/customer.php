 
<?php
include("include\dbconnect.php"); 
extract($_POST);
session_start();
$table_no=$_REQUEST['tno'];
if(isset($btn))
{
 $table_no=$_REQUEST['table_no'];
 $name=$_REQUEST['username'];
 
$password=$_REQUEST['password'];
 $_SESSION['user']=$name;
 $_SESSION['table_no']=$table_no;
 $qry="select * from customer_details where contact='$name' && password='$password'";
$result = mysqli_query($conn, $qry);
 if (mysqli_num_rows($result)) 
  {
  ?>
<script language="javascript" type="text/javascript">
alert("Login Successfully");
window.location.href="user_home.php";
</script>
<?php   
 }
 else
{
    
?>
<script language="javascript" type="text/javascript">
alert("Username /  Password Incorrect");
 
</script>
<?php 
}
$conn->close();
}
?>
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
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Customer</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Customer</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Admin</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

 

    <!-- video section -->
    <section class="w3l-index5" id="about">
        <div class="new-block py-5">
            <div class="container py-lg-5">
              <div class="middle-section text-center">
                    <div class="section-width">
                        <h3 class="title-style">Customer Login</h3>
                     
                    </div>
                 

                    <form name="form1" method="post" action="">
                      <table height="127" align="center">
                        <tr>
                          <td>Table No </td>
                          <td><input name="table_no" type="text" id="table_no" value="<?php echo $table_no;?>" placeholder="Table No" required=""></td>
                        </tr>
                        <tr>
                          <td>Contact</td>
                          <td><input type="text" name="username" placeholder="Contact" required=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><input type="password" name="password" placeholder="Password" required=""></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><span class="tp">
                            <input type="submit" name="btn" value="Login">
                          </span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><a href="customer_register.php">New User Register Here... </a></td>
                        </tr>
                      </table>
                </form>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                  
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->
 
    <!-- //testimonials section -->

    <!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
     
                <!-- copyright -->
                <div class="w3l-copyright mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <div class="row bottom-copies pt-md-5 pt-4 mt-md-5 mt-4">
                        <p class="col-lg-8 copy-footer-29">All rights reserved. Design by <a
                                href="#">
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

    <!-- owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
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
                        items: 2,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- script for tesimonials agency carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-agency").owlCarousel({
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
    <!-- //script for tesimonials agency carousel slider -->

    <!-- magnific popup -->
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
    <!-- //magnific popup -->

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