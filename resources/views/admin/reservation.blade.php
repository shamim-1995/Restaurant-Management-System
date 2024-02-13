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
          max-height: 800px;
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
                    <th>Customer Phone</th>
                    <th>Day</th>
                    <th>hour</th>
                    <th>Number Of Person</th>
                    <th>Approve Reservation</th>
                      
                  </tr>
                  @foreach ($result as $result)
                  <tr>
                      <td>{{$result->name}}</td>
                      <td>{{$result->number}}</td>
                      <td>{{$result->day}}</td>
                      <td>{{$result->hour}}:00</td>
                      <td>{{$result->person}} - Person</td>
                      <td>
                        <input type="hidden" name="item_id" value="{{ $result->id }}">
                          <!-- Use a checkbox with a unique ID for each row -->
                          <div class="form-check form-switch">
                              <input class="form-check-input reserv_status-toggle" type="checkbox" role="switch" id="reserv_statusToggle{{ $result->id }}" {{ $result->status ? 'checked' : '' }}>
                              <!-- Label for the switch -->
                              <label class="form-check-label" for="reserv_statusToggle{{$result->id }}"></label>
                          </div>
                      </td>
                      
                  </tr>
                  @endforeach
              </table>
              
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var toggleSwitches = document.querySelectorAll('.reserv_status-toggle');
                    toggleSwitches.forEach(function(toggleSwitch) {
                        toggleSwitch.addEventListener('change', function() {
                            var productID = toggleSwitch.closest('tr').querySelector('[name="item_id"]').value;
                            var isFeature = toggleSwitch.checked ? 1 : 0; // Convert true/false to 1/0
                            var data = {
                                _token: '{{ csrf_token() }}',
                                status: isFeature
                            };
                            axios.patch('/products/' + productID + '/toggle-reserv', data)
                                .then(function(response) {
                                    // Handle the response, e.g., update the UI based on the new feature status
                                    console.log(response.data);
                                    Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Reservation successfully.',
                                    showConfirmButton: false,
                                    timer: 1500
                                  });
                                })
                                .catch(function(error) {
                                    // Handle the error
                                    console.error(error);
                                    Swal.fire({
                                      icon: 'error',
                                      title: 'Error',
                                      text: 'An error occurred while updating Reservation',
                                      showConfirmButton: false,
                                      timer: 1500
                                    });
                                });
                        });
                    });
                });

            </script>
            
              
                
              </div>
              
                             
            </div>
              
          </div>
          
    </div> 
        <div class="container-fluid bg-dark text-light ">
            <p class="text-center mb-0">Copyright RMS 2024 | All right reserved</p>
        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>