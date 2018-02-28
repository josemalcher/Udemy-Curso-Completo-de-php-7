<?php

function teste($callabck){
    //processo lento...

    $callabck();
}

teste(function(){
    echo "TERMINOU!!";
});