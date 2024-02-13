<div class="col-md-2 bg-dark text-light ">
  <h1 class="me-auto mb-2 mt-2 ms-4">Friends Restaurant</h1>
  <div class="row border border-light">
      <div class="col-3">
          {{-- <img src="profile.png" class="rounded-circle" class="rounded-circle" width="50px" height="50px" alt=""> --}}
      </div>
      <div class="col-9 mt-3 fw-bolder">
         
      </div>
  </div>
  <div class="container">
      
  </div>
  <div class="d-grid gap-2 ">
    <a href="{{url('view_category')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-regular fa-plus"></i> Add Category</a>
</div>
  <div class="d-grid gap-2 ">
      <a href="{{url('view_food')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-sharp fa-regular fa-address-card"></i> Add Food</a>
  </div>
  <div class="d-grid gap-2 ">
    <a href="{{url('show_food')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-users-viewfinder"></i> Show Foods</a>
  </div>
  
  {{-- <div class="d-grid gap-2 ">
    <a href="{{url('flashselltime')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-users-viewfinder"></i> Flash Sell</a>
  </div> --}}
  <!-- <div class="d-grid gap-2">
      <a href="{{url('view_banner')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-cloud-arrow-up"></i> Top Banner</a>
  </div>
  <div class="d-grid gap-2">
    <a href="{{url('view_side_banner')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-cloud-arrow-up"></i>Middle Banner</a>
  </div> -->
  {{-- <div class="d-grid gap-2">
    <a href="{{url('view_middle_banner')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-cloud-arrow-up"></i>Footer Banner</a>
  </div> --}}
  
  <div class="d-grid gap-2">
      <a href="{{url('view_order')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-thin fa-code-pull-request"></i> View Order<span class="badge rounded-pill bg-danger" style="margin-left: 1%;">
        {{$ordercount}} New
      </span></a>
  </div> 
  <div class="d-grid gap-2">
      <a href="{{url('view_cancel_request')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-thin fa-code-pull-request"></i> Cancel Request<span class="badge rounded-pill bg-danger" style="margin-left: 1%;">
        {{$cancelcount}} New
      </span></a>
  </div>
  <div class="d-grid gap-2">
      <a href="{{url('delivered_order')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-thin fa-code-pull-request"></i> Delivered Product<span class="badge rounded-pill bg-danger" style="margin-left: 1%;">
        {{$delivercount}} 
      </span></a>
  </div>
  <div class="d-grid gap-2">
      <a href="{{url('reservation_admin')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-thin fa-code-pull-request"></i> View Reservation<span class=" badge rounded-pill bg-danger" style="margin-left: 1%;">
        {{$reservationcount}} New
      </span></a>
  </div>
  <div class="d-grid gap-2">
      <a href="{{url('post_blog')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-pen-nib"></i> Post Blog</a>
  </div>
  
  <div class="d-grid gap-2">
      <a href="{{url('show_blog')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-users-viewfinder"></i> Show Blog</a>
  </div>

  <div class="d-grid gap-2">
      <a href="{{url('read_feedback')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-brands fa-readme"></i> View Feedback</a>
  </div>
  <div class="d-grid gap-2">
      <a href="{{url('user_handle')}}" class="text-decoration-none text-start text-light btn btn-dark mt-2" ><i class="fa-solid fa-user"></i> Handle User</a>
  </div>
 
  
</div>