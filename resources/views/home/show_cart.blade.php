<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Friends Resturant</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/fontAwesome.css">
        <link rel="stylesheet" href="/css/hero-slider.css">
        <link rel="stylesheet" href="/css/owl-carousel.css">
        <link rel="stylesheet" href="/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>@font-face {
          font-family: 'Shopper';
          src: url('http://www.shopperfont.com/font/Shopper-Std.ttf');
      }
      
      .shopper {
        text-transform: lowercase;
        font: 2em 'Shopper', sans-serif;
        line-height: 0.5em;
        display: inline-block;
      }
      
      
      
      h1 {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 2.5em;
      }
      
      p {
        font-size: 1.5em;
        color: #8a8a8a;
      }
      
      input {
        border: 0.3em solid #bbc3c6;
        padding: 0.5em 0.3em; 
        font-size: 1.4em;
        color: #8a8a8a;
        text-align: center;
      }
      
      img {
        max-width: 9em;
        width: 100%;
        overflow: hidden; 
        margin-right: 1em;
      }
      
      a {
        text-decoration: none;
      }
      
      .containersss {
        max-width: 75em;
        width: 95%; 
        overflow: hidden;
        position: relative;
        margin: auto;
        text-align: center;
        border-radius: 0.6em;
        box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
      }
      
      .cart {
        margin: 2.5em;
        overflow: hidden;
      }
      
      .cart.is-closed {
        height: 0;
        margin-top: -2.5em;
      }
      
      .table {
        background: #ffffff;
        border-radius: 0.6em;
        overflow: hidden;
        clear: both;
        margin-bottom: 1.8em;
      }
      
      
      .layout-inline > * {
        display: inline-block;
      }
      
      .align-center {
        text-align: center;
      }
      
      .th {
        background: #f34d35;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 1.5em;
      }
      
      .tf {
        background: #f34d35;
        text-transform: uppercase;
        text-align: right;
        font-size: 1.2em;  
      }
      
      .tf p {
        color: #fff;
        font-weight: bold;
      }
      
      .col {
        padding: 1em;
        width: 12%;
      }
      
      .col-pro {
        width: 44%;
      }
      
      .col-pro > * {
        vertical-align: middle;
      }
      
      .col-qty {
        text-align: center;
        width: 17%;
      }
      
      .col-numeric p {
        font: bold 1.8em helvetica;
      }
      
      .col-total p {
        color: #12c8b1;
      }
      
      .tf .col {
        width: 20%;
      }
      
      .row > div {
        vertical-align: middle;
      }
      
      .row-bg2 {
        background: #f7f7f7;
      }
      
      .visibility-cart {
        position: absolute;
        color: #fff;
        top: 0.5em;
        right: 0.5em;
        font:  bold 2em arial;
        border: 0.16em solid #fff;
        border-radius: 2.5em;
        padding: 0 0.22em 0 0.25em ;
      }
      
      .col-qty > * {
        vertical-align: middle; 
      }
      
      .col-qty > input {
        max-width: 2.6em;
      }
      
      
      a.qty {
        width: 1em;
        line-height: 1em;
        border-radius: 2em;
        font-size: 2.5em;
        font-weight: bold;
        text-align: center;
        background: #43ace3;  
        color: #fff;
      }
      
      a.qty:hover {
        background: #3b9ac6;
      }
      
      .btn {
        padding: 10px 30px;
        border-radius: 0.3em;
        font-size: 1.4em;
        font-weight: bold;
        background: #43ace3;
        color: #fff;
        box-shadow: 0 3px 0 rgba(59,154,198, 1)
      }
      
      .btn:hover {
        box-shadow: 0 3px 0 rgba(59,154,198, 0)
      }
      
      .btn-update {
        float: right;
        margin: 0 0 1.5em 0;
      }
      
      .transition {
        transition: all 0.3s ease-in-out;
      }
      
      @media screen and ( max-width: 755px) {
        .container {
          width: 98%;
        }
        
        .col-pro {
          width: 35%;
        }
        
        .col-qty {
          width: 22%;
        }
        
        img {
          max-width: 100%;
          margin-bottom: 1em;
        }
      }
      
      @media screen and ( max-width: 591px) {
        
      } 
        </style>
    </head>

<body>
  @include('home.header')


 <div>
  <div class="containersss">
    
    <div class="cart transition is-open">
      
      
      <div class="table">
        
        <div class="layout-inline row th">
          <div class="col col-pro">Product</div>
          <div class="col col-price align-center "> 
            Price
          </div>
          <div class="col col-qty align-center">QTY</div>
          <div class="col" style="    margin-left: 6%;">Total</div>
        </div>
        @foreach ($cartItems as $cartItem)
        <div class="layout-inline row">
          <div class="col col-pro layout-inline">
            <img src="/product_picture/{{$cartItem->image}}" alt="kitten" />
            <p>{{$cartItem->product_title}}</p>
          </div>
          
          <div class="col col-price col-numeric align-center">
            <p>{{($cartItem->price)}}<span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></p>
          </div>
      
          
            
            <form action="{{url('update_quantity',$cartItem->id)}}" method="get" class="d-flex">
              
              <div class="col col-qty layout-inline" style="display: inline;">
              <button
                  type="submit"
                  value="down"
                  name="change_to"
                  class="btn btn-success"
              >
                 - 
              </button>
              <input
                  type="number"
                  value="{{$cartItem->quantity}}"
                  disabled>
              <button
                  type="submit"
                  value="up"
                  name="change_to"
                  class="btn btn-success"
              >
                  +
              </button>
            </div>
          </form>

          <div class="col col-total col-numeric"><p> {{$cartItem->subtotal}}<span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></p>
          </div>          
        </div>
      @endforeach
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
         <div class="tf">
           
           <div class="row layout-inline">
             <div class="col">
               <p>Shipping</p>
             </div>
             <div class="col"><p>30<span style="margin-right: 10%; font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></p></div>
           </div>
            <div class="row layout-inline">
             <div class="col">
               <p>Total</p>
             </div>
             <div class="col"><p>{{$total + 30}}<span style="margin-right: 10%; font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></p></div>
           </div>
         </div>         
    </div>
    @if ($cartItems->isNotEmpty()) {{-- Check if $cartItems is not empty --}}
    <a href="{{url('ordercheckout')}}" class="btn btn-update">Checkout</a>
    @endif
      {{-- <a href="{{url('ordercheckout')}}" class="btn btn-update">Checkout</a> --}}
    
  </div>
 </div>










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
    
    </script>
</body>
</html>