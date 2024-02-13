<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>details Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/4c44cda4ea.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="home/css/style.css">
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
      .breadcrumb-item+.breadcrumb-item::before {
    content: ">"
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .1rem 0rem !important;
    margin-bottom: 0rem;
    list-style: none;
    background-color: #ffffff;
    border-radius: .25rem
}

.single_product {
    padding-top: 66px;
    padding-bottom: 140px;
    background-color: #e5e5e5;
    margin-top: 0px;
    padding: 17px
}

.product_name {
    font-size: 20px;
    font-weight: 400;
    margin-top: 0px
}

.badge {
    display: inline-block;
    padding: 0.50em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.product-rating {
    margin-top: 10px
}

.rating-review {
    color: #5b5b5b
}

.product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 9px;
    clear: left
}

.product_discount {
    display: inline-block;
    font-size: 17px;
    font-weight: 300;
    margin-top: 9px;
    clear: left;
    margin-left: 10px;
    color: red
}

.product_saved {
    display: inline-block;
    font-size: 15px;
    font-weight: 200;
    color: #999999;
    clear: left
}

.singleline {
    margin-top: 1rem;
    margin-bottom: .40rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.product_info {
    color: #4d4d4d;
    display: inline-block
}

.product_options {
    margin-bottom: 10px
}

.product_description {
    padding-left: 0px
}

.product_quantity {
    width: 104px;
    height: 47px;
    border: solid 1px #e5e5e5;
    border-radius: 3px;
    overflow: hidden;
    padding-left: 8px;
    padding-top: -4px;
    padding-bottom: 44px;
    float: left;
    margin-right: 22px;
    margin-bottom: 11px
}

.order_info {
    margin-top: 18px
}

.shop-button {
    height: 47px
}

.product_fav i {
    line-height: 44px;
    color: #cccccc
}

.product_fav {
    display: inline-block;
    width: 52px;
    height: 46px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.br-dashed {
    border-radius: 5px;
    border: 1px dashed #dddddd;
    margin-top: 6px
}

.pr-info {
    margin-top: 2px;
    padding-left: 2px;
    margin-left: -14px;
    padding-left: 0px
}

.break-all {
    color: #5e5e5e
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

@media (max-width: 390px) {
    .product_fav {
        display: none
    }
}

.bbb_combo {
    width: 100%;
    margin-right: 7%;
    padding-top: 21px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 24px;
    border-radius: 5px;
    margin-top: 0px;
    text-align: -webkit-center
}

.bbb_combo_image {
    width: 170px;
    height: 170px;
    margin-bottom: 15px
}

.fs-10 {
    font-size: 10px
}

.step {
    background: #167af6;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 6.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 3.6em;
    margin-right: 5px;
    text-align: center;
    width: 3.6em;
    margin-top: 116px
}

.row-underline {
    content: "";
    display: block;
    border-bottom: 2px solid #3798db;
    margin: 0px 0px;
    margin-bottom: 20px;
    margin-top: 15px
}

.deal-text {
    margin-left: -10px;
    font-size: 25px;
    margin-bottom: 10px;
    color: #000;
    font-weight: 700
}

.padding-0 {
    padding-left: 0;
    padding-right: 0
}

.padding-2 {
    margin-right: 2px;
    margin-left: 2px
}

.vertical-line {
    display: inline-block;
    border-left: 3px solid #167af6;
    margin: 0 10px;
    height: 364px;
    margin-top: 4px
}

.p-rating {
    color: green
}

.combo-pricing-item {
    display: flex;
    flex-direction: column
}

.boxo-pricing-items {
    display: inline-flex
}

.combo-plus {
    margin-left: 10px;
    margin-right: 18px;
    margin-top: 10px
}

.add-both-cart-button {
    margin-left: 36px
}

.items_text {
    color: #b0b0b0
}

.combo_item_price {
    font-size: 18px
}

.p_specification {
    font-weight: 500;
    margin-left: 22px
}

.mt-10 {
    margin-top: 10px
}

@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');





/* div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
} */

ul {
    list-style: none;
    margin-bottom: 0px
}

.single_product {
    padding-top: 16px;
    padding-bottom: 140px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

.image_list li:last-child {
    margin-bottom: 0
}

.image_list li:hover {
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3)
}

.image_list li img {
    max-width: 100%
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_selected img {
    max-width: 100%
}

.product_category {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5)
}

.product_rating {
    margin-top: 7px
}

.product_rating i {
    margin-right: 4px
}

.product_rating i::before {
    font-size: 13px
}

.product_text {
    margin-top: 27px
}

.product_text p:last-child {
    margin-bottom: 0px
}

.order_info {
    margin-top: 16px
}

.product_quantity {
    width: 182px;
    height: 50px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    overflow: hidden;
    padding-left: 25px;
    float: left;
    margin-right: 30px
}

.product_quantity span {
    display: block;
    height: 50px;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    line-height: 50px;
    float: left
}

.product_quantity input {
    display: block;
    width: 30px;
    height: 50px;
    border: none;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    text-align: left;
    padding-left: 9px;
    line-height: 50px;
    float: left
}

.quantity_buttons {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 29px;
    border-left: solid 1px #e5e5e5
}

.quantity_inc,
.quantity_dec {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 50%;
    cursor: pointer
}

.quantity_control i {
    font-size: 11px;
    color: rgba(0, 0, 0, 0.3);
    pointer-events: none
}

.quantity_control:active {
    border: solid 1px rgba(14, 140, 228, 0.2)
}

.quantity_inc {
    padding-bottom: 2px;
    justify-content: flex-end;
    border-top-right-radius: 5px
}

.quantity_dec {
    padding-top: 2px;
    justify-content: flex-start;
    border-bottom-right-radius: 5px
}
.descrip {
    border:none; 
    border-radius:10px; 
    padding:15px;
    min-height:30px; 
    min-width: 120px;
    font-size: 26px;
    font-weight: bolder;
  }
  .hidden {
        display: none;
      }

      .thumb-wrapper .img-box {
        position: relative;
        overflow: hidden;
      }

      .thumb-wrapper .img-box img {
        transition: transform 0.3s ease;
      }

      .thumb-wrapper .img-box:hover img {
        transform: scale(1.1);
      }
      .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.overlay:hover {
  opacity: 1;
  cursor: pointer;
}

/* .modal {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.9);
} */

/* .modal-content {
  margin: auto;
  display: block;
  max-width: 40%;
  
} */
.btn-size {
  width: 130px; /* Adjust the width to your desired size */
   /* Adjust the height to your desired size */
}

.close {
  color: #fff;
  position: absolute;
  top: 15px;
  right: 35px;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.rating-css div {
    color: #ffe400;
    font-size: 30px;
    font-family: sans-serif;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    padding: 20px 0;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 60px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

/* End of Star Rating */
  .checked{
  color: #ffe400;
  }
  .container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  .navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

  /* .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
} */

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

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
    <script>
        function showContent(sectionId) {
            var sections = document.getElementsByClassName('content');
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.add('hidden');
            }
            var section = document.getElementById(sectionId);
            section.classList.remove('hidden');
            window.scrollTo({ top: section.offsetTop, behavior: 'smooth' });
        }
      </script>
  </head>
  <body>

   <div style="padding: 2%; background:#eaf0ff;">
    <ul class="nav justify-content-center">
        
        <li class="nav-item">
          <a class="nav-link " style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{url('our_menu')}}">OUR MENUS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{url('blog')}}">BLOG ENTRIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{url('contact')}}">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{url('show_cart')}}">MY CART<span class="badge rounded-pill bg-danger" style="background-color: #eb4569;
            color: #fff;
            padding: 3px 8px;
            border-radius: 10px;
            position: absolute;
            ">
            {{$carts}}
          </span></a>
        </li>
        @if (Route::has('login'))
                  
                    @auth
                    
                    
                    <div class="dropdown">
                        <li class="nav-item" style="text-transform: uppercase;">
                            <span class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif; ">{{$username}}</span> </li>
                        <div class="dropdown-content">
                        <a href="{{ route('profile.show') }}">Profile</a>
                        <a href="{{url('reservation')}}">My Reservation</a>
                        <a href="{{url('order')}}">My Order</a>
                        <a href="{{url('address')}}">My Address</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                LOGOUT
                            </a>
                        </form>
                        </div>
                      </div>
        @else
            <li class="nav-item" style="text-transform: uppercase;"><a class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item" style="text-transform: uppercase;"><a class="nav-link" style="color:#363e50; font-family: "Roboto", sans-serif;" href="{{ route('register') }}">Signup</a></li>
        @endauth
        @endif
      </ul>
   </div>

    


   @if(session('message'))
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('message') }}
    </div>
    @endif

   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <form action="{{url('add_rating')}}" method="POST">
           @csrf
           <input type="hidden" name="product_id" value="{{$product->id}}">
           <input type="hidden" name="product_name" value="{{$title}}">
         <div class="modal-header">
           <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <div class="rating-css">
             <div class="star-icon">
                 <input type="radio" value="1" name="product_rating" checked id="rating1">
                 <label for="rating1" class="fa fa-star"></label>
                 <input type="radio" value="2" name="product_rating" id="rating2">
                 <label for="rating2" class="fa fa-star"></label>
                 <input type="radio" value="3" name="product_rating" id="rating3">
                 <label for="rating3" class="fa fa-star"></label>
                 <input type="radio" value="4" name="product_rating" id="rating4">
                 <label for="rating4" class="fa fa-star"></label>
                 <input type="radio" value="5" name="product_rating" id="rating5">
                 <label for="rating5" class="fa fa-star"></label>
             </div>
         </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-outline-primary">Submit</button>
         </div>
         </form>
       </div>
       
     </div>
   </div>



<div class="super_container">

<div class="single_product">
<div class="container-fluid" style=" background-color: #fff; padding: 11px;">
   <div class="row">
     {{-- @foreach ($product as $product) --}}
         
     
       <div class="col-lg-2 order-lg-1 order-2">
           <ul class="image_list">
               <li data-image="/product_picture/{{$product_image}}"><img style="padding: 25px;" src="/product_picture/{{$product_image}}" alt=""></li>
               
           </ul>
       </div>
       <div class="col-lg-4 order-lg-2 order-1">
           <div class="image_selected"><img style="padding: 14px;" src="/product_picture/{{$product_image}}" alt=""></div>
       </div>
       <div class="col-lg-6 order-3">
           <div class="product_description">
               <nav>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="#">Home</a></li>
                       <li class="breadcrumb-item"><a href="#">Food</a></li>
                       <li class="breadcrumb-item active">Details</li>
                   </ol>
               </nav>
               <div class="product_name">{{$title}}</div>
               @php $ratenum = number_format($rating_value) @endphp
                   <div class="rating">
                     @for($i=1; $i<=$ratenum; $i++)
                     <i class="fa fa-star checked"></i>
                     @endfor
                     @for($j = $ratenum+1; $j <= 5; $j++)
                     <i class="fa fa-star"></i>
                     @endfor
                     <span>{{$ratings->count() }} Ratings</span>
                   </div>
               <div> <span class="product_price"> {{$product->discount_price}} tk</span> <strike class="product_discount"> <span style='color:black'> {{$product->price}} tk<span> </strike> </div>
               <div> <span class="product_saved">You Saved:</span> <span style='color:black'> {{$product->price-$product->discount_price}} tk<span> </div>
               <hr class="singleline">
               <div>  <span class="product_info">We Offer Delicious Food<span><br> <span class="product_info">30 minutes to deliver<span><br> <span class="product_info">Easy return policy<span><br></div>
               <div>
                   
                   {{-- <div class="row" style="margin-top: 15px;">
                       <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">RAM Options</span><br> <button class="btn btn-primary btn-sm">4 GB</button> <button class="btn btn-primary btn-sm">8 GB</button> <button class="btn btn-primary btn-sm">16 GB</button> </div>
                       <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Storage Options</span><br> <button class="btn btn-primary btn-sm">500 GB</button> <button class="btn btn-primary btn-sm">1 TB</button> </div>
                   </div> --}}
               </div>
               <hr class="singleline">
               <div class="order_info d-flex flex-row">
                   <form action="#">
               </div>
               <div class="row">
                 

                   <div class="col-xs-6"> <a href="{{url('add_cart',$product->id)}}" class="btn btn-primary btn-size">Add to Cart</a>
                     <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                         Rate this Product
                       </button>
                       
                   </div>
               </div>
           </div>
       </div>


       {{-- @endforeach --}}
   </div>
   <div class="row row-underline">
       <div class="col-md-6"> <span class=" deal-text">Suggest For You</span> </div>
       <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
       
   </div>



   <div class="container mt-5">


     <div class="row">
         @foreach ($suggest as $suggest)
             
        

         <div class="col-sm-4 my-1 ">
             <div class="thumb-wrapper" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
               <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
               <div class="img-box" style="padding-top: 10px;">
                 <img src="/product_picture/{{$suggest->image}}" class="img-fluid" style="display: block; margin: 0 auto; text-align: center; max-width: 100%; height: 100px;" alt="">	
                 <div class="overlay">
                   <a href="#" class="btn btn-primary" onclick="showFullImage(event)">View Full Image</a>
                 </div>								
               </div>
               <div class="thumb-content mt-2">
                 <h4 style="text-align: center; min-height: 57px; font-size: 1.5rem !important;">{{$suggest->title}}</h4>									
                 <p class="item-price" style="text-align: center"><strike>{{$suggest->price}}tk</strike> <b>{{$suggest->discount_price}}tk</b></p>
                 <div style="text-align: center; padding-bottom: 10px;">
                     <a href="{{url('add_cart',$suggest->id)}}" class="btn btn-primary btn-size">Add to Cart</a>
                     <a href="{{url('details',$suggest->id)}}" class="btn btn-primary btn-size">Details</a>
                 </div>
               </div>						
             </div>
           </div>

           @endforeach
           <div id="fullImageModal" class="modal">
             <span class="close" onclick="closeFullImageModal()">&times;</span>
             <img class="modal-content" id="fullImage">
           </div>
     </div>

 </div>


   
   <div class="row row-underline">
       <div class="col-md-6"><button class="descrip" onclick="showContent('description')">Description</button>  </div>
       
       <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
   </div>
   <div id="description" class="row content">
       <div class="col-md-12">
           <table class="col-md-12">
               <tbody>
                   <tr class="row mt-10">
                       <td>{!!$product->description!!}</td>
                   </tr>
                   
               </tbody>
           </table>
       </div>
   </div>
   
</div>
</div>
</div>





    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
