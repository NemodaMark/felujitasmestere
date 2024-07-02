<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="imgs\logo_light_no_title.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>felujitasmestere</title>

    <!-- bootstrap link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- bootstrap link end -->
</head>
<body>

  <!-- style start -->
    <style>
      @font-face{
        font-family: "Roxborough_CF";
        src: url("visual_assets\Roxborough_CF.ttf") format("truetype");
      }

      html {
        scroll-behavior: smooth;
      }

      .banner{
            height: 30rem;
            /* Multiple background images */
            background-image: 
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('visual_assets/workphotos/work_in_progress/work_in_progress_16.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .reff{
            height:17rem;
            width: 17rem;
            object-fit: cover;
            border-radius: 25px;
        }
        .reff-x{
            height:8rem;
            width: 8rem;
            object-fit: cover;
            border-radius: 20px;
        }

    </style>
  <!-- style end -->
    <div class="alert alert-warning text-center" role="alert">Vállalkozásunk készen áll az <a href="homerenow2024.php" class="alert-link">Otthonfelújítási Támogatás</a> keretében történő munkák elvégzésére!</div>
    <!-- navbar start -->
    <nav class="navbar bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="visual_assets\logos\logo_dark_no_title.png" style="width: 6rem; height: 6rem;" alt="Felujítás mestere"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="font-family:Roxborough_CF; font-size: 2.6rem">Felújítás mestere</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
            <a class="nav-link active fs-5 mb-2" aria-current="page" href="homerenow2024.php">Otthonfelújítási támogatás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Főoldal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Elérhetőségeik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="refferences.php">Refferenciáink</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Szolgálatatásaink</a>
          </li>
        </ul>
        <div class="d-grid gap-2 col-8 mx-auto my-5">
          <a name="" id="" class="btn btn-lg btn-primary" href="contact.php" role="button">Kérjen ajánlatot most!</a>
    </div>
      </div>
    </div>
  </div>
</nav>
     <!-- navbar end -->
