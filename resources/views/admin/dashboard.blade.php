<h1 class="ms-3">Dashboard</h1>
              </div>
              <div class="container">
                <div class="row my-2">
                    <div class="col-md-3">
                        <div class="card bg-primary">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total User</h5>
                                <p class="card-text text-light text-center fw-bold">{{$total_user}}</p>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning ">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total Order</h5>
                                <p class="card-text text-light text-center fw-bold">{{$total_order}}</p>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total Food</h5>
                                <p class="card-text text-light text-center fw-bold">{{$total_product}}</p>
                                
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info">
                                <div class="card-body">
                                <h5 class="card-title text-light text-center fw-bolder">Total Sell</h5>
                                <p class="card-text text-light text-center fw-bold">{{$totalItemsOrdered}} <span class="" style="    font-size: 15px;
                                    font-weight: bold;
                                    font-family: 'FontAwesome';">৳</span></p>
                                </div>
                            
                        </div>
                    </div>
                </div>
              </div>
              
                
                <div class="row">
                <div class="ms-3 col-md-8 mt-3">
                    
                    <canvas id="userRegistrationsChart"></canvas>
                    <script>
                      var chartData = @json($chartData);
              
                      var ctx = document.getElementById('userRegistrationsChart').getContext('2d');
                      var chart = new Chart(ctx, {
                          type: 'line',
                          data: {
                              labels: chartData.labels,
                              datasets: [{
                                  label: 'User Registrations',
                                  data: chartData.data,
                                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                  borderColor: 'rgba(75, 192, 192, 1)',
                                  borderWidth: 1
                              }]
                          },
                          options: {
                              scales: {
                                  y: {
                                      beginAtZero: true,
                                      stepSize: 1
                                  }
                              }
                          }
                      });
                  </script>
                    
                </div>