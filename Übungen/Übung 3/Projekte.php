<?php include ("header.php"); ?>

<title>Aufgabenplaner: Projekte</title>

<?php include ("bootstrap.php"); ?>

<div class = "container-fluid">

    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1>Aufgabenplaner: Projekte</h1></div>
    </div>

    <div  class="row">

        <?php include ("sidebar.html");?>

        <div class="col">
            <form class="mb-4">
                <div class="form-group">
                    <label for="selectProjekt"><h4>Projekt Auswählen:</h4></label>
                    <select class="form-control" id="selectProjekt" >
                        <option>-bitte auswählen-</option>
                    </select>
                </div>

                <div class = "row">
                    <div class = "col">
                        <button type="button" class="btn btn-primary" >Auswählen</button>
                        <button type="button" class="btn btn-primary">Bearbeiten</button>
                        <button type="button" class="btn btn-danger">Löschen</button>
                    </div>
                </div>
            </form>

            <div class = "row">
                <div class = "col">
                    <h4>Projekt bearbeiten/erstellen:</h4>
                    <form class = "mb-4">

                        <div class = "form-group">
                            <label for = "inputProjektname">Projektname</label>
                            <input type="projekt" class="form-control" id="inputProjektname" placeholder="Projekt">
                        </div>

                        <div class="form-group">
                            <label for="textareaProjektbeschreibung">Projektbeschreibung</label>
                            <textarea class="form-control" id="textareaProjektbeschreibung" rows="3" placeholder="Beschreibung"></textarea>
                        </div>

                        <?php include ("saveresetButtons.php");?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("footer.php");?>