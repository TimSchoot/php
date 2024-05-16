<?php
include "../inc/header.php";
?>

<link rel="stylesheet" href="style.css">

<div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <main id="sudoku">

                  </main>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-success " onclick="newProblem()">Genereer</button>
                <div class="row">
                    <div class="col mt-5"><button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(1)">1</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(2)">2</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(3)">3</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(4)">4</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(5)">5</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(6)">6</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(7)">7</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(8)">8</button>
                        <button type="button" class="btn btn-light" style="font-size: 48px;" onclick="selectCijfer(9)">9</button>
                    </div>
                    <div id="0"></div>
                </div>
            </div>
        </div>
    </div>

<script src="script.js"></script>
</body>
</html>