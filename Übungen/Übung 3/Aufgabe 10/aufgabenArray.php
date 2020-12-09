<?php include ("../header.php");?>
<?php include ("../bootstrapIcons.php")?>

<?php $aufgaben = array(
        array(
            'Aufgabenbezeichnung' => 'HTML Datei erstellen',
            'Aufgabenbeschreibung' => 'HTML Datei erstellen',
            'Reiter' => 'ToDo',
            'Zuständig' => 'Max Mustermann'
        ),
        array(
            'Aufgabenbezeichnung' => 'CSS Datei erstellen',
            'Aufgabenbeschreibung' => 'CSS Datei erstellen',
            'Reiter' => 'ToDo',
            'Zuständig' => 'Max Mustermann'
        ),
        array(
            'Aufgabenbezeichnung' => 'PC eingeschaltet',
            'Aufgabenbeschreibung' => 'PC einschalten',
            'Reiter' => 'Erledigt',
            'Zuständig' => 'Max Mustermann'
        ),
        array(
            'Aufgabenbezeichnung' => 'Kaffee trinken',
            'Aufgabenbeschreibung' => 'Kaffee trinken',
            'Reiter' => 'Erledigt',
            'Zuständig' => 'Petra Müller'
        ),
        array(
            'Aufgabenbezeichnung' => 'Für die Uni lernen',
            'Aufgabenbeschreibung' => 'Für die Uni lernen',
            'Reiter' => 'Verschoben',
            'Zuständig' => 'Max Mustermann'
        )
);
var_dump($aufgaben);
echo "<br>";
echo "<br>";
?>

<div class = "container-fluid">
    <div  class="row justify-content-center">
        <?php if (count($aufgaben) > 0): ?>
        <div  class="col-8">
            <table  class = "table mb-4">

                <thead class="thead-light">
                <tr>
                    <th scope = "col"><?php echo implode('</th><th>', array_keys(current($aufgaben))); ?></th>
                    <th scope = "col"></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($aufgaben as $row): array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                        <?php include ("../tableIcons.php")?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php include ("../footer.php");?>

