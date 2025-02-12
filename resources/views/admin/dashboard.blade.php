@extends('admin.layouts.app')
@section('content')
  <main>

    <div class="container-fluid">

      <!-- Section: Button icon -->
      <section>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card">

              <!-- Card Data -->
              <div class="row mt-3">

                <div class="col-md-5 col-5 text-left pl-4">

                  <a type="button" class="btn-floating btn-lg primary-color ml-4"><i class="far fa-eye"
                      aria-hidden="true"></i></a>

                </div>

                <div class="col-md-7 col-7 text-right pr-5">

                  <h5 class="ml-4 mt-4 mb-2 font-weight-bold">0 </h5>

                  <p class="font-small grey-text">Unique Visitors</p>
                </div>

              </div>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="row my-3">

                <div class="col-md-7 col-7 text-left pl-4">

                  <p class="font-small font-up ml-4 font-weight-bold">Last month</p>

                </div>

                <div class="col-md-5 col-5 text-right pr-5">

                  <p class="font-small grey-text">0 </p>
                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card">

              <!-- Card Data -->
              <div class="row mt-3">

                <div class="col-md-5 col-5 text-left pl-4">

                  <a type="button" class="btn-floating btn-lg warning-color ml-4"><i class="fas fa-user"
                      aria-hidden="true"></i></a>

                </div>

                <div class="col-md-7 col-7 text-right pr-5">

                  <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$usersCount}}</h5>
                  <p class="font-small grey-text">Total Users</p>

                </div>

              </div>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="row my-3">

                <div class="col-md-7 col-7 text-left pl-4">
                  <p class="font-small font-up ml-4 font-weight-bold">Last month</p>
                </div>

                <div class="col-md-5 col-5 text-right pr-5">
                  <p class="font-small grey-text">0</p>
                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Card -->
            <div class="card">

              <!-- Card Data -->
              <div class="row mt-3">

                <div class="col-md-5 col-5 text-left pl-4">
                  <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4"><i class="far fa-edit
                      aria-hidden="true"></i></a>
                </div>

                <div class="col-md-7 col-7 text-right pr-5">
                  <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$postsCount}}</h5>
                  <p class="font-small grey-text">Total Posts</p>
                </div>

              </div>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="row my-3">

                <!-- Grid column -->
                <div class="col-md-7 col-7 text-left pl-4">
                  <p class="font-small font-up ml-4 font-weight-bold">Last month</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-5 text-right pr-5">
                  <p class="font-small grey-text">0</p>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Button icon -->

      <div style="height: 5px"></div>

      <!-- Section: Analytical panel -->
      <section class="mb-5">

        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Section: Chart -->
          <section>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-xl-5 col-md-12 mr-0">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header light-blue lighten-1">
                  <h4 class="h4-responsive mb-0 font-weight-bold">Traffic</h4>
                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body card-body-cascade pb-0">

                  <!-- Panel data -->
                  <div class="row card-body pt-3">

                    <!-- First column -->
                    <div class="col-md-12">

                      <!-- Date select -->
                      <h4>
                        <span class="badge big-badge light-blue lighten-1">Data range</span>
                      </h4>

                      <select class="mdb-select">
                        <option value="" disabled selected>Choose time period</option>
                        <option value="1">Today</option>
                        <option value="2">Yesterday</option>
                        <option value="3">Last 7 days</option>
                        <option value="3">Last 30 days</option>
                        <option value="3">Last week</option>
                        <option value="3">Last month</option>
                      </select>

                      <br>

                      <!-- Date pickers -->
                      <h5><span class="badge big-badge light-blue lighten-1">Custom date</span></h4>
                        <br>
                        <div class="d-flex justify-content-between">
                          <div class="md-form">
                            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                            <label for="date-picker-example">From</label>
                          </div>
                          <div class="md-form">
                            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                            <label for="date-picker-example">To</label>
                          </div>
                        </div>

                    </div>
                    <!-- First column -->

                  </div>
                  <!-- Panel data -->

                </div>
                <!-- Card content -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-7 col-md-12 mb-4">

                <!-- Card image -->
                <div class="view view-cascade gradient-card-header white">

                  <!-- Chart -->
                  <canvas id="barChart"></canvas>

                </div>
                <!-- Card image -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </section>
          <!-- Section: Chart -->

        </div>
        <!-- Card -->

      </section>
      <!-- Section: Analytical panel -->

      <!-- Section: data tables -->
      <section class="section">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 col-lg-4 ">

            <div class="card mb-4">

              <div class="card-body">

                <div class="table-responsive">

                  <table class="table large-header">

                    <thead>

                      <tr>
                        <th class="font-weight-bold"><strong>Keywords</strong></th>
                        <th class="font-weight-bold"><strong>Visits</strong></th>
                        <th class="font-weight-bold"><strong>Pages</strong></th>
                      </tr>

                    </thead>

                    <tbody>

                      <tr>
                        <td>Design</td>
                        <td>15</td>
                        <td>307</td>
                      </tr>
                      <tr>
                        <td>Bootstrap</td>
                        <td>32</td>
                        <td>504</td>
                      </tr>
                      <tr>
                        <td>MDBootstrap</td>
                        <td>41</td>
                        <td>613</td>
                      </tr>
                      <tr>
                        <td>Frontend</td>
                        <td>14</td>
                        <td>208</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <button
                  class="btn btn-flat grey lighten-3 btn-rounded waves-effect float-right font-weight-bold btn-dash">View
                  full report</button>

              </div>

            </div>

          </div>

          <div class="col-lg-8 col-md-12">

            <div class="card mb-4">

              <div class="card-body">

                <table class="table large-header">

                  <thead>
                    <tr>
                      <th class="font-weight-bold"><strong>Browser</strong></th>
                      <th class="font-weight-bold"><strong>Visits</strong></th>
                      <th class="font-weight-bold"><strong>Pages</strong></th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Google Chrome</td>
                      <td>15</td>
                      <td>307</td>
                    </tr>
                    <tr>
                      <td>Mozilla Firefox</td>
                      <td>32</td>
                      <td>504</td>
                    </tr>
                    <tr>
                      <td>Safari</td>
                      <td>41</td>
                      <td>613</td>
                    </tr>
                    <tr>
                      <td>Opera</td>
                      <td>14</td>
                      <td>208</td>
                    </tr>

                  </tbody>
                </table>

                <button
                  class="btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold float-right btn-dash">View
                  full report</button>

              </div>

            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: data tables -->

      <!-- Section: Cards color -->
      <section class="mt-2">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Panel -->
            <div class="card">

              <div class="card-header white-text primary-color">
                Orders
              </div>

              <h6 class="ml-4 mt-5 font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3" aria-hidden="true"></i>
                2000</h6>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="card-body">

                <div class="progress">

                  <div class="progress-bar blue" role="progressbar" style="width: 45%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">

                  </div>
                </div>
                <!-- Text -->
                <p class="font-small grey-text">Better than last week (25%)</p>
              </div>
              <!-- Card content -->

            </div>
            <!-- Panel -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Panel -->
            <div class="card">

              <div class="card-header white-text warning-color">
                Monthly sales
              </div>

              <h6 class="ml-4 mt-5 font-weight-bold"><i class="fas fa-arrow-up blue-text mr-3" aria-hidden="true"></i> $
                2000</h6>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="card-body">

                <div class="progress">

                  <div class="progress-bar blue" role="progressbar" style="width: 65%" aria-valuenow="65"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>

                </div>
                <!-- Text -->
                <p class="font-small grey-text">Better than last week (25%)</p>
              </div>
              <!-- Card content -->

            </div>
            <!-- Panel -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Panel -->
            <div class="card">

              <div class="card-header white-text light-blue lighten-1">
                Sales
              </div>

              <h6 class="ml-4 mt-5 font-weight-bold"><i class="fas fa-long-arrow-alt-down red-text mr-3"
                  aria-hidden="true"></i> $ 2000</h6>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="card-body">

                <div class="progress">

                  <div class="progress-bar red" role="progressbar" style="width: 25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>

                </div>
                <!-- Text -->
                <p class="font-small grey-text">Worse than last week (25%)</p>
              </div>
              <!-- Card content -->

            </div>
            <!-- Panel -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-4">

            <!-- Panel -->
            <div class="card">
              <div class="card-header white-text red accent-2">
                Daily Sales
              </div>

              <h6 class="ml-4 mt-5 font-weight-bold"><i class="fas fa-long-arrow-alt-down red-text mr-3"
                  aria-hidden="true"></i> $ 2000</h6>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="card-body">

                <div class="progress">

                  <div class="progress-bar red" role="progressbar" style="width: 45%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>

                </div>
                <!-- Text -->
                <p class="font-small grey-text">Worse than last week (25%)</p>
              </div>
              <!-- Card content -->

            </div>
            <!-- Panel -->


          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Cards color -->

      <!-- Section: Panels -->
      <section>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-5 col-md-12">

            <!-- Card -->
            <div class="card mb-4">

              <!-- Card Data -->
              <div class="row">

                <div class="col-md-12 text-center">
                  <h5 class="mt-4 mb-4 font-weight-bold">Monthly Sales</h5>
                </div>

              </div>

              <!-- Card content -->
              <div class="card-body">

                <div class="progress mb-2 mt-1">

                  <div class="progress-bar warning-color" role="progressbar" style="width: 55%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>

                </div>

                <!-- Text -->
                <p class="font-small grey-text mb-4">January</p>

                <div class="progress mb-2">
                  <div class="progress-bar red accent-2" role="progressbar" style="width: 35%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>

                <!-- Text -->
                <p class="font-small grey-text mb-4">Febuary</p>

                <div class="progress mb-2">

                  <div class="progress-bar primary-color" role="progressbar" style="width: 85%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100">
                  </div>

                </div>

                <!-- Text -->
                <p class="font-small grey-text mb-4">March</p>

                <div class="progress mb-2">
                  <div class="progress-bar light-blue lighten-1" role="progressbar" style="width: 70%"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- Text -->
                <p class="font-small grey-text mb-2">April</p>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-xl-3 col-md-6 mb-2">

            <!-- Card -->
            <div class="card">

              <!-- Card Data -->
              <div class="row mt-4 mb-3">

                <div class="col-md-3 col-3 text-left pl-4">

                  <!-- Facebook -->
                  <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f fa-2x blue-text"> </i></a>

                </div>

                <div class="col-md-9 col-9 text-right pr-5">

                  <p class="font-small grey-text mb-1">Facebook Users</p>
                  <h5 class="ml-4 mb-2 font-weight-bold">4,567 </h5>

                </div>
              </div>
              <!-- Card Data -->

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mt-4">

              <!-- Card Data -->
              <div class="row mt-4 mb-3">

                <div class="col-md-3 col-3 text-left pl-4">

                  <!-- Facebook -->
                  <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-google-plus-g fa-2x red-text"> </i></a>

                </div>

                <div class="col-md-9 col-9 text-right pr-5">

                  <p class="font-small grey-text mb-1">Google+ Users</p>
                  <h5 class="ml-4 mb-2 font-weight-bold">2,669 </h5>

                </div>
              </div>
              <!-- Card Data -->

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mt-4 mb-4">

              <!-- Card Data -->
              <div class="row mt-4 mb-3">

                <div class="col-md-3 col-3 text-left pl-4">

                  <!-- Facebook -->
                  <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-twitter fa-2x cyan-text"> </i></a>

                </div>

                <div class="col-md-9 col-9 text-right pr-5">

                  <p class="font-small grey-text mb-1">Twitter Users</p>
                  <h5 class="ml-4 mb-2 font-weight-bold">3,562 </h5>

                </div>
              </div>
              <!-- Card Data -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-4 col-md-6 mb-2">

            <!-- Card -->
            <div class="card mb-4">

              <div class="card-body">

                <div class="table-responsive">

                  <table class="table large-header mb-1">

                    <thead>
                      <tr>
                        <th class="font-weight-bold"><strong>Month</strong></th>
                        <th class="font-weight-bold"><strong>Visits</strong></th>
                        <th class="font-weight-bold"><strong>Sales</strong></th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>January</td>
                        <td>15</td>
                        <td>307</td>
                      </tr>
                      <tr>
                        <td>Febuary</td>
                        <td>32</td>
                        <td>504</td>
                      </tr>
                      <tr>
                        <td>March</td>
                        <td>41</td>
                        <td>613</td>
                      </tr>

                    </tbody>

                  </table>

                </div>

                <button
                  class="btn btn-flat grey lighten-3 btn-rounded waves-effect float-right font-weight-bold btn-dash">View
                  full report</button>

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Panels -->

    </div>

  </main>
  <!-- Main layout -->
@endsection
  <!-- SCRIPTS -->

  <!-- Initializations -->
  @section('js')
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Small chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4285F4",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });



    //bar
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ["January", "Febuary", "March", "April", "May"],
        datasets: [{
          label: '# of Votes',
          data: [13, 19, 8, 11, 5],
          backgroundColor: [
            'rgba(255, 99, 132, 0.3)',
            'rgba(41, 182, 246, 0.3)',
            'rgba(255, 187, 51, 0.3)',
            'rgba(66, 133, 244, 0.3)',
            'rgba(153, 102, 255, 0.3)',

          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(41, 182, 246, 1)',
            'rgba(255, 187, 51, 1)',
            'rgba(66, 133, 244, 1)',
            'rgba(153, 102, 255, 1)',

          ],
          borderWidth: 2
        }]
      },
      optionss: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    $('#dark-mode').on('click', function (e) {

      e.preventDefault();
      $('footer').toggleClass('mdb-color lighten-4 dark-card-admin');
      $('body, .navbar').toggleClass('white-skin navy-blue-skin');
      $(this).toggleClass('white text-dark btn-outline-black');
      $('body').toggleClass('dark-bg-admin');
      $('.card').toggleClass('dark-card-admin');
      $('h6, .card, p, td, th, i, li a, h4, input, label').not(
        '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
      $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
      $('.gradient-card-header').toggleClass('white dark-card-admin');

      if ($('.navbar').hasClass('navy-blue-skin')) {
        for (let i = 0; i <= 5; i++) {
          myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
        }

        Chart.defaults.global.defaultFontColor = '#fff';
      } else {

        for (let i = 0; i <= 5; i++) {
          myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
        }

        Chart.defaults.global.defaultFontColor = '#666';
      }

      myBarChart.update();

    });

  </script>

@endsection
