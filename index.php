<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FelújításMestere</title>
    <link rel="icon" type="image/x-icon" href="imgs/3.ico">
    <!-- Linking start -->
    <!-- Bootstrap start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap end -->
    <style>

        html {
        scroll-behavior: smooth;
        scroll-padding: 10rem;
        }

        body {
            margin: 0;
            font-family: Serif;
            background-color: #fbfbf2; /* Set your site's background color */
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }

        #myVideo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: -1;
            filter: brightness(45%);
        }

        h5{
            font-size: 24px;
        }

        .content {
            margin-top: 100vh;
            padding: 20px;
        }

        /* Navbar */
        .navbar-brand img {
            width: 90px;
            height: 90px;
        }

        .navbar-nav .nav-link {
            font-size: 20px;
        }

        /* Footer */
        footer {
            background-color: #deded5;
            width: 100%;
            position: relative;
        }

        .header-text{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                white-space: nowrap;
                text-align: center;
                font-size: 400px; 
            }

        /* Responsive adjustments */
        @media screen and (max-aspect-ratio: 9/16) {
            #myVideo {
                height: 100%;
                width: auto;
            }

            .header-text{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                text-align: center;
                font-size: 400px; /* Responsive font size */
                white-space: normal;
            }
            
        }

        /* Solution 2 */
        @media screen and (max-aspect-ratio: 16/9) {
          .col-3 {
            width: 100%;
          }
        }
    </style>
    <!-- Linking end -->
    <script>
        // Check if the aspect ratio is 9:16 or smaller
        if (window.matchMedia("(max-aspect-ratio: 9/16)").matches) {
            // Get the header text element
            var headerText = document.getElementById("headerText");

            // Update the text content with a line break after ":"
            headerText.innerHTML = "FelújításMestere:<br>Az otthonod védelmezője";
        }
    </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16451351326"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-16451351326');
        </script>

        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16451351326">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16451351326');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16451351326"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16451351326');
</script>

</head>
<body>

<!-- <video autoplay muted loop id="myVideo">
    <source src="imgs/renovating.mp4" type="video/mp4">
</video> -->

<!-- Navbar start -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="imgs\5-removebg-preview.png" alt="" height="180px" width="180px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="index.php">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="galery.php">Galéria</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end -->
<div class="container-fluid">
    <video autoplay muted loop id="myVideo" class="video-responsive">
        <source src="imgs/renovating.mp4" type="video/mp4">
    </video>
    <div class="header-text d-flex justify-content-center align-items-center">
    <h2 class="text-light text-center">FelújításMestere: Az otthonod védelmezője</h2>
</div>
</div>
<!-- Content -->
<div class="content">
    <div class="container">
        <!-- Content start -->
        <style>
    .col-md-4 img {
        max-width: 100%; /* Set the maximum width of the image to 100% of its container */
        height: auto; /* Let the height adjust automatically to maintain aspect ratio */
        border-radius: 5px;
        border: 0.25px solid #eddcd2;

        box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -webkit-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        -moz-box-shadow: 9px 9px 10px 2px rgba(198,172,143,0.76);
        
    }
    th{
        font-size: 22px;
        text-align: center;
    }
</style>
<!-- Content start -->
<div class="row my-4 mx-4">
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Kik vagyunk?</h1>
            <h5 class="text-muted">FelújításMestere egy meghatározó szereplő az építőipari és renovációs szektorban, mely már 26 éve szolgálja ügyfeleit magas színvonalú szolgáltatásaival. A cég pályafutását külföldön kezdte, majd a külföldi trendeket sikeresen átültette Magyarországra, így váltva a hazai piacon elismert szakértővé és megbízható partnerré.</h5>
        </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/421114613_1096504034718153_667732951181172287_n.jpg" alt="" class="img-fluid">
    </div>
</div>

<!-- Tapasztalat és Megbízhatóság -->
<div class="row my-4 mx-4">
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/420647910_1324796294785791_6890863639570174506_n.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Tapasztalat és Megbízhatóság</h1>
            <h5 class="text-muted">26 Éves Tapasztalat: FelújításMestere 26 éve áll az építőipari és renovációs szakma élén. Ebben az időszakban számos kihívással találkozt

ak és sikeresen megoldották azokat, így megszerzették a szakma elismerését és bizalmát.</h5>
        </div>
    </div>
</div>

<!-- Külföldi Tapasztalatok Magyarországon -->
<div class="row my-4 mx-4">
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Külföldi Tapasztalatok Magyarországon</h1>
            <h5 class="text-muted">Külföldi Trendek Hazai Bevezetése: A cég külföldön szerzett tapasztalatait és legújabb trendjeit sikeresen adaptálta a magyar piachoz. Ezáltal olyan innovatív megoldásokat és módszereket vezettek be, amelyek korszerűsítették a hazai építőipart és renovációs szakmát.</h5>
        </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/418841509_1536794176861774_5817959290534770590_n.jpg" alt="" class="img-fluid">
    </div>
</div>

<!-- Szakértő Csapat -->
<div class="row my-4 mx-4">
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/420537766_902696098163406_6904817669235727220_n.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Szakértő Csapat</h1>
            <h5 class="text-muted">Kiváló Szakemberek: FelújításMestere büszkén állítja, hogy csapatában olyan kiváló szakemberek dolgoznak, akik rendelkeznek a szükséges tapasztalattal és szaktudással az építőipar és renováció terén. Minden projektjüket a legmagasabb színvonalon végzik el.</h5>
        </div>
    </div>
</div>

<!-- Ügyfélközpontúság -->
<div class="row my-4 mx-4">
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Ügyfélközpontúság</h1>
            <h5 class="text-muted">Ügyfél Elégedettség: A FelújításMestere számára az ügyfelek elégedettsége az elsődleges cél. Minden munkájukat az ügyfél igényeire és elvárásaira szabják, hogy biztosítsák a maximális elégedettséget és hosszú távú kapcsolatot építsenek ki velük.</h5>
        </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/419018240_393289093228807_4914064079930566707_n.jpg" alt="" class="img-fluid">
    </div>
</div>

<!-- Innováció és Minőség -->
<div class="row my-4 mx-4">
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="imgs/workphotos/419046297_356794617209758_6369276999533124178_n.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-md-8 my-4 d-flex align-items-center">
        <div>
            <h1 class="my-4 mx-4">Innováció és Minőség</h1>
            <h5 class="text-muted">Innovatív Megoldások: A cég folyamatosan keresi az újításokat és az innovatív megoldásokat az építőipar és renováció terén. Így biztosítják, hogy mindig a legmagasabb minőségű szolgáltatásokat nyújtsák ügyfeleik számára. <br> FelújításMestere nem csupán egy építőipari és renovációs cég, hanem egy olyan vállalkozás, amely elkötelezett az állandó fejlődés és a kiválóság iránt, miközben ügyfeleik igényeire és elvárásaira fókuszálva szolgálja ki őket.</h5>
        </div>
    </div>
</div>


<!-- Tables -->
<div class="row my-3">
    <h3 class="text-center">Szivesen vállalunk</h3>
    <div class="col-3"></div>
    <div class="col-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Magán lakások</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Hideg/Meleg burkolás</td></tr>
                <tr><td>Festés</td></tr>
                <tr><td>Mázolás</td></tr>
                <tr><td>Tapétázás</td></

tr>
                <tr><td>Kőműves területekis</td></tr>
                <tr><td>Kisebb/Nagyobb javítások és felújjítások</td></tr>
            </tbody>
        </table></div>
    <div class="col-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cégek és irodák</th>
                </tr>
            </thead>
            <tbody>
            <tr><td>Hideg/Meleg burkolás</td></tr>
                <tr><td>Festés</td></tr>
                <tr><td>Mázolás</td></tr>
                <tr><td>Tapétázás</td></tr>
                <tr><td>Kőműves területekis</td></tr>
                <tr><td>Kisebb/Nagyobb javítások és felújjítások</td></tr>
            </tbody>
        </table>
    </div>
    <div class="col-3"></div>
</div>
                   <!-- Content end -->
                   </div>
        </div>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="d-flex flex-column">

    <footer class="mt-auto" style="background-color: #deded5;">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">rólunk</h5>
          <p> <small>
          Homlokzat Hőse egy elkötelezett lakásfelújító cég, mely a minőségi munka és az ügyfél elégedettsége iránti elkötelezettséget képviseli. 
          Tapasztalt csapatunk odaadással és precizitással dolgozik az ügyfelek elképzeléseinek megvalósításán. 
          Szolgáltatásaink közé tartozik festés, beltéri átalakítások, fürdőszobafelújítások és konyhai újítások tervezése és kivitelezése. 
          Bízzon meg a Homlokzat Hősében, ha minőségi munkát és megbízható szolgáltatást keres!
          </small> </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">elérhetőségeink</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="" style="color: #4f4f4f; text-decoration: none;"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                +36 30 443 4011
            </a>
            </li>
            <li class="mb-1">
              <a href="" style="color: #4f4f4f; text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>
                gyulaa.hendre@gmail.com
            </a>
            </li>
            <li class="mb-1">
              <a href="https://www.facebook.com/hendre.gyula?locale=hu_HU" target="blank" style="color: #4f4f4f; text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg> 
                facebook
              </a>
            </li>
            <li>
              <a href="#!" style="color: #4f4f4f; text-decoration: none;"></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-1" style="letter-spacing: 2px; color: #818963; text-decoration: none;">hívható</h5>
          <table class="table table-striped" style="border-radius: 10px;">
            <tbody>
              <tr>
                <td>Hét - Pén:</td>
                <td>8:00 - 19:00</td>
              </tr>
              <tr>
                <td>Szombat:</td>
                <td>8:00 - 15:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-dark" href="">Hendre Gyula</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
</body>
</html>
```