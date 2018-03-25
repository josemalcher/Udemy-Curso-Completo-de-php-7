<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Olá, <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Teste de template</p>
<small><?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
</body>
</html>