<?php
require_once("inc/header.php")
?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
<?php
require_once("inc/menu.php")
?>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Not Found</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Hazardous service</h6>
                    <h1 class="mb-5">Hazardous waste management </h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid qui, quaerat quod ut sed, provident cupiditate inventore, adipisci recusandae quibusdam saepe dolor ipsam. Alias error saepe ipsam modi id doloribus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nisi modi ex, expedita laudantium possimus dolore officiis enim deleniti quam earum inventore alias doloremque iusto sed eum voluptatibus quibusdam consequatur.
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="images/ship8.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


<?php
require_once("inc/footer.php");
?>
<?php
require_once("inc/script.php");
?>
</body>

</html>