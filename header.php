<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SinPhyuKyun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <img src="img/logo_red.ico" alt="">
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/index.php") { ?> active <?php   }  ?> " >Home</a>
                    <a href="about.php" class="nav-item nav-link <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/about.php") { ?> active <?php   }  ?>">About Us</a>
                    <a href="service.php" class="nav-item nav-link <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/service.php") { ?> active <?php   }  ?>">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company</a>
                        <div class="dropdown-menu m-0">
                            <a href="background.php" class="dropdown-item <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/background.php") { ?> active <?php   }  ?>">Background Story</a>
                            <a href="product.php" class="dropdown-item <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/product.php") { ?> active <?php   }  ?>">Our Product</a>
                            <a href="team.php" class="dropdown-item <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/team.php") { ?> active <?php   }  ?>">Our Team</a>
                            <a href="achievement.php" class="dropdown-item <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/achievement.php") { ?> active <?php   }  ?>">Achievements</a>
                            <!-- <a href="testimonial.php" class="dropdown-item">Partners</a> -->
                            <!-- <a href="404.php" class="dropdown-item">404 Page</a> -->
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/contact.php") { ?> active <?php   }  ?>">Contact Us</a>
                </div>
                <!-- <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Free Quote</a> -->
            </div>
        </nav>

        <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/index.php") { ?> 
            <div class="container-fluid">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/blah.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-primary">Sin Phyu Kyun</h5>
                                <!-- <p>Some representative placeholder content for the first slide.</p> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/blah2.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-primary">Sin Phyu Kyun</h5>
                                <!-- <p>Some representative placeholder content for the second slide.</p> -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
        </div>
        </div>
        <!-- Navbar & Hero End -->
        <?php   }  ?> 

                 <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/index.php") { ?> 

                    <?php   } else {  ?> 

                    <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/about.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">About Us</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/achievement.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Achievement</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/background.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Background</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/contact.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Contact Us</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/product.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Product</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/service.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Services</h1>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/team.php") { ?> 
                                <h1 class="text-white animated zoomIn mb-3">Team</h1>
                            <?php   }  ?> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/about.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/achievement.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Achievement</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/background.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Background</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/contact.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/product.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Product</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/service.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                            <?php   }  ?> 
                            <?php if($_SERVER['SCRIPT_NAME']=="/sinphyukyun/team.php") { ?> 
                                <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
                            <?php   }  ?> 
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <?php } ?>

        

        <!-- Navbar & Hero End -->

        

