<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c44cda4ea.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    
    
    <style>
      .div_center{
        text-align: center;
        padding-top: 40px;
        color: white;
      }
      .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
      }
      .input_color{
        color: black;
      }
      .resize{
        width: 100%;
        height: 80px;
        border-radius: 10%;
      }
      .scrollable-table {
          max-height: 400px;
          overflow-y: scroll;
        }
    </style>
</head>
  <body>
    
    <div class="row min-vh-100">
        {{-- sidebar --}}
        @include('admin.sidebar')
        <div class="col-md-10">
          {{-- navbar --}}
           @include('admin.navbar') 
           @if(session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
            <div class="row min-vh-100 bg-black">
              <div class="scrollable-table">
                
                <table class="table table-dark table-striped align-middle">
                  <tr>
                      <th>Customer Name</th>
                      <th>Customer Email</th>
                      <th>product_title</th>
                      <th>Product Price</th>
                      <th>Delivered Time</th>

                      
                  </tr>
                  @foreach ($orders as $orders)
                  <tr>
                      <td>{{$orders->customer_name}}</td>
                      <td>{{$orders->customer_email}}</td>

                      <td>{{$orders->product_title}}</td>
                      <td>{{$orders->price}} <span class="" style="    font-size: 15px;
                        font-weight: bold;
                        font-family: 'FontAwesome';">৳</span></td>

                      <td>{{$orders->updated_at}}</td>
                  </tr>
                  @endforeach
              </table>
              
              
              
                
              </div>
              
                             
            </div>
              
          </div>
           
    </div> 
    
        <div class="container-fluid bg-dark text-light ">
            <p class="text-center mb-0">Copyright E-Commerce 2023 | All right reserved</p>
        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>