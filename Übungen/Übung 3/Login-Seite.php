<?php include ("header.php"); ?>

<title>Aufgabenplaner: Login</title>

<?php include ("bootstrap.php"); ?>

<div class = "container-fluid">

    <div class = "jumbotron">
        <div class = "col offset-md-2"><h1> Aufgabenplaner: Login</h1></div>
    </div>

    <div class="row">
        <div class="col-8 offset-md-2" >
            <form>
                <div class="form-group">
                    <label for="inputEmail">Email-Adresse:</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email-Adresse eingeben">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Passwort</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Passwort">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checkAGB">
                    <label class="form-check-label" for="checkAGB">AGBs und Datenschutzbedingung akzeptieren</label>
                </div>
                <button type="submit" class="btn btn-primary">Einloggen</button>
            </form>
            <p>Noch nicht registriert? <a href="#">Registrierung</a> </p>
            <p>Da der Login technisch noch nich realisiert wurde: <a href="#">Überspringen</a></p>
        </div>
    </div>


</div>

<?php include ("footer.php");?>

