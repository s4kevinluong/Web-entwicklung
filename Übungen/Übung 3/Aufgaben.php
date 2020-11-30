<?php include ("header.php");?>

<title>Aufgabenplaner: Reiter</title>

<?php include ("bootstrapIcons.php");?>

<div class = "container-fluid">
    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1>Aufgabenplaner: Aufgaben</h1></div>
    </div>

    <div  class="row">

        <?php include ("sidebar.html");?>

        <div  class="col-8">
            <table class = "table mb-4">

                <thead class="thead-light" >
                <tr>
                    <th scope = "col">Aufgabenbezeichnung</th>
                    <th scope = "col">Beschreibung der Aufgabe</th>
                    <th scope = "col">Reiter</th>
                    <th scope = "col">Zuständig</th>
                    <th scope = "col"></th>
                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>HTML Datei erstellen</td>
                    <td>HTML Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann</td>
                    <?php include ("tableIcons.php");?>
                </tr>

                <tr>
                    <td>CSS Datei erstellen</td>
                    <td>CSS Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann</td>
                    <?php include ("tableIcons.php");?>
                </tr>

                <tr>
                    <td>PC eingeschaltet</td>
                    <td>PC einschalten</td>
                    <td>Erledigt</td>
                    <td>Max Mustermann</td>
                    <?php include ("tableIcons.php");?>
                </tr>

                <tr>
                    <td>Kaffee trinken</td>
                    <td>Kaffee trinken</td>
                    <td>Erledigt</td>
                    <td>Petra Müller</td>
                    <?php include ("tableIcons.php");?>
                </tr>
                <tr>
                    <td>Für die Uni lernen</td>
                    <td>Für die Uni lernen.</td>
                    <td>Verschoben</td>
                    <td>Max Mustermann</td>
                    <?php include ("tableIcons.php");?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class = "row justify-content-center" >
        <div class = "col-8">
            <h4>Bearbeiten/Erstellen:</h4>
            <form>

                <div class = "form-group">
                    <label for = "inputAufgabenbezeichnung">Aufgabenbezeichnung</label>
                    <input type="projekt" class="form-control" id="inputAufgabenbezeichnung" placeholder="Aufgabe">
                </div>

                <div class="form-group">
                    <label for="textareaBeschreibungderAufgabe">Beschreibung der Aufgabe</label>
                    <textarea class="form-control" id="textareaBeschreibungderAufgabe" rows="3" placeholder="Beschreibung"></textarea>
                </div>

                <div class = "form-group">
                    <label for = "inputErstellungsdatum">Erstellungsdatum:</label>
                    <input type="projekt" class="form-control" id="inputErstellungsdatum" placeholder="01.01.19">
                </div>

                <div class = "form-group">
                    <label for = "inputFälligkeitsdatum">fällig bis:</label>
                    <input type="projekt" class="form-control" id="inputFälligkeitsdatum" placeholder="01.01.19">
                </div>

                <div class="form-group">
                    <label for="selectReiter">Zugehöriger Reiter:</label>
                    <select class="form-control" id="selectReiter" >
                        <option>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="selectZuständig">Zuständig:</label>
                    <select class="form-control" id="selectZuständig" >
                        <option>Max Mustermann</option>
                        <option>Petra Müller</option>
                    </select>
                </div>

                <?php include ("saveresetButtons.php");?>

            </form>
        </div>
    </div>
</div>

<?php include ("footer.php");?>
