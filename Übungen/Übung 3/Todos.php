<?php include ("header.php"); ?>

    <title>Aufgabenplaner: Todos</title>

<?php include ("bootstrap.php"); ?>


<div class = "container-fluid">

    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1>Aufgabenplaner: Todos (Aktuelles Projekt)</h1></div>
    </div>

    <div  class="row">

        <?php require 'sidebar.html';?>

        <div  class="col">
            <div class = "card">
                <div class = "card-header">ToDo:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                    <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                </ul>
            </div>
        </div>

        <div  class="col">
            <div class = "card">
                <div class = "card-header">Erledigt:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                    <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                </ul>
            </div>
        </div>

        <div  class="col">
            <div class = "card">
                <div class = "card-header">Verschoben:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Für die Uni lernen(Max Mustermann)</li>
                </ul>
            </div>
        </div>

    </div>

</div>

<?php include ("footer.php"); ?>