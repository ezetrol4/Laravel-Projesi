<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  </head>
<style>
      .logo{
  width: 150px;
  height: 50px;
  } 

  body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.currency {
    margin: 0;
}

.currency section {
    width: 460px;
    height: 100px;
    margin: 0;
    padding: 0;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
}

.currency section.loading {
    background: url('/images/loading.gif') center center no-repeat;
    position: relative;
}

.currency section.loading div {
    display: none;
}

.divTable {
    display: table;
    width: 100%;
    height: 100%;
    border: tan 1px outset;
    font-size: 18px;
    color: whitesmoke;
    text-align: center;
}

.divTableRow {
    display: table-row;
}

.divTableHeading {
    display: table-header-group;
    font-weight: bold;
    background-color: #90afc5;
    color: rgb(68, 68, 68);
    font-size: 15px;
}

.divTableCell,
.divTableHead {
    display: table-cell;
    padding: 3px 10px;
}

.divTableBody {
    display: table-row-group;
    background-color: #336b87;
}

#currencyName {
    text-align: left;
}
</style>


  <body> 
<nav class="navbar navbar-dark bg-dark ">
  <div class="container-fluid">
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Cari İşlemler</a>
  <a href="#">Stok İşlemleri</a>
  <a href="#">Kur Girişleri</a>
  <a href="#">Tanımlamalar</a>
  <a href="#">Performans Raporları</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="https://pusulanet.net/img/logo-footer-dark.png" alt="Logo" class="logo" ></span>

<div class="topnav" style="margin-right: 50%">
  <div class="search-container">
    <form action="/action_page.php" style="margin: left 50px;">
      <input type="text" placeholder="Search.." name="search" ">
      <button class="submit"><i class="bi bi-search" "></i></button>
    </form>
  </div>
</div>

<script type="text/javascript">
var kurlist=",ONS,USD,EUR,GRA,";
var genislik=200;
var bbg="FFAD00";
var yr="4D4D4D";
var zbg="FFFFFF";
var br="DEDEDE";
var by="Altın Piyasa"
</script>
<ins data-client-id="mb-095720171805"></ins>
<a id="bplnk" href="https://www.altinpiyasa.com">Altın Fiyatları</a>
<script type="text/javascript" src="https://www.altinpiyasa.com/eklenti/eklenti-min.js"></script>
</nav>

<p>Deneme</p>

</body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

    </html>