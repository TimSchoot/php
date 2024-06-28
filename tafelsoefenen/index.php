<?php
include "../inc/header.php";
?>
<link rel="stylesheet" href="../style.css">
<div class="som-geschiedenis-links">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Som Geschiedenis
        </div>
        <ul id="history-list" class="list-group list-group-flush">
            <!-- History items will be dynamically added here -->
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1>Tafels oefenen</h1>
            <div class="card text-center">
                <div id="tafelheader" class="card-header">
                    Tafels oefenen
                </div>
                <form class="row g-3 mb-3">
                    <div class="col-4">
                        <label for="inputTafelVan" class="form-label">Welke tafel?</label>
                        <input type="number" class="form-control" id="inputtafelvan">
                    </div>
                    <div class="col-4">
                        <label for="inputTafelLengte" class="form-label">Lengte tafel</label>
                        <input type="number" class="form-control" id="inputtafellengte" value="10">
                    </div>
                    <div class="d-grid col-4" style="margin-top: 48px;">
                        <button type="button" class="btn btn-primary" onclick="displayQuestion()">GO</button>
                    </div>
                </form>
                <div id="tafel" class="card-body">
                    <div class="input-group mb-3">
                        <input id="inputsom" type="text" class="form-control" placeholder="Opgave" disabled>
                        <span class="input-group-text">=</span>
                        <input id="inputantwoord" type="text" class="form-control" placeholder="Antwoord">
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-success" onclick="checkAnswer()">Check antwoord</button>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    made by Tim
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<script src="script.js" type="text/javascript"></script>
</body>

</html>