<?php include ("header.php");?>

<title>Aufgabenplaner: Personen</title>

<?php include ("bootstrapIcons.php");?>

<div class = "container-fluid">
    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1>Aufgabenplaner: Personen</h1></div>
    </div>

    <div  class="row">

        <?php include ("sidebar.html");?>

        <div  class="col-8">
            <table class = "table mb-4">

                <thead class="thead-light" >
                <tr>
                    <th scope = "col">Name</th>
                    <th scope = "col">E-Mail</th>
                    <th scope = "col">In Projekt</th>
                    <th scope = "col"></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Max Mustermann</td>
                    <td>mustermann@muster.de</td>
                    <?php include ("checkprojekt.php");?>
                </tr>

                <tr>
                    <td>Petra Müller</td>
                    <td>petra@mueller.de</td>
                    <?php include("checkprojekt.php");?>
                </tr>
                </tbody>

            </table>
            <div class = "row">
                <div class = "col">
                    <h4>Bearbeiten/Erstellen:</h4>
                    <form>

                        <div class = "form-group">
                            <label for = "inputUsername">Username:</label>
                            <input type="username" class="form-control" id="inputUsername" placeholder="Username">
                        </div>

                        <div class = "form-group">
                            <label for = "inputEmail">E-Mail-Adresse:</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail-Adresse eingeben">
                        </div>

                        <div class = "form-group">
                            <label for = "inputPassword">Passwort:</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Passwort">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkZugeordnet">
                            <label class="form-check-label" for="checkZugeordnet">Dem Projekt zugeordnet</label>
                        </div>

                       <?php include ("saveresetButtons.php");?>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include ("footer.php");?>