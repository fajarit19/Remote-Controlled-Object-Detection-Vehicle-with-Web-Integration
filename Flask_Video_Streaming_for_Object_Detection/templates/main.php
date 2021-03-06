<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Monitoring Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <!-- <style>
    #player{
      width : 100%;
      height: 100%;
    }
  </style> -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Our Robot
          </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item  ">
              <a class="nav-link" href="./dashboard.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./main.php">
                <i class="material-icons">camera</i>
                <p>Monitoring</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./user.php">
                <i class="material-icons">person</i>
                <p>List User</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./camera.php">
                <i class="material-icons">content_paste</i>
                <p>Image</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Monitoring</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                  Admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content" style="padding: 0.2px 15px;">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Monitoring Camera</h4>
                <!-- <p class="card-category">Handcrafted by our friends from
                  <a target="_blank" href="https://design.google.com/icons/">Google</a>
                </p> -->
              </div>
              <!-- <div class="layout">
                <div id="newImages"></div>
                
                <div class="row">
                  <div class="cell">
                    <video id="player" autoplay></video>
                  </div>
                  <div class="cell"></div>
                    <canvas id="canvas" width="320px" height="240px"></canvas>
                  </div>
                </div>
                <div class="center">
                  <button class="btn btn-primary" id="capture-btn">Capture</button>
                </div>
                <div id="pick-image">
                  <label>Video is not supported. Pick an Image instead</label>
                  <input type="file" accept="image/*" id="image-picker">
                </div>
              </div> -->

              <!-- <div class="layout">
                //<div id="newImages"></div>
                
                <div class="row">
                  <div class="cell">
                   // <video id="player" autoplay></video>
                    <img width="320px" height="240px" src="{{ url_for('video_feed') }}">
                  </div>
                  <div class="cell"></div>
                    <canvas id="canvas" width="320px" height="240px">
                     // <img width="320px" height="240px" src="{{ url_for('video_feed') }}">
                    </canvas>
                  </div>
                </div>
                <div class="center">
                  <button class="btn btn-primary" id="capture-btn">Capture</button>
                </div>
                <div id="pick-image">
                  <label>Video is not supported. Pick an Image instead</label>
                  <input type="file" accept="image/*" id="image-picker">
                </div>
              </div>  -->

 
              <div class="layout" style="margin: 10px 10px;">
                <!-- <div id="newImages"></div> -->
                
                <div class="row" style="margin-left: 10px; margin-right: 10px; margin-top: 80px;">
                  <div class="cell">
                    <video id="player" autoplay></video>
                  </div>
                  <!-- <div class="cell"></div> -->
                    <canvas id="canvas" width="320px" height="240px"></canvas>
                  </div>
                </div>
                <div class="center">
                  <button class="btn btn-primary" id="capture-btn" style="margin-top: 40px;">Capture</button>
                </div>
                <div id="pick-image">
                  <label>Video is not supported. Pick an Image instead</label>
                  <input type="file" accept="image/*" id="image-picker">
                </div>
              </div>   

            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <script src="script.js"></script>
 
    <!-- <script>
      var player = document.getElementById('player'); 
      var snapshotCanvas = document.getElementById('snapshot');
      var captureButton = document.getElementById('capture');
      var videoTracks;

      var handleSuccess = function(stream) {
      // Attach the video stream to the video element and autoplay.
      player.srcObject = stream;
      videoTracks = stream.getVideoTracks();
      };

      captureButton.addEventListener('click', function() {
      var context = snapshot.getContext('2d');
      context.drawImage(player, 0, 0, snapshotCanvas.width, snapshotCanvas.height);

      // Stop all video streams.
      //videoTracks.forEach(function(track) {track.stop()});
      });

      navigator.mediaDevices.getUserMedia({video: true})
      .then(handleSuccess);
    </script> -->

</body>

</html>