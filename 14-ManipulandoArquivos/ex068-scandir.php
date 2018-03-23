<?php
$imgs = scandir("img");
//var_dump($img);

$data = array();

foreach ($imgs as $img){
    if(!in_array($img,array(".",".."))){
        $filename = "img".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);

        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
        $info['url'] = "http://localhost/workspace-Udemy-Curso-Completo-de-php-7/14-ManipulandoArquivos/".str_replace("\\","/",$filename);
        //var_dump($info);
        array_push($data, $info);
    }
}
echo json_encode($data);
