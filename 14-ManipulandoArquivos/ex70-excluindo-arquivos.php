<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//remove
unlink("teste.txt");
echo "arquivo removido com sucesso";