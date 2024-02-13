<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Friends Restaurant</title>
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- <script>
            $(function(){
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();

                var minDate = year + '-' + month + '-' + day;

                $('#txtDate').attr('min', minDate);
            });
        </script> -->
        <script>
            $(function() {
                var dtToday = new Date();
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();

                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var minDate = year + '-' + month + '-' + day;

                // Calculate the date for 5 days from today
                var maxDate = new Date(dtToday);
                maxDate.setDate(dtToday.getDate() + 5);
                var maxMonth = maxDate.getMonth() + 1;
                var maxDay = maxDate.getDate();

                if (maxMonth < 10)
                    maxMonth = '0' + maxMonth.toString();
                if (maxDay < 10)
                    maxDay = '0' + maxDay.toString();

                var fiveDaysLater = maxDate.getFullYear() + '-' + maxMonth + '-' + maxDay;

                $('#txtDate').attr('min', minDate);
                $('#txtDate').attr('max', fiveDaysLater);
            });
        </script>
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
        </style>
    </head>

<body>
    @include('home.header')
    @if(session('message'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('message') }}
        </div>
    @endif


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Here you can find delecious foods</h4>
                    <h2> Friends Restaurant</h2>
                    <p>"Welcome to Friends Restaurant, where flavors unite in delightful dishes. Explore a diverse menu offering a culinary journey. Gather, eat, and enjoy good times with great food at Friends!"</p>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Right Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/bg2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>We cook delecious</h4>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>01786696775</h6>
                        </div>
                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Book Reservation Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/bg22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services">
        <div class="container">
            <div class="row">
                @foreach ($category as $item)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{url('categoryfood',$item->id)}}">
                        <img src="/category_picture/{{$item->image}}">
                        <h4>{{$item->category_name}}</h4>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>



    


    <section id="book-table">
        <div class="container">
            
            <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <div class="heading">
                        <h2>Book Your Table Now</h2>
            </div>
            <form id="form-submit" action="{{url('reservation')}}" method="POST">
            @csrf
                <div class="row mb-5">
                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                        <input name="phone" type="phone" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="Phone">
                    </div>
                    
                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                        <select required id="booktable" class="form-control form-control-lg custom-form-control" name='persons' onchange='this.form.()'>
                            <option value="">How many persons?</option>
                            <option value="">1 Person</option>
                            <option value="2">2 Persons</option>
                            <option value="3">3 Persons</option>
                            <option value="4">4 Persons</option>
                            <option value="5">5 Persons</option>
                            <option value="6">6 Persons</option>
                            <option value="7">7 Persons</option>
                            <option value="8">8 Persons</option>
                            <option value="9">9 Persons</option>
                            <option value="10">10 Persons</option>
                            <option value="11">11 Persons</option>
                            <option value="12">12 Persons</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                        <select required name='hour' id="booktable" class="form-control form-control-lg custom-form-control" onchange='this.form.()'>
                            <option value="">Select hour</option>
                            <option value="10">10:00</option>
                            <option value="12">12:00</option>
                            <option value="14">14:00</option>
                            <option value="16">16:00</option>
                            <option value="18">18:00</option>
                            <option value="20">20:00</option>
                            <option value="22">22:00</option>
                        </select>
                        
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                        <input type="date" class="form-control form-control-lg custom-form-control" id="txtDate" name="txtDate">
                    </div>
                </div>
                <button type="submit" id="form-submit" class="btn" style=" margin-top: 2%;">Book Table</button>
            </form>
        </div>
    </div>
        </div>
    </section>
    



    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Weekly Featured Food</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    @if($breakfast)
                    <div class="food-item">
                        <h2>Breakfast</h2>
                        <a style="text-decoration: none; " href="{{url('details',$breakfast->id)}}">
                        <img src="/product_picture/{{$breakfast->image}}" alt="">
                        <div class="price">{{$breakfast->discount_price}}</div>
                        <div class="text-content">
                            <h4>{{$breakfast->title}}</h4>
                            <p>{!! substr($breakfast->description, 0, 60) !!}...</p>
                        </div>
                        </a>
                    </div>
                    @else
                    <div class="food-item">
                        <h2>Breakfast</h2>
                        Please wait sometime
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    @if ($lunch)
                    <div class="food-item">
                        <h2>Lunch</h2>
                        <a style="text-decoration: none; " href="{{url('details',$lunch->id)}}">
                        <img src="/product_picture/{{$lunch->image}}" alt="">
                        <div class="price">{{$lunch->discount_price}}</div>
                        <div class="text-content">
                            <h4>{{$lunch->title}}</h4>
                            <p>{!! substr($lunch->description, 0, 60) !!}...</p>
                        </div>
                        </a>
                    </div>
                    @else
                    <div class="food-item">
                        <h2>Lunch</h2>
                        Please wait sometime
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($dinner)
                    <div class="food-item">
                        <h2>Dinner</h2>
                        <a style="text-decoration: none; " href="{{url('details',$dinner->id)}}">
                        <img src="/product_picture/{{$dinner->image}}" alt="">
                        <div class="price">{{$dinner->discount_price}}</div>
                        <div class="text-content">
                            <h4>{{$dinner->title}}</h4>
                            <p>{!! substr($dinner->description, 0, 60) !!}...</p>
                        </div>
                        </a>
                    </div>
                    @else
                    <div class="food-item">
                        <h2>Dinner</h2>
                        Please wait sometime
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>



    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Our blog post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach ($blog as $blog)
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="blog_picture/{{$blog->image}}" alt="">
                        <div class="date">{{$blog->created_at}}</div>
                        <div class="right-content">
                            <h4>{!!substr($blog->title, 0, 35)!!}...</h4>
                            <span>Branding / Admin</span>
                            <p>{!!substr($blog->description, 0, 100)!!}...</p>
                            <div class="text-button">
                                <a href="{{ url('read_blog', $blog->id) }}">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                
            </div>
        </div>
    </section>



    <section class="sign-up">
        
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