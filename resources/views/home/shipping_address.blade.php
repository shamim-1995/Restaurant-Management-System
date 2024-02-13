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
          
          .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          }

          /* Modal Content */
          .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
          }

          /* The Close Button */
          .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
          }

          .close:hover,
          .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
          }
                      
          input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          }

          input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }

          input[type=submit]:hover {
            background-color: #45a049;
          }

          div {
            border-radius: 5px;
            padding: 20px;
          }
          .table {
            width:100%;
            border:1px solid $color-form-highlight;
          }

          .table-header {
            display:flex;
            width:100%;
            background:#000;
            padding:($half-spacing-unit * 1.5) 0;
          }

          .table-row {
            display:flex;
            width:100%;
            padding:($half-spacing-unit * 1.5) 0;
            
            &:nth-of-type(odd) {
              background:$color-form-highlight;
            }
          }

          .table-data, .header__item {
            flex: 1 1 20%;
            text-align:center;
          }

          .header__item {
            text-transform:uppercase;
          }

          .filter__link {
            color:white;
            text-decoration: none;
            position:relative;
            display:inline-block;
            padding-left:$base-spacing-unit;
            padding-right:$base-spacing-unit;
            
            &::after {
              content:'';
              position:absolute;
              right:-($half-spacing-unit * 1.5);
              color:white;
              font-size:$half-spacing-unit;
              top: 50%;
              transform: translateY(-50%);
            }
            
            &.desc::after {
              content: '(desc)';
            }

            &.asc::after {
              content: '(asc)';
            }
            
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


  @if(session('message'))
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{ session('message') }}
    </div>
    @endif



    <!-- Trigger/Open The Modal -->
<button id="myBtn" style="
display:block;
margin: 0 auto;
margin-top: 8px;
padding: 1%">Update Address</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div>
      <form method="POST" action="{{url('/update_address',$id)}}">
        @csrf
        <label for="fname">Street</label>
        <input type="text" id="fname" name="street" placeholder="Your Street..">
    
        <label for="lname">City</label>
        <input type="text" id="lname" name="city" placeholder="Your City..">
        <label for="lname">State</label>
        <input type="text" id="lname" name="state" placeholder="Your State">
        <label for="lname">Phone</label>
        <input type="text" id="lname" name="phone" placeholder="Your Phone number..">
        <label for="lname">Postal Code</label>
        <input type="text" id="lname" name="postal_code" placeholder="Your Postal Code..">
    
        
      
        <input type="submit" value="Save Address">
      </form>
    </div>
  </div>

</div>
<div class="container">
	
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Phone</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Address</a></div>
		</div>
		<div class="table-content">	
      @foreach ($address as $address)
			<div class="table-row">		
				<div class="table-data">{{$address->phone}}</div>
				<div class="table-data">{{$address->Address}}</div>
			</div>
      @endforeach
		</div>	
	</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>








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