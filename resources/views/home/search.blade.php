<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home/css/style.css">
    <style>
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

.modal {
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
}

.modal-content {
  margin: auto;
  display: block;
  max-width: 40%;
  
}
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
.scrollable-table {
          max-height: 100vh;
          overflow-y: scroll;
        }
    </style>
    <script>
      
  </script>
  </head>
  <body>
    {{-- header --}}
    @include('home.header')
    @if(session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
              <div class=""style="margin-left: 2%; margin-right: 2%">
                <div class="row" style="margin-top: 20px;">
                  <div class="col-md-12">
                    <h2 style="font-size: 1.5rem;
                    font-family: SFProDisplaySemibold;
                    text-align: center;">Search Result For <b>{{$search_text}}</b></h2>
                  </div>
                </div>
              </div>

              <div class="row scrollable-table">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                  <div class="carousel-inner row">
                    @foreach ($product as $product)
                      <div class="col-sm-3 my-1">
                        <div class="thumb-wrapper" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                            <img src="/product_picture/{{$product->image}}" class="img-fluid" style="display: block; margin: 0 auto; text-align: center; max-width: 100%; height: 100px;" alt="">
                            <div class="overlay">
                              <a href="#" class="btn btn-primary" onclick="showFullImage(event, '{{$product->image}}')">View Full Image</a>
                            </div>
                          </div>
                          <div class="thumb-content mt-2">
                            <h4 style="min-height: 57px; font-size: 1.5rem !important;">{{$product->title}}</h4>
                            <p class="item-price"><strike>{{$product->price}}tk</strike> <b>{{$product->discount_price}}tk</b></p>
                            <a href="{{url('add_cart',$product->id)}}" class="btn btn-primary btn-size">Add to Cart</a>
                            <a href="{{url('details',$product->id)}}" class="btn btn-primary btn-size">Details</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              
              <!-- Full Image Modal -->
              <div id="fullImageModal" class="modal">
                <span class="close" onclick="closeFullImageModal()">&times;</span>
                <img class="modal-content" id="fullImage">
              </div>
              
              <!-- JavaScript code -->
              <script>
                function showFullImage(event, imageSrc) {
                  event.preventDefault();
                  var modal = document.getElementById("fullImageModal");
                  var modalImg = document.getElementById("fullImage");
                
                  // Set the image source and display the modal
                  modalImg.src = "/product_picture/" + imageSrc;
                  modal.style.display = "block";
                }
                
                function closeFullImageModal() {
                  var modal = document.getElementById("fullImageModal");
                  modal.style.display = "none";
                }
                </script>
              
        

    {{-- footer --}}
    @include('home.footer')

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>