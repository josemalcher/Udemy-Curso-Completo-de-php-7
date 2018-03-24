<?php

function trataNome($name)
{
    if (!$name) {
        throw new Exception("Nenhum nome foi informado! ", 1);
    }
    echo ucwords($name)."<br>";
}

try {
    trataNome("josé malcher junior");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "Executou o Finaly";
}