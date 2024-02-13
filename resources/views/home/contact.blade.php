<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>Contact page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .alert {
  padding: 20px;
  background-color: #63b558;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.about-team-content {
        margin-top: -2%;
        padding: 0 1.6rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .about-team-member {
        width: 100%;
        max-width: 24.2rem;
        margin: 5rem 1.6rem 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        line-height: 1.25;
    }

    .about-team-member-img {
        object-fit: cover;
        border-radius: 10%;
        padding: 3%;
    }

    

    .img-fluid,
    .media-object .media-figure img {
        display: block;
       
    }

    img,
    picture {
        margin: 0;
        max-width: 100%;
    }

    .justify {
        text-align: justify;
    }

        </style>
    </head>

<body>
  @include('home.header')
    <!--/.header-->
    @if(session('message'))
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('message') }}
    </div>
    @endif

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <p>"Connect with us at Friends Restaurant. Questions, reservations, or just to say hello, we're here to make your experience special."</p>
                </div>
            </div>
        </div>
    </section>

    
<!-- for profile  -->
<h1 style="text-align: center;">Meet Our Team</h1>
<div class="about-team-content">
            <div id="about_team_member_2198" class="about-team-member" style="    border-radius: 6%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="img-fluid  about-team-member-img" srcset="/banner_picture/shamim2.png" loading="lazy"
                    src="/banner_picture/shamim.jpg">
                <h3 class="mt-3">
                    <p>MD: Shamim Sikdar</p>
                </h3>

                <p>CO-Founder & CEO</p>
            </div>
            <div id="about_team_member_2303" class="about-team-member" style="    border-radius: 6%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <img class="img-fluid  about-team-member-img" srcset="/banner_picture/sojib.png" loading="lazy"
                    src="/banner_picture/shamim.jpg">
                <h3 class="mt-3 ">
                    <p class="">Shojib Hossain</p>
                </h3>

                <p class="mt-0 pt-0">CO-Founder & Chairman</p>
            </div>
</div>

<!-- end here  -->








    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Message</h2>
                    </div>
                    <form id="contact" action="{{url('send_feedback')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                                </fieldset>
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required>
                                </fieldset>
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Your phone..." required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Feedback</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-heading contact-info">
                        <h2>Contact Info</h2>
                        <p>
"Contact Friends Restaurant for a delightful culinary experience. Reach out for reservations, event bookings, or simply to share your thoughts. Our friendly team is eager to assist you. Call, email, or visit us—we look forward to welcoming you to a world of diverse and delicious flavors. Your satisfaction is our priority."<br><br><em>Contact : 01786696775<br><em>Malibagh, <br>Dhaka</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map">
        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d228.25371944126675!2d90.42166437728568!3d23.745257150643113!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1703924999567!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright All Reserved</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>Shamim & Shojib</em></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>