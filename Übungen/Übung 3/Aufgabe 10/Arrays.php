<?php $mitglieder = array (
            array (
                'id' => 1,
                'username' => 'Max Mustermann',
                'email' => 'mustermann@muster.de'
            ),
            array (
                'id' => 2,
                'username' => 'Petra Müller',
                'email' => 'petra@mueller.de'
            )
   );
        $aufgaben = array(
            array(
                'id' => 1,
                'bezeichnung' => 'HTML Datei erstellen',
                'beschreibung' => 'HTML Datei erstellen'
            ),
            array(
                'id' => 2,
                'bezeichnung' => 'CSS Datei erstellen',
                'beschreibung' => 'CSS Datei erstellen'
            ),
            array(
                'id' => 3,
                'bezeichnung' => 'PC eingeschaltet',
                'beschreibung' => 'PC einschalten'
            ),
            array(
                'id' => 4,
                'bezeichnung' => 'Kaffee trinken',
                'beschreibung' => 'Kaffee trinken'
            ),
            array(
                'id' => 5,
                'bezeichnung' => 'Für die Uni lernen',
                'beschreibung' => 'Für die Uni lernen'
            )
        );
        $reiter = array(
            array(
                'id' => 1,
                'reiter' => 'Todo',
                'beschreibung' => 'Dinge die erledigt werden müssen.'
            ),
            array(
                'id' => 2,
                'reiter' => 'Erledigt',
                'beschreibung' => 'Dinge die erledigt sind.'
            ),
            array(
                'id' => 1,
                'reiter' => 'Verschoben',
                'beschreibung' => 'Dinge die später erledigt werden.'
            )
        );
var_dump($mitglieder);
echo "<br>";
echo "<br>";
var_dump($aufgaben);
echo "<br>";
echo "<br>";
var_dump($reiter);
?>

