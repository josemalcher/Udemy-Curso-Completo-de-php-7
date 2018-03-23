<?php
if (!is_dir("ex70")) {
    mkdir("ex70");
}

foreach (scandir("ex70") as $item) {
    if (!in_array($item, array(".", ".."))){
        unlink("ex70/" . $item);
    }
}
echo "Arquivos Apagados";