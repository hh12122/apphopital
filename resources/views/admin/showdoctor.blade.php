
<!DOCTYPE html>
<html lang="en">
  <head>
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


            <div align='center' style="padding: 100px;">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px; color:white ">Doctor Name</th>
                        <th style="padding: 10px; color:white ">Phone</th>
                        <th style="padding: 10px; color:white ">Speciality</th>
                        <th style="padding: 10px; color:white ">room No</th>
                        <th style="padding: 10px; color:white ">image</th>
                        <th style="padding: 10px; color:white ">Update</th>
                        <th style="padding: 10px; color:white ">Delete</th>
                    </tr>
@foreach ($data as $doctors )
<tr align="center" style="background-color: skyblue">
  <td>{{ $doctors->name }}</td>
  <td>{{ $doctors->phone }}</td>
  <td>{{ $doctors->speciality }}</td>
  <td>{{ $doctors->room }}</td>
  <td> <img src="doctorimage/{{ $doctors->image }}" height="100px" width="100px"></td>
  <td> <a  class="btn btn-success" href="{{ url('updatedoc',$doctors->id) }} ">update</a></td>

  <td> <a onclick="return confirm('are you sur')"  class="btn btn-danger" href="{{ url('deletedoc',$doctors->id) }}">delete</a></td>
</tr>
@endforeach

                </table>
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
