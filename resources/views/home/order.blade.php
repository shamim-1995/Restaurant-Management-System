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
        .courses-container {
	
        }
        
        .course {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
          display: flex;
          max-width: 100%;
          margin: 20px;
          overflow: hidden;
          width: 700px;
        }
        
        .course h6 {
          opacity: 0.6;
          margin: 0;
          letter-spacing: 1px;
          text-transform: uppercase;
        }
        
        .course h2 {
          letter-spacing: 1px;
          margin: 10px 0;
        }
        
        .course-preview {
          background-color: #2A265F;
          color: #fff;
          padding: 30px;
          max-width: 250px;
        }
        
        .course-preview a {
          color: #fff;
          display: inline-block;
          font-size: 12px;
          opacity: 0.6;
          margin-top: 30px;
          text-decoration: none;
        }
        
        .course-info {
          padding: 30px;
          position: relative;
          width: 100%;
        }
        
        .progress-container {
          position: absolute;
          top: 30px;
          right: 30px;
          text-align: right;
          width: 150px;
        }
        
        .progress {
          background-color: #ddd;
          border-radius: 3px;
          height: 5px;
          width: 100%;
        }
        
        .progress::after {
          border-radius: 3px;
          background-color: #2A265F;
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          height: 5px;
          width: 66%;
        }
        
        .progress-text {
          font-size: 10px;
          opacity: 0.6;
          letter-spacing: 1px;
        }
        
        .btn {
          background-color: #2A265F;
          border: 0;
          border-radius: 50px;
          box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
          color: #fff;
          font-size: 16px;
          padding: 12px 25px;
          position: absolute;
          bottom: 30px;
          right: 30px;
          letter-spacing: 1px;
        }
        
        /* SOCIAL PANEL CSS */
        .social-panel-container {
          position: fixed;
          right: 0;
          bottom: 80px;
          transform: translateX(100%);
          transition: transform 0.4s ease-in-out;
        }
        
        .social-panel-container.visible {
          transform: translateX(-10px);
        }
        
        .social-panel {	
          background-color: #fff;
          border-radius: 16px;
          box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
          border: 5px solid #001F61;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          font-family: 'Muli';
          position: relative;
          height: 169px;	
          width: 370px;
          max-width: calc(100% - 10px);
        }
        
        .social-panel button.close-btn {
          border: 0;
          color: #97A5CE;
          cursor: pointer;
          font-size: 20px;
          position: absolute;
          top: 5px;
          right: 5px;
        }
        
        .social-panel button.close-btn:focus {
          outline: none;
        }
        
        .social-panel p {
          background-color: #001F61;
          border-radius: 0 0 10px 10px;
          color: #fff;
          font-size: 14px;
          line-height: 18px;
          padding: 2px 17px 6px;
          position: absolute;
          top: 0;
          left: 50%;
          margin: 0;
          transform: translateX(-50%);
          text-align: center;
          width: 235px;
        }
        
        .social-panel p i {
          margin: 0 5px;
        }
        
        .social-panel p a {
          color: #FF7500;
          text-decoration: none;
        }
        
        .social-panel h4 {
          margin: 20px 0;
          color: #97A5CE;	
          font-family: 'Muli';	
          font-size: 14px;	
          line-height: 18px;
          text-transform: uppercase;
        }
        
        .social-panel ul {
          display: flex;
          list-style-type: none;
          padding: 0;
          margin: 0;
        }
        
        .social-panel ul li {
          margin: 0 10px;
        }
        
        .social-panel ul li a {
          border: 1px solid #DCE1F2;
          border-radius: 50%;
          color: #001F61;
          font-size: 20px;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 50px;
          width: 50px;
          text-decoration: none;
        }
        
        .social-panel ul li a:hover {
          border-color: #FF6A00;
          box-shadow: 0 9px 12px -9px #FF6A00;
        }
        
        .floating-btn {
          border-radius: 26.5px;
          background-color: #001F61;
          border: 1px solid #001F61;
          box-shadow: 0 16px 22px -17px #03153B;
          color: #fff;
          cursor: pointer;
          font-size: 16px;
          line-height: 20px;
          padding: 12px 20px;
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 999;
        }
        
        .floating-btn:hover {
          background-color: #ffffff;
          color: #001F61;
        }
        
        .floating-btn:focus {
          outline: none;
        }
        
        .floating-text {
          background-color: #001F61;
          border-radius: 10px 10px 0 0;
          color: #fff;
          font-family: 'Muli';
          padding: 7px 15px;
          position: fixed;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          text-align: center;
          z-index: 998;
        }
        
        .floating-text a {
          color: #FF7500;
          text-decoration: none;
        }
        
        @media screen and (max-width: 480px) {
        
          .social-panel-container.visible {
            transform: translateX(0px);
          }
          
          .floating-btn {
            right: 10px;
          }
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
.cancel-button {
    background-color: #dc3545;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.cancel-button:hover {
    background-color: #c82333;
}
.alert {
  padding: 20px;
  background-color: #63b558;
  color: white;
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


    
   <div style="height: 80vh;
   overflow: scroll;">

   
    



    @foreach ($order as $order)
    <div class="courses-container" style="display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;">
    
      <div class="course">
        
        <div class="course-preview">
          <h2>Friends Resturant</h2>
        </div>
        <div class="course-info">
          <div >
            @if ($order->order_status == 0 && $order->cancel_status == 0)
                <a href="{{ url('cancel_order', $order->id) }}" style="position: absolute;
                  top: 6%;
                  right: 1%;" onclick="return confirm('Are you sure to Cancel this Order ?')" class="cancel-button">Cancel Order</a>
            @endif
            @if ($order->cancel_status == 1)
                <a  class="cancel-button" style="position: absolute;
                top: 6%;
                right: 1%;">Request For Cancel</a>
            @endif
            @if ($order->cancel_status == 2)
                <a  class="cancel-button" style="position: absolute;
                top: 6%;
                right: 1%;">Order Cancel</a>
             @endif

        </div>
          <div class="progress-container">
            
            
          </div>
          <h6>Your Order Status</h6>
          <h2>{{$order->product_title}}</h2>
          <h4>{{$order->price}}tk</h4>
          <span>
            <span style="background: aliceblue;
            padding: 4px;
            border-radius: 10%;    margin: 2%;">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label"  for="flexCheckDefault">
                          Order placed
                        </label>
              </span>
              <span style="background: aliceblue;
              padding: 4px;
              border-radius: 10%;    margin: 2%;">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                            {{ $order->order_status == 1 ? 'checked' : '' }}>
                        <label class="form-check-label"  for="flexCheckDefault">
                          On The Way
                        </label>
              </span>
              <span style="background: aliceblue;
              padding: 4px;
              border-radius: 10%;    margin: 2%;">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
            {{ $order->delivery_status == 1 ? 'checked' : '' }}>
            <label class="form-check-label"  for="flexCheckDefault">
              Delivered
            </label>
              </span>
          </span>
          
        </div>
        <div>
          
        </div>
       
      </div>
      
    </div>
    @endforeach
    
    <!-- SOCIAL PANEL HTML -->
    
    


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