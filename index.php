<?php
?>

<!DOCTYPE html>
<html lang="es">


<!-- Material Design Lite -->

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <!-- Material Design icon font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="mypdf.css" type="text/css" rel="stylesheet" media="mpdf" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<body>
  <!-- Simple header with scrollable tabs. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header" id="header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <img src="img/logo.png" width="60px" class="img-fluid" alt="...">
        <span class="mdl-layout-title ms-4">Div. COMUNICACIONES TRONCALIZADAS-Control General de Rutinas</span>
      </div>
      <!-- Tabs -->
      <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
        <a href="#scroll-tab-1" class="mdl-layout__tab">Control de Herramientas</a>
        <a href="#scroll-tab-2" class="mdl-layout__tab">Valija de Herramientas A</a>
        <a href="#scroll-tab-3" class="mdl-layout__tab">Valija de Herramientas B</a>
        <a href="#scroll-tab-4" class="mdl-layout__tab">Zonewatch</a>
        <a href="#scroll-tab-5" class="mdl-layout__tab">Rutina Control de Sistemas</a>
        <a href="#scroll-tab-6" class="mdl-layout__tab">Master Site</a>
      </div>
    </header>

    <main class="mdl-layout__content">
      <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
        <div class="page-content">
          <?php
          include "control.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar PDF
            </button>
          </form>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-2">
        <div class="page-content">
          <?php
          include "valija A.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar pdf
            </button>
          </form>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-3">
        <div class="page-content">
          <?php
          include "valija B.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar PDF
            </button>
          </form>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-4">
        <div class="page-content">
          <?php
          include "zonewatch.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar PDF
            </button>
          </form>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-5">
        <div class="page-content">
          <?php
          include "sistemas.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar PDF
            </button>
          </form>
        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-6">
        <div class="page-content">
          <?php
          include "mastersite.html";
          ?>
          <form action="pdf.php" method="post">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="pdf">
              Descargar PDF
            </button>
          </form>
        </div>
    </main>
  </div>
  
</body>

</html>