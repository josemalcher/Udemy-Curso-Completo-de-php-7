<?php
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

$periodo = new DateInterval("P15D"); // + 15 DIAs
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");