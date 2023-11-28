
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">

      <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }

    </style>
    <!-- Required meta tags -->
@include('admin.css')
</head>
  <body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
          <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
              <div class="ps-lg-1">
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                  <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                <button id="bannerClose" class="btn border-0 p-0">
                  <i class="mdi mdi-close text-white me-0"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
             <!-- partial -->
          <!-- content-wrapper ends -->
          <div class="container-fluid page-body-wrapper">
            @if (session()->has('message'))

            <div class="alert alert-success">
                <button  type="button" class="close" data-dismiss="alert">
                    +</button>
                {{ session()->get('message') }}

            </div>

            @endif
 <div class="container" align="center" style="padding: 100px;">

<form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data" >
@csrf
    <div style="padding: 15px;" >
    <label >Doctor Name</label>
    <input type="text" name="name" style="color:black;"  value="{{ $data->name }}">
</div>

<div style="padding: 15px;" >
    <label >Phone</label>
    <input type="text" name="phone" style="color:black;"  value="{{ $data->phone }}">
</div>
<div style="padding: 15px;" >
    <label >Speciality</label>
    <input type="text" name="speciality"  style="color:black;" value="{{ $data->speciality }}">
</div>

<div style="padding: 15px;" >
    <label >Room</label>
    <input type="number" name="room" style="color:black;"  value="{{ $data->room }}">
</div>



<div style="padding: 15px;" >
    <label >Old image</label>
    <img src="doctorimage/{{ $data->image }}" height="150px" width="150px">
</div>

<div style="padding: 15px;">
<label > Change image</label>
<input type="file" name ="file">
</div>

<div style="padding: 15px;">

    <input type="submit" class="btn btn-primary">
</div>

</form>

 </div>
        </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>
