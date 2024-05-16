<?php
include "../inc/header.php";
?>
<link rel="stylesheet" href="style.css">
 
<div class="container">
        <div class="row">
            <div class="col-3">
                <!-- linker card -->
                <div class="card" style="margin-top: 200px">
                    <div class="card-header">
                      Oud
                    </div>
                    <div class="card-body">
                        Denk ook aan:<br>
                        <ul>
                            <li>zonder of exclusief BTW</li>
                            <li>zonder of exclusief korting</li>
                        </ul>
                    </div>
                    <div class="card-footer text-body-secondary">
                      <input id="oud" class="form-control is-invalid" onchange="checkInput()">
                    </div>
                  </div>
                <!-- einde linker card -->
            </div>
            <div class="col-4">
                <select id="soort" class="form-select mt-4 mb-3 is-invalid" onchange="checkInput()">
                    <option value="" selected>Kies....</option>
                    <option value="0">van</option>
                    <option value="1">toename</option>
                    <option value="2">afname</option>
                  </select>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Percentage</span>
                    <input id="percentage" type="text" class="form-control is-invalid" onchange="checkInput()">
                    <span class="input-group-text">%</span>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Vermenigvuldigingsfactor: x</span>
                    <input id="vFactor" type="text" class="form-control" disabled>
                  </div>
                  <img src="img/1184.png" alt="" class="img-fluid">
                  <div class="input-group mb-3">
                    <span class="input-group-text">Deelfactor: /</span>
                    <input id="dFactor" type="text" class="form-control" disabled>
                  </div>
                  <div class="d-grid">
                    <button id="losop_btn" class="btn btn-success" disabled onclick="solveProblem()">Los op</button>
                  </div>
            </div>
            <div class="col-3">
                <!-- rechter card -->
                <div class="card" style="margin-top: 200px">
                    <div class="card-header">
                      Nieuw
                    </div>
                    <div class="card-body">
                        Denk ook aan:<br>
                        <ul>
                            <li>met of inclusief BTW</li>
                            <li>met of inclusief korting</li>
                        </ul>
                    </div>
                    <div class="card-footer text-body-secondary">
                      <input id="nieuw" class="form-control is-invalid" onchange="checkInput()">
                    </div>
                  </div>
                <!-- einde rechter card -->
            </div>

        </div>
    </div>
    <script src="script.js"></script>
  </body>