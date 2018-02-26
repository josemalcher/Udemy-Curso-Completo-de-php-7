<?php

require_once ("config.php");

session_regenerate_id(); //gera id a cada refresh

echo session_id();