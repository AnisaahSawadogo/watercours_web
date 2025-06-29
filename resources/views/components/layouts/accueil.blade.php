<!DOCTYPE html>
<html lang="en">

{{-- head --}}
    @include('components.layouts.app.head')

  <body>
    <div class="container-scroller">
      <!-- navbar du haut -->
    @include('components.layouts.app.navbartop')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('components.layouts.app.navbarleft')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Area chart</h4>
                    <canvas id="areaChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doughnut chart</h4>
                    <div class="doughnutjs-wrapper d-flex justify-content-center">
                      <canvas id="doughnutChart" style="height: 250px !important;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <div class="doughnutjs-wrapper d-flex justify-content-center">
                      <canvas id="pieChart" style="height: 250px !important;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Scatter chart</h4>
                    <canvas id="scatterChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/chart.umd.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js')}}"></script>
    <script src="{{ asset('js/template.js')}}"></script>
    <script src="{{ asset('js/settings.js')}}"></script>
    <script src="{{ asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/chart.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>
