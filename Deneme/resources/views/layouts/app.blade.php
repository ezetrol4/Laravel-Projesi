<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deneme Project</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
  .logo{
  width: 150px;
  height: 50px;
  margin-left: 45%;
  }

  #carouselExampleFade .carousel-item{
    object-fit:contain;
    object-position: center;
    height: 75vh;
  }
  h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}


.center_table {
  margin-left: auto;
  margin-right: auto;
}


  </style>    
  </head>

  <body>

  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <img src="https://pusulanet.net/img/logo-footer-dark.png" alt="Logo" class="logo" > 

  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left:-140%">
  Login
  </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="welcome">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Programs</a></li>
              <li><a class="dropdown-item" href="#">Device</a></li>
              <li><a class="dropdown-item" href="#">Suppllies</a></li>
              <li><a class="dropdown-item" href="#">Tecnical Services</a></li>
              <li><a class="dropdown-item" href="#">Drives and Setups</a></li>
              <li></li>
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="welcome">Contact Pusula</a>
            </li>
        </ul>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=353&amp;height=380&amp;hl=en&amp;q=Pusula net&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:353px;height:380px;}.gmap_canvas {overflow:hidden;background:none!important;width:353px;height:380px;}.gmap_iframe {width:353px!important;height:380px!important ;}</style></div>
    </div>
    <i class="bi bi-telephone-inbound" style="margin-left: 30%;">   0212 255 51 44</i>
  </div>
</nav>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ url ('login')}}">
            @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Users Code</label>
            <input type="label" class="form-control" id="exampleInputUser" aria-describedby="UsersHelp" name="email">
            <div id="UsersHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          <button class="btn btn-success">Submit</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
  Register
</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url ('register') }}">

        @csrf
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-labe2">Password Again</label>
        <input type="password" class="form-control" id="exampleInputPassword2">
      </div>
      <button type="submit" class="btn btn-success" id="sb">Submit</button>
    </form>
      </div>  
    </div>
  </div>
</div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" class="Slider"></script>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.istockphoto.com/photos/in-data-center-male-it-technician-running-maintenance-programme-on-a-picture-id1148195855?k=20&m=1148195855&s=612x612&w=0&h=5LvaPa0pSOpkmNpn6zAU4aWgNxCKUblOy5KzAIhu0OI=" class="d-block w-100" alt="Deneme">
      <div class="carousel-caption d-none d-md-block">
        <h5>The most secure database in Turkey</h5>
        <p>Keep your value data safe and under your control at all times</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/photos/handsome-male-client-signing-document-on-a-meeting-with-real-estate-picture-id1144821348?k=20&m=1144821348&s=612x612&w=0&h=QDzWQk2w_edG10V6AE170XyUEQldK4H33QgiSdTf9yc=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>We are with you whenever you need</h5>
        <p>Our support units are always at your fingertips</p>
      </div>    
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/photos/global-gold-price-commodity-concept-picture-id891624642?k=20&m=891624642&s=612x612&w=0&h=e82EoIwYWAK0qeUmF8cVWrMSMYAFmlcBDFkyIhunpj8=" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best Gold Trade App in the Turkey</h5>
        <p>live exchange, the best in terms of speed and security</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="p-3 mb-2 bg-dark text-white bg-opacity-75"><a style="margin-left: 45%;">REFERENCES</a></div>

<div class="container">
   <section class="customer-logos slider">
      <div class="slide"><img src="data:image/png;base64,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"></div>
      <div class="slide"><img src="https://pbs.twimg.com/profile_images/654672386055258113/BKPKBnxo_400x400.png"></div>
      <div class="slide"><img src="https://www.marmarapark.com/fileadmin/user_upload/GLOBAL/brand_stores/logos/zendiamond.jpg"></div>
      <div class="slide"><img src="https://bayiliklistesi.com/uploads/cache/59e884457bd87_1-500x500.png"></div>
      <div class="slide"><img src="https://i.pinimg.com/280x280_RS/9e/7c/d9/9e7cd96f54146c9f14bfe25cb6fef8bb.jpg"></div>
      <div class="slide"><img src="https://ikud.org.tr/wp-content/webpc-passthru.php?src=https://ikud.org.tr/wp-content/uploads/2021/08/d5f5d532-30d2-4193-b668-f227c0dbf0ac-1.jpg&nocache=1"></div>
      <div class="slide"><img src="https://www.marmarapark.com/fileadmin/user_upload/GLOBAL/brand_stores/logos/bluediamond.jpg"></div>
      <div class="slide"><img src="data:image/png;base64,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"></div>
   </section>
</div>

<br>
<br>


<table class="table table-sm">
  
  <div class="container text-center" style="margin-left: 60%px; width: 60%">
 
    <div class="row row-cols-2 "  style="padding: 1px ">
      <div class="col" style="border: 2px solid black; background-color:grey "><img src="https://pusulanet.net/images/ExtImg/toptan-894959.png" alt="" style="width: 25%;">
        <h1 style="color: white;">WHOLESALE</h1>
        <hr style="color: white;">
        <ul style="color: white;">
          <li>Customer, Wholesaler, Expense etc. Customer Balance</li>
          <hr style="color: white;">
          <li>Customer Delayed List</li>
          <hr style="color: white;">
          <li>Separate Bag Attached</li>
          <hr style="color: white;">
          <li>Instant Balance Sheet and Profitability Analyzes</li>
          <hr style="color: white;">
          <li>Bar Code System and Hand Terminal Integrated Opportunity</li>
          <hr style="color: white;">
          <li>Rayon System</li>
          <hr style="color: white;">
          <li>Multi Safe</li>
        </ul>
      </div>
      <div class="col" style="border: 2px solid black; background-color:grey"><img src="https://pusulanet.net/images/ExtImg/perakende-242760.png" alt="" style="width: 25%;">
        <h1 style="color: white;">RETAIL</h1>
        <hr style="color: white;">
        <ul style="color: white;">
          <li>Customer, Wholesaler, Expense etc. Customer Balance</li>
          <hr style="color: white;">
          <li>Stock Follow</li>
          <hr style="color: white;">
          <li>Quick Barcode</li>
          <hr style="color: white;">
          <li>Gold, Diamond, Silver, Clock and so on. Product Barcode</li>
          <hr style="color: white;">
          <li>Bank and POS Devices</li>
          <hr style="color: white;">
          <li>Commission Rates</li>
          <hr style="color: white;">
          <li>RFID Chip Label Barcode System</li>
        </ul>
      </div>



  </div>
</table>

  </body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  function alertFunction(e){

    swal({
  title: "Your Registration Was Successful!",
  text: "Your Registration Was Successful!",
  icon: "success",
  button: "Ok",});
  }
   $(document).ready(function(){
     $('.customer-logos').slick({
         slidesToShow: 6,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 1500,
         arrows: false,
         dots: false,
         pauseOnHover: false,
         responsive: [{
             breakpoint: 768,
             settings: {
                 slidesToShow: 4
             }
         }, {
             breakpoint: 520,
             settings: {
                 slidesToShow: 3
             }
         }]
     });
 });
$('#sb').click(function(){

  swal({
  title: "Your Registration Was Successful!",
  text: "Your Registration Was Successful!",
  icon: "success",
  button: "OK!",
});
});

</script>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://tr-tr.facebook.com/PusulaYazilim/" role="button"
        ><i class="bi bi-facebook"></i></a>

      <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCRkcEHKbWCSlmoxK3c6ZKKw" role="button"
        ><i class="bi bi-youtube"></i>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/pusulayazilim/" role="button"
        ><i class="bi bi-twitter"></i>
      </a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/pusulayazilim/" role="button"
        ><i class="bi bi-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/pusula-yazilim/mycompany/" role="button"
        ><i class="bi bi-linkedin"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href=""><img src="https://pusulanet.net/img/logo-footer-dark.png" alt="Logo" class="logo" style="margin-left: 0px;" > </a>
  </div>
  <!-- Copyright -->
</footer>


</html>