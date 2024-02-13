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
        <style>
          

            .card {
                border: 1px solid #ddd;
            }

            .card-header {
                background-color: #f8f9fa;
                border-bottom: 1px solid #ddd;
            }

            .card-body {
                padding: 20px;
            }

            .list-group-item {
                border: 0;
                padding: 10px 20px;
            }

            .btn-outline-success {
                color: #28a745;
                border-color: #28a745;
            }

            /* Customize your form styles as needed */
            #checkout-form {
                margin-top: 20px;
            }

            /* Customize your payment button styles */
            #pay-btn {
                background-color: #28a745;
                color: #fff;
            }

            /* Adjust the styling for the payment form as needed */
            #card-element {
                border: 1px solid #ced4da;
                padding: 10px;
                margin-bottom: 20px;
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
    </head>

<body>
  @include('home.header')
  @if(session('success'))
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('success') }}
    </div>
    @endif


    
    


  <div class="container" style="margin-top: 2%; margin-bottom: 2%;">
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3" style="text-align: center;">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products Title :
                <span> {{ $concatenatedTitlesWithQuantities}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products Price With Shipping
                <span>{{ $totalSubtotal}} <span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></span>
              </li>
              
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                  <span><strong>{{ $totalSubtotal}} <span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span> </span></strong></span>
                </div>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      
      <div class="col-md-4">
        <div class="card">
          <div class="card-header py-3 "style="text-align: center;">
            <h5 class="mb-0">Pay And Order</h5>
          </div>
          <div class="card-body">
            
            
            <form id="checkout-form" method="post" action="{{ url('/stripe/create-charge') }}">
              @csrf
          
              <input type="hidden" name="stripeToken" id="stripe-token-id">
              <input type="hidden" name="user_id" value="{{ $id }}">
              <input type="hidden" name="product_title" value="{{ $concatenatedTitlesWithQuantities }}">
              <input type="hidden" name="product_price" value="{{ $totalSubtotal}}">
          
              <label for="card-element" class="mb-5" >Payment Here</label>
              <br>
              
              <div id="card-element" class="form-control"></div>
              
              <button id="pay-btn" class="btn btn-outline-success mt-3" type="button" style="margin-top: 20px; width: 100%; padding: 7px;" onclick="createToken()">
                <span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span> {{ round(($totalSubtotal) , 2) }} Pay & Order
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card mb-4">
          <div class="card-header py-3 "style="text-align: center;">
            <h5 class="mb-0">Cash On Delivery</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong> {{ $totalSubtotal}} <span style="font-size: 18px; font-weight: bold; font-family: 'FontAwesome';">৳</span></span></strong></span>
              </li>
            </ul>
            <form id="checkout-form" method="post" action="{{url('cash_on_delivery')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{ $id }}">
                <input type="hidden" name="product_title" value="{{ $concatenatedTitlesWithQuantities }}">
                <input type="hidden" name="product_price" value="{{ $totalSubtotal}}">    
                <button id="pay-btn" class="btn btn-outline-success mt-3" type="submit" style="margin-top: 20px; width: 100%; padding: 7px;">
                    Place Order
                </button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
 
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}')
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
  
        function createToken() {
            document.getElementById("pay-btn").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
  
                  
                if(typeof result.error != 'undefined') {
                    document.getElementById("pay-btn").disabled = false;
                    alert(result.error.message);
                }
  
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById("stripe-token-id").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>










    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright All Received</p>
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
                    <p>Designed by <em>****</em></p>
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