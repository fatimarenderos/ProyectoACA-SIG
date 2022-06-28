<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<body>

<nav class="w3-bar w3-black">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="login/login.php">Login </a>
      <a class="nav-item nav-link" href="login/signup.php">Sign Up</a>
    </div>
  </div>


  <!-- Slide Show -->
<section>
  <img class="mySlides" src="https://www.kienyke.com/sites/default/files/styles/amp_1200x675_16_9/public/2021-04/plantar-arbol.jpeg?itok=X55RpSDw" style="width:100%; height: 600px">
  <img class="mySlides" src="http://miperrocomebarf.com/wp-content/uploads/2020/05/germinados-para-perros.jpg" style="width:100%; height: 600px">
  <img class="mySlides" src="https://elroldanense.com/wp-content/uploads/2020/09/plantacion-arbol.jpg" style="width:100%; height: 600px">
</section>

<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">Forestation Tracker</h2>
  <p class="w3-opacity"><i>¡Siembra un árbol siembra vida!</i></p>
  <h3>¿Poe qué deberíamos reforestar?</h3>
  <p class="w3-justify">
  Los bosques cumplen una serie de funciones vitales que garantizan el equilibrio medioambiental del planeta: nos suministran de los recursos naturales, regulan el ciclo del agua, protegen al suelo frente a la erosión, generan oxígeno y almacenan dióxido de carbono. Por tanto, cuidar de ellos y de sus ecosistemas es esencial para un futuro sostenible. Porque sin bosques, al igual que sin agua, la vida en la Tierra no sería posible.

    Promover iniciativas que apuesten por la reforestación es una forma de luchar contra el cambio climático y recuperar el 
    verde de nuestros paisajes. Además, la plantación de árboles ofrece multitud de beneficios para el medio ambiente ya que 
    permiten:

  </p>
  <ul>
    <li type="circle">Mitigar los efectos del cambio climático.</li>
    <li type="circle">Contribuir a mejorar la calidad del aire al ser productores de oxígeno y captadores de dióxido de carbono.</li>
    <li type="circle">Crear hábitats naturales que fomentan la mejora de la biodiversidad.</li>
    <li type="circle">Fomentar la plantación de árboles ayuda a mantener el ciclo del agua.</li>
    <li type="circle">Mejorar la fertilidad de los suelos de los que dependen no solo la población sino también miles de especies vegetales y animales.</li>
    <li type="circle">Luchar contra la desertificación.
</li>

</ul>
</section>



<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</body>
</html>