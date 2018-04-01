<?php

    require('../SQL.php');

    $banana = $MySQL->query("SELECT * FROM maquina");
    $empty = (!$banana->num_rows > 0) ? 'sim' : 'nao';

    echo $empty;

    $MySQL->close();
?>

<h1>ISSO AQUI É SQL_Query</h1>
