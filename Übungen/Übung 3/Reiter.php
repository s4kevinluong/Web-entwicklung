<?php include ("header.php");?>

    <title>Aufgabenplaner: Reiter</title>

<?php include ("bootstrapIcons.php");?>

<div class = "container-fluid">
    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1>Aufgabenplaner: Reiter</h1></div>
    </div>

    <div  class="row">

        <?php include ("sidebar.html");?>

        <div  class="col-8">
            <table class = "table mb-4">

                <thead class="thead-light" >
                <tr>
                    <th scope = "col">Name</th>
                    <th scope = "col">Beschreibung</th>
                    <th scope = "col"></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen.</td>
                    <?php include ("tableIcons.php");?>
                </tr>

                <tr>
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind.</td>
                    <?php include ("tableIcons.php");?>
                </tr>

                <tr>
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden.</td>
                    <?php include ("tableIcons.php");?>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
    <div class = "row justify-content-center" >
        <div class = "col-8">
            <h5>Bearbeiten/Erstellen:</h5>
            <form>

                <div class = "form-group">
                    <label for = "inputReiterBezeichnung">Bezeichnung des Reiters</label>
                    <input type="projekt" class="form-control" id="inputReiterBezeichnung" placeholder="Reiter">
                </div>

                <div class="form-group">
                    <label for="textareaReiterBeschreibung">Beschreibung</label>
                    <textarea class="form-control" id="textareaReiterBeschreibung" rows="3" placeholder="Beschreibung"></textarea>
                </div>

                <?php include ("saveresetButtons.php");?>

            </form>
        </div>
    </div>
</div>

<body>

<?php include ("footer.php");?>