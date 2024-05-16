<?php
include "../inc/header.php"
?>
<div class="container">
<div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">
                        <form class="row g-3 mb-3">
                            <div class="col-4">
                                <label for="inputTafelVan" class="form-label">Welke tafel?</label>
                                <input type="number" class="form-control" id="inputTafelVan">
                            </div>
                            <div class="col-4">
                                <label for="inputTafelLengte" class="form-label">Lengte tafel</label>
                                <input type="number" class="form-control" id="inputTafelLengte" value="10">
                            </div>
                            <div class="col-4" style="margin-top: 48px;">
                                <button type="button" class="btn btn-success" onclick="displaytafel()">GO</button>
                            </div>
                        </form>
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