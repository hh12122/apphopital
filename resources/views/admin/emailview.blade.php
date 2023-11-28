
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
<style type="text/css">
label{
    display: inline-block;
float: left;
    text-align: left;
    width: 200px;
}
select{
width: 10rem;
}




</style>
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
              <div class="container" align="center" style="padding-top:100px; ">
                @if (session()->has('message'))

<div class="alert alert-success">
    <button  type="button" class="close" data-dismiss="alert">
        +</button>
    {{ session()->get('message') }}

</div>

@endif
                  <form action="{{ url('sendemail',$data->id ) }}" method="POST" >
                        @csrf


                    <div style="padding: 15px;">
                        <label for="">Greeting</label>
                        <input type="text" style="color:black;" name="greeting" placeholder="write the name"  required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Body</label>
                        <input type="text" style="color:black;" name="body"  required>
                    </div>


                    <div style="padding: 15px;">
                        <label for="">Action text</label>
                        <input type="text" style="color:black;" name="actiontext"  required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Action url</label>
                        <input type="text" style="color:black;" name="actionurl"  required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">End part</label>
                        <input type="text" style="color:black;" name="endparts"  required>
                    </div>


                    <div style="padding: 15px;">

                        <input type="submit"  class="btn btn-success" >
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
