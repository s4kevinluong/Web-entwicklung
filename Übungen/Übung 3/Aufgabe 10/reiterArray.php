<?php include ("../header.php");?>
<?php include ("../bootstrapIcons.php")?>

<?php $reiter = array(
    array(
        'Name' => 'Todo',
        'Beschreibung' => 'Dinge die erledigt werden müssen.'
    ),
    array(
        'Name' => 'Erledigt',
        'Beschreibung' => 'Dinge die erledigt sind.'
    ),
    array(
        'Name' => 'Verschoben',
        'Beschreibung' => 'Dinge die später erledigt werden.'
    )
);
var_dump($reiter);
echo "<br>";
echo "<br>";
?>

<div class = "container-fluid">
    <div  class="row justify-content-center">
        <?php if (count($reiter) > 0): ?>
        <div  class="col-8">
            <table  class = "table mb-4">

                <thead class="thead-light">
                <tr>
                    <th scope = "col"><?php echo implode('</th><th>', array_keys(current($reiter))); ?></th>
                    <th scope = "col"></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($reiter as $row): array_map('htmlentities', $row); ?>
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
