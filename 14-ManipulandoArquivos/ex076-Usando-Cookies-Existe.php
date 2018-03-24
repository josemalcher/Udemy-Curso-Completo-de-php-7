<?php

if(isset($_COOKIE["Nome_DO_COOKIE"])){
    $obj = json_decode($_COOKIE["Nome_DO_COOKIE"]);
    echo $obj->empresa;
}