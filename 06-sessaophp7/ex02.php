<?php

require_once("config.php");

session_start();

//session_unset($_SESSION['name']); //
session_destroy(); // limpa e remove

echo $_SESSION['nome'];

