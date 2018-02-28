<?php

$ts = strtotime('1984-08-12');
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
//$ts = strtotime("+1 week");
echo $ts;
echo "<br>";
echo date("1, d/m/Y", $ts);
