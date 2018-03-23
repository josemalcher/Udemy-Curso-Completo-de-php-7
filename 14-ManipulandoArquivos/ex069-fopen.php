<?php
$file = fopen("log.txt", "a+"); //w+
fwrite($file, date("Y-m-d H:i:s")."\r\n");
fclose($file);

echo "Arquivo Criado com sucesso";