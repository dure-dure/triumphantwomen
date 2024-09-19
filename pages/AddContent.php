<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Triumphant Women
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <style>
    .notification {
        padding: 10px;
        margin: 15px 0;
        border: 1px solid transparent;
        border-radius: 5px;
        display: inline-block;
    }

    .success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
  </style>

</head>

<body class="sign-in-basic">
 <!-- Navbar Transparent -->
 <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="#" rel="tooltip" title="Designed by #Dure-dure" data-placement="bottom" target="_blank">
        Triumphant Women
      </a>
      
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="../indexLog.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-6 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Content</h4>
                <!-- <div class="row mt-3">
                  <p class="text-white font-weight-bolder text-center ">&nbsp;Enter your email and password to Sign In&nbsp;</p>
                </div> -->
              </div>
            </div>
            <br>
            <div class="card-body">
              <form action="../pages/news.php" method="POST" role="form" class="text-start" enctype="multipart/form-data">
                <div class="input-group input-group-outline my-3" >
                  <label for="theme" class="form-label">Theme</label>
                  <input type="text" id="theme" name="theme" class="form-control"  autocomplete="theme"required="">
                </div>
                <!-- <div class="input-group input-group-outline mb-3">
                  <label for="mot_de_passe" class="form-label">Password</label>
                  <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" autocomplete="mot_de_passe" required="">
                </div> -->
                <div class="input-group input-group-outline mb-3">
                  <label for="description" class="form-textarea">Description &nbsp; </label>
                  <textarea id="description" name="description" rows="5" cols="60" placeholder="" required=""></textarea>
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label for="image">Choisissez une photo :</label>
                  <input type="file" id="image" name="image" accept="image/*" required>
                </div>
                <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                  <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                </div> -->
                <br>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2 ">SEND</button>
                </div>
                <!-- <p class="mt-4 text-sm text-center">
                  Don't have an account?
                </p> -->
                <?php
                  // Notification de succès
                  if (isset($_GET['success']) && $_GET['success'] == 1) {
                      echo '<div class="notification success">Fichier uploadé avec succès !</div>';
                  }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>