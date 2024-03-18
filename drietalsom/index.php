<?php
include "../inc/header.php";
?>
    <main class="container">
    
    <!--  eerst weer een hoofdgrid maken -->
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card text-center mt-5">
                <div class="card-header">
                    Som-som-magie
                </div>
                <div class="card-body">
                  <!-- hier weer een grid met 4 rijen en 4 kolommen-->
                  <!-- id's zijn bedacht op basis van Excel-cellen -->
                    <div class="row">
                        <div class="col"><input id="inp_A1" type="text" class="form-control text-center" value="12"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"><input id="inp_D1" type="text" class="form-control text-center" value="8"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="opl_B2" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="opl_C2" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="inp_D2" type="text" class="form-control" value="14"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="opl_B3" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="opl_C3" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="inp_D3" type="text" class="form-control text-center" value="6"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="inp_B4" type="text" class="form-control text-center" value="10"></div>
                        <div class="col"><input id="inp_C4" type="text" class="form-control text-center" value="10"></div>
                        <div class="col"></div>
                    </div>
                  <!-- einde grid met 4 rijen en 4 kolommen -->
                  <a href="#" class="btn btn-primary mt-3" onclick="solveProblem()">Los op</a>
                </div>
                <div class="card-footer text-body-secondary">
                  &copy; Tim Schoot | 2023
                </div>
              </div>

        </div>
        <div class="col"></div>
    </div>


</main>  
  </body>
  <script src="script.js" ></script>
</html>

