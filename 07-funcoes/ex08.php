<?php
function soma(float ...$valores):string {
    return array_sum($valores);
}
echo var_dump(soma(2,2));
echo '<br>';
echo soma(25,25);
echo '<br>';
echo soma(2.2,2.5);
echo '<br>';