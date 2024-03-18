<?php
include "../inc/header.php"
?>
<body>
<div class="container">
<div class="container mt-5">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <!-- begin van de card -->
        <div class="card text-center">
          <div class="card-header">
            Eenheden omreken oefenapp
          </div>
          <div class="card-body">
            <select id="dim-select" class="form-select">
              <option value="1">1D (lengte)</option>
              <option value="2">2D (oppervlakte)</option>
              <option value="3">3D (inhoud)</option>
            </select>
            <!-- hier weer een row met 3 cols -->
            <div class="row mt-2">
              <div class="col-5">
                <div class="input-group mb-3">
                  <input id="inp_left" type="text" class="form-control" placeholder="opgave" disabled>
                  <span id="eenh_left" class="input-group-text"></span>
                </div>
              </div>
              <div class="col-1">=</div>
              <div class="col-6">
                <div class="input-group mb-3">
                  <input id="inp_right" type="text" class="form-control" placeholder="antwoord">
                  <span id="eenh_right" class="input-group-text"></span>
                </div>
              </div>
            </div>
            <!-- einde row met 3 cols-->
            <div class="row">
              <div class="col text-start">
                <a href="#" class="btn btn-primary" onclick="makeProblem()">Genereer</a>
              </div>
              <div class="col text-end">
                <a href="#" class="btn btn-success" onclick="checkSolution()">Check</a>
              </div>
            </div>
          </div>
          <div class="card-footer text-body-secondary">
            &copy; eenheidrekending
          </div>
        </div>
        <!-- eind van de card -->

      </div>
      <div id="credits" class="col-3" style="font-size: x-large;"></div>
    </div>
  </div>
  <!-- einde grid -->
    <!-- decimal.js moet voor script.js worden geladen -->
  <script src="decimal.js" type="text/javascript"></script>
  <script src="script.js" type="text/javascript"></script>
</body>
