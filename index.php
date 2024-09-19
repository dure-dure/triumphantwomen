<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
// session_start();
    $uri = "mysql://avnadmin:AVNS_nQWLgfw78Yo-s2EJOWr@mysql-1fe3a468-duredure2402-e1c4.g.aivencloud.com:19845/defaultdb?ssl-mode=REQUIRED";

    $fields = parse_url($uri);

    // build the DSN including SSL settings
    $conn = "mysql:";
    $conn .= "host=" . $fields["host"];
    $conn .= ";port=" . $fields["port"];;
    $conn .= ";dbname=defaultdb";
    $conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

    try {
        $db = new PDO($conn, $fields["user"], $fields["pass"]);
        // Définir le mode d'erreur de PDO pour qu'il lance des exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Lire les données de la base de données
        $sql = "SELECT id, first, second, file FROM slideImage ORDER BY id DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Impossible de se connecter à la base de données : ' . $e->getMessage());
    }

    // Informations sur le dépôt GitHub
    $githubRepo = 'dure-dure/triumphantwomen'; // Remplacez par votre dépôt
    $githubBranch = 'main'; // Branche par défaut, remplacez si nécessaire

  ?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>



<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>
  

  
  Triumphant Women

  
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="#" rel="tooltip" title="Designed by #Dure-dure" data-placement="bottom">
      Triumphant Women
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">

        <li class="nav-item my-auto ms-3 ms-lg-0">
          
          <a href="https://calendly.com/triumphantwomenint/coaching" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Book an appointment</a>
          
        </li>
        <li class="nav-item my-auto ms-3 ms-lg-0">
          
          <a href="./pages/sign-in.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Sign In</a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

  

  

    














<header class="header-2">
  <div class="background-image page-header min-vh-75 align-content-center position-relative" style="background-image: url('./assets/img/bg2.jpg'); background-size: cover;">
      <div class="overlay" style="background-color: rgba(0, 0, 0, 0.3); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 mx-auto">
                  <h4 class="text-white pt-3 mt-2">TRIUMPHANT WOMEN INTERNATIONAL MINISTRIES</h4>
                  <p class="lead text-white mt-5 text-sm">Helping women to:</p>
                  <ul class="text-white text-sm mt-4" style="list-style: square outside;">
                      <li>Experience the love of God.</li>
                      <li>Have intimacy with God and</li>
                      <li>Know their divine destiny.</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>



<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">




<section class="my-5 py-5">
  <div class="container">
    <div class="row align-items-center ">
      <div class=" col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class=" front-background background-image" style="background-image: url('./assets/img/rotating-card-bg-front.jpeg'); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3"></i>
                <h3 class="text-white"> <br /><br /><br /><br /> </h3>
                <p class="text-white opacity-0">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
              </div>
            </div>
            <div class="  back back-background background-image" style="background-image: url('./assets/img/rotating-card-bg-back.jpeg'); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white"> <br /><br /><br /><br /> </h3>
                <p class="text-white opacity-0"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">


        <div class="row justify-content-start mt-6">


            <h5 class="font-weight-bolder ">Prophetess Deborah TSOGBE</h5>
            <br /> <br />
            <p >is married and has three kids. She was called into prophetic ministry in 2016. 
              She started with the women intercession group called Triumphant Women. In 2019, 
              she did her first Women retreat. After the pandemic, in 2022, she started women's 
              conferences, and every year, she hosted women retreats and conferences, which has 
              been a tremendous blessing to many. In 2023, she made her first mission trip to Canada,  
              Montreal, where she hosted the Healing and Deliverance Crusade. The ministry is based in 
              Minnesota where she lives with her beautiful family.</p>

        </div>
      </div>
    </div>
  </div>
</section>




<!-- -------- START Content Presentation Docs ------- -->

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
        <i class="material-icons text-white text-3xl">flag</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5 class="text-white">Triumphant Women ministry Monthly programs</h5>
          <p class="text-white">On zoom <br />ID: 585 073 7300<br />CODE: 86 79 22<br /></p>
          <a  class="text-white icon-move-right">
            Our program
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex  p-2">
        <i class="material-icons text-gradient text-primary text-3xl">event</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>1st Friday of the month</h5>
          <p>From 8PM CST -9:30PM CST <br> Testimony and Talk Show.</p>
        </div>
      </div>
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-2 ">
        <i class="material-icons text-gradient text-primary text-3xl">event</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>2nd Friday of the month</h5>
          <p>From 8PM CST -9: 30PM CST <br> Teaching and Intercession prayer.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex  p-2">
        <i class="material-icons text-gradient text-primary text-3xl">event</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>3rd Friday of the month</h5>
          <p>From 8PM CST -9PM CST <br> Teaching and Intercession prayer.</p>
        </div>
      </div>
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-2 ">
        <i class="material-icons text-gradient text-primary text-3xl">event</i>
        <div class="ps-0 ps-md-3 mt-3 mt-md-0">
          <h5>4th Friday of the month</h5>
          <p>From 8PM cst-9:30 PM CST <br> Miracle Service.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -------- END Content Presentation Docs ------- -->


<section class="pt-6 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="mb-0">Trusted by over</h2>
        <h2 class="text-gradient text-primary mb-3">2,000+ Members and Followers</h2>
        <p class="lead">Many women love our coatching program and share the same vision as us. </p>
      </div>
    </div>
    <div class="row mt-6">
      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Do you need to receive advice on one of these area :</h6><br>

              </div>
            </div>
            <ul style="list-style: square outside">
              <li>Personal development</li>
              <li>Healing from Inner wound</li>
              <li>Deliverance from Trauma</li>
              <li>Counseling for Restoration</li>
              <li>Counseling for Marriage</li>
              <li>Knowing your identity</li>
              <li>Knowing your destiny - Calling - Purpose</li>
            </ul>
            <div class="rating mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 ms-md-auto">
        <div class="card bg-gradient-primary">
          <div class="card-body">
            <img class="rounded-3 w-100 h-25 opacity-10" src="./assets/img/logos/logoTW.jpg" alt="Logo">
<!--            <hr class="horizontal light mt-3">-->
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Don't hesitate to make an appointment</h6><br>

              </div>
            </div>
            <h6 class="mb-0 font-weight-bolder">You will receive a form to fill out in the order to 
              prepare for this meeting.You will receive the best tools to face your situation.</h6>
              <br>
              <a href="https://calendly.com/triumphantwomenint/coaching" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Click here !</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<section class=" mt-0 py-sm-7" id="download-soft-ui">


  <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
    <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-1">
    <div class="container py-3 postion-relative z-index-2 position-relative">
      <div class="row">
        <div class="col-md-7 mx-auto ">
          <h3 class="text-primary mb-0" style="font-weight: bold">Vision</h3>
          <p class=" text-white mt-2">Helping women to :  <br/></p>
          <p class="text-white mb-1" style="font-weight: bold"><ul style="color: white; list-style: square outside text-center">
            <li>Experience the love of God.</li>
            <li>Have intimacy with God and</li>
            <li>Know their divine destiny.</li>
            <li>1 John 5:4.</li>
            <li>Romans 5:5.</li>
          </ul></p>
          <h3 class="text-primary" style="font-weight: bold">Mission</h3>
          <p class="text-white mb-1" style="font-weight: bold"><ul style="color: white; list-style: square outside ">
            <li>Traveling to all the nations to bring gospel of Jesus Christ.</li>
            <li>Helping the little kids spiritually, emotionally and physically.</li>
          </ul></p>
        </div>
      </div>
    </div>
  </div>
  <div >
    <div class="card card-body blur1 shadow-blur mx-3 mx-md-4 mt-6 ">
      <div class="row ">
        <div class="col-md-12 mx-auto text-center">
          <h2 class="mb-0">Ways to give</h2>
          <hr class="horizontal dark mt-3">
        </div>
        <div class="col-md-4 position-relative">
          <div class="p-3 text-center">
            <h5 class="mt-3">Cash app</h5>
            <h1 class="text-gradient text-primary"><span id="state1" countto="952">952</span>-<span id="state5" countto="245">245</span>-6688</h1>

            <p class="text-sm font-weight-normal">$triumphantwomenint</p>
          </div>
          <hr class="vertical dark">
        </div>
        <div class="col-md-4 position-relative">
          <div class="p-3 text-center">
            <h5 class="mt-3">PayPal</h5>
            <h1 class="text-gradient text-primary"> <span id="state2" countto="952">952</span>-<span id="state4" countto="245">245</span>-6688</h1>

            <p class="text-sm font-weight-normal">Triumphantwomenint@gmail.com</p>
          </div>
          <hr class="vertical dark">
        </div>
        <div class="col-md-4">
          <div class="p-3 text-center">
            <h5 class="mt-3">Zelle</h5>
            <h1 class="text-gradient text-primary" ><span id="state3" countto="612">612</span>-<span id="state6" countto="644">644</span>-2514</h1>

            <p class="text-sm font-weight-normal">AMI Tsogbe</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="my-3">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
    <?php if ($images): ?>
      
      <?php  foreach ($images as $index => $item): ?>
        
            <div class="image-container">
                <?php
                // Construire l'URL de l'image sur GitHub
                $imageUrl = "https://raw.githubusercontent.com/$githubRepo/$githubBranch/assets/img/" . htmlspecialchars($item['file']);
                ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7 col-10 my-auto">
                        <br><h3 class="text-gradient text-primary mb-0"> You will like it and </h3>
                        <h3> You will have more.</h3>
                        <p class="pe-md-5 mb-4">
                        <?php echo htmlspecialchars($item['first']); ?>
                          
                          With the theme : <b> <?php echo htmlspecialchars($item['second']); ?></b>.<br><br><br>
                          <b>#Conference of Triumphant Women</b>
                        </p>
                
                      </div>
                      <div class="col-md-5 col-12 my-auto">
                      <img src="<?php echo $imageUrl; ?>" class="w-100 border-radius-lg shadow-lg" alt="<?php echo htmlspecialchars($item['first']); ?>">
                          <!-- <img class="w-100 border-radius-lg shadow-lg" src="./assets/img/TW-Zoom3.png" alt="Product Image"> -->
                
                      </div>
                    </div>
                  
                  </div>
                </div>
      <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune image trouvée.</p>
    <?php endif; ?>            
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
  </div>
</div>


</section>



<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->



<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto">
        <div>

          <h6 class="font-weight-bolder mb-4"> </h6>
        </div>

      </div>



      <div class="col-md-2 col-sm-6 col-6 mb-2">
        <div>
          <h6 class="text-sm  ">  </h6>
          <a href="#">
            <img src="./assets/img/logos/logoTW.png" class="mb-1  w-60" alt="main_logo">
          </a>
<!--          <ul class="flex-column ms-n3 nav">-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">-->
<!--                About Us-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">-->
<!--                Freebies-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">-->
<!--                Premium Tools-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">-->
<!--                Blog-->
<!--              </a>-->
<!--            </li>-->
<!--          </ul>-->
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-2">
        <div>
          <h6 class="text-sm">TRIUMPHANT WOMEN INTERNATIONAL MINISTRIES</h6>
<!--          <ul class="flex-column ms-n3 nav">-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://iradesign.io/" target="_blank">-->
<!--                Illustrations-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">-->
<!--                Bits & Snippets-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">-->
<!--                Affiliate Program-->
<!--              </a>-->
<!--            </li>-->
<!--          </ul>-->
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-2">
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="#" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="#" target="_blank">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link pe-1" href="#" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
<!--          <ul class="flex-column ms-n3 nav">-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">-->
<!--                Contact Us-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">-->
<!--                Knowledge Center-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">-->
<!--                Custom Development-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">-->
<!--                Sponsorships-->
<!--              </a>-->
<!--            </li>-->

<!--          </ul>-->
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-2 me-auto">
        <div>
          <h6 class="text-sm"></h6>
<!--          <ul class="flex-column ms-n3 nav">-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">-->
<!--                Terms & Conditions-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">-->
<!--                Privacy Policy-->
<!--              </a>-->
<!--            </li>-->

<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">-->
<!--                Licenses (EULA)-->
<!--              </a>-->
<!--            </li>-->
<!--          </ul>-->
        </div>
      </div>

      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> <a href="#">Triumphant Women</a> by
            <a href="https://api.whatsapp.com/send/?phone=%2B22893501993&text&type=phone_number&app_absent=0" target="_blank" >#Dure-dure</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


  

  
  















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>





<script src="./assets/js/plugins/choices.min.js"></script>



<script src="./assets/js/plugins/prism.min.js"></script>
<script src="./assets/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./assets/js/plugins/choices.min.js"></script>







<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    }
  }
  if (document.getElementById('state4')) {
    const countUp3 = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
    if (!countUp3.error) {
      countUp3.start();
    } else {
      console.error(countUp3.error);
    }
  }
  if (document.getElementById('state5')) {
    const countUp4 = new CountUp('state5', document.getElementById("state5").getAttribute("countTo"));
    if (!countUp4.error) {
      countUp4.start();
    } else {
      console.error(countUp4.error);
    }
  }
  if (document.getElementById('state6')) {
    const countUp5 = new CountUp('state6', document.getElementById("state6").getAttribute("countTo"));
    if (!countUp5.error) {
      countUp5.start();
    } else {
      console.error(countUp5.error);
    }
  }

  /* ----------------------------------------------------------- */
  /*  6. GOOGLE MAP
  /* ----------------------------------------------------------- */ 
        
  $('#mu-map').click(function () {
        $('#mu-map iframe').css("pointer-events", "auto");
    });
    
    $("#mu-map").mouseleave(function() {
      $('#mu-map iframe').css("pointer-events", "none"); 
    });
    
</script>


























</body>

</html>
