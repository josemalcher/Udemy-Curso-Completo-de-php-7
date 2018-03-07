<?php

$conn = new mysqli("localhost", "root", "","cursophp7");
if($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY login");

$data = array();
//while($row = $result->fetch_array()){
while($row = $result->fetch_assoc()){

    array_push($data,$row);
    //var_dump($row);

}

echo json_encode($data);

