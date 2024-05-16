<?php
include "../inc/header.php";
?>

<link rel="stylesheet" href="style.css">
    <div class="row">
        <div class="col-9">
            <div id="sudoku"></div>
        </div>
        <div class="col-3">
            <div class="numpad">
                <button onclick="selectCijfer(1)" class="numpadknopr1">1</button>
                <button onclick="selectCijfer(2)" class="numpadknopr1">2</button>
                <button onclick="selectCijfer(3)" class="numpadknopr1">3</button><br>
                <button onclick="selectCijfer(4)" class="numpadknopr2">4</button>
                <button onclick="selectCijfer(5)" class="numpadknopr2">5</button>
                <button onclick="selectCijfer(6)" class="numpadknopr2">6</button><br>
                <button onclick="selectCijfer(7)" class="numpadknopr3">7</button>
                <button onclick="selectCijfer(8)" class="numpadknopr3">8</button>
                <button onclick="selectCijfer(9)" class="numpadknopr3">9</button><br>
              </div><br>
            <div><button id="checkbtn" onclick="checkSolution()">check</button></div><br>
            <div><button id="newbtn" onclick="newProblem()">genereer</button></div><br>
            <div class="0"></div>
        </div>
    </div>
     
  
</body>
<script src="script.js"></script>
</html>