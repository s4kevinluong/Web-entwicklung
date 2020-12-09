<?php include ("../header.php");?>
<?php include ("../bootstrapIcons.php")?>
<?php $personen = array(
    array(
        'Name' => 'Max Mustermann',
        'E-Mail' => 'mustermann@muster.de',
    ),
    array(
        'Name' => 'Petra Müller',
        'E-Mail' => 'petra@müller.de',
    )
);
var_dump($personen);
echo "<br>";
echo "<br>";
echo "<br>";
?>


<div class = "container-fluid">
    <div  class="row justify-content-center">
<?php if (count($personen) > 0): ?>
        <div  class="col-8">
            <table  class = "table mb-4">

                <thead class="thead-light">
                <tr>
                    <th scope = "col"><?php echo implode('</th><th>', array_keys(current($personen))); ?></th>
                    <th scope = "col"> In Projekt </th>
                    <th scope = "col"></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($personen as $row): array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                        <?php include ("../checkprojekt.php");?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>
</div>

<?php include ("../footer.php");?>
