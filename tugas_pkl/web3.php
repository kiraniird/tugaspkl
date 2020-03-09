<!DOCTYPE html>
<html>
<title>Annyeong Pet's</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
<style>
body,h1,h2{font-family: "Courgette", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.bgimg {background-image: url("cc.jpg")}
.bgimg2 {background-image: url("cat.jpg")}
</style>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Annyeong Pet's</h1>
    <h2>SMK BPI Bandung</h2>
    <h2><b>Jln.Burangrang no.8</b></h2>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="http://localhost/tugas_pkl/web3.php" style="width:25%" class="w3-bar-item w3-button">Home</a>
    <a href="http://localhost/tugas_pkl/web5.php" style="width:25%" class="w3-bar-item w3-button">Jenis Kucing</a>
    <a href="http://localhost/tugas_pkl/web4.php" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Pet's Food</a>
  </div>
</div>





<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>Profil Saya!</h1>
  <p class="w3-xlarge">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px">Profil</button>
  </p>
</div>

<!-- RSVP modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
    <img src="4.jpg" style="width:50%;margin:32px 0">
      <h1 class="w3-wide">Kirani Rizkya Desta</h1>
      <h5><i>HTML,PHP,JS,FRAMEWORK</i></h5>
      <h6><i>Bandung, 19 Desember 2002</i></h6>
      <img src="kir.png" style="width:30%;margin:32px 0">
      <div class="w3-row">
        <div class="w3-half">
         <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p> <a href="http://localhost/tugas_pkl/web3.php" title="W3.CSS" target="_blank" class="w3-hover-text-green">Annyeong Pet's</a></p>
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
