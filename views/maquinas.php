<?php
    $tab = 0;

    require('SQL.php');

    $result = $MySQL->query("SELECT * FROM maquina");
    $empty = (!$result->num_rows > 0) ? true : false;

    include('header.php');

    if (!$empty) :

        include('table.php');

    else:
?>

<h1 class="text-muted">Não há nenhuma máquina cadastrada :(</h1>

<?php
    endif;
    include('back_DOMs.php');
    $MySQL->close();
?>
