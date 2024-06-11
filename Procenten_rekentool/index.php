<!-- NEXT AND LAST STEP
- database aanmaken met procentsommen
- de tabel met procentsommen krijg je van OSD via ItsLearning
- wat hebben we nodig:
  - een php-omgeving: XAMPP of een docker-omgeving
  (straks doe ik het nog een keer voor)
  - in onze phpMyAdmin-omgeving maken we een database aan;
  een database bestaat uit tabellen, de tabel met procentsommen gaan
  we importeren
  - we moeten onze html-file ombouwen naar een php-file
  - in die php-file moeten we aan connectie maken met de database
  - vervolgens de database met (my)SQL bevragen
  - de opgehaalde gegevens opmaken en in de HTML drukken
-->
<?php
include '../inc/header.php';
include "DB/dbconnection.class.php";
$dbconnect = new dbconnection();
$sql = "SELECT * FROM sommen ORDER BY RAND() LIMIT 1";
$query = $dbconnect->prepare($sql);
$query->execute();
$recset = $query->fetchAll(2);
?>

<div class="container" style="margin-top: 5vh">
    <!-- deel met de vraag -->
    <div class="row">
        <div class="col-8">
            <h5>Inleiding</h5>
            <?= $recset[0]['inleiding'] ?>
            <h5>Vraag</h5>
            <?= $recset[0]['vraag'] ?>
            <h5>Antwoord</h5>
            <div class="row">
                <div class="col-4">
                    <?php
                    if($recset[0]['voor_achter'] == 0) {
                        ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><?= $recset[0]['eenheid'] ?></span>
                            <input id="inp_antw" type="text" class="form-control">
                        </div>
                    <?php } else { ?>
                        <div class="input-group mb-3">
                            <input id="inp_antw" type="text" class="form-control">
                            <span class="input-group-text"><?= $recset[0]['eenheid'] ?></span>
                        </div>
                    <?php    }
                    ?>
                </div>
                <div class="col-4">
                    <button class="btn btn-success" onclick="checkAnswer('<?= $recset[0]['antwoord'] ?>')">Check antwoord</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <?php
            if($recset[0]['afbeelding'] != ''):
                echo "<img src='{$recset[0]['afbeelding']}' class='img-fluid'>";
            endif;
            ?>
        </div>
    </div>
    <!-- deel met de rekentool -->
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
                    <input id="inp_oud" class="form-control is-invalid" onchange="checkInformation()">
                </div>
            </div>
            <!-- einde linker card -->
        </div>
        <div class="col-4" style="margin-bottom: 5vh">
            <select id="select_soort" class="form-select mt-4 mb-3 is-invalid" onchange="checkInformation()">
                <option value="" selected>Kies....</option>
                <option value="1">van</option>
                <option value="2">toename</option>
                <option value="3">afname</option>
            </select>
            <div class="input-group mb-3">
                <span class="input-group-text">Percentage</span>
                <input id="inp_perc" type="text" class="form-control is-invalid" onchange="checkInformation()">
                <span class="input-group-text">%</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Vermenigvuldigingsfactor</span>
                <input id="inp_factor" type="text" class="form-control" disabled>
            </div>
            <img src="img/1184.png" alt="" class="img-fluid">
            <div class="input-group mb-3">
                <span class="input-group-text">Deelfactor</span>
                <input id="inp_deler" type="text" class="form-control" disabled>
            </div>
            <div class="d-grid">
                <button id="losop_btn" type="button" class="btn btn-success" disabled onClick="solveProblem()">Los op</button>
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
                    <input id="inp_nieuw" class="form-control is-invalid" onchange="checkInformation()">
                </div>
            </div>
            <!-- einde rechter card -->
        </div>

    </div>
</div>
<script src="script.js"></script>
</body>
</html>