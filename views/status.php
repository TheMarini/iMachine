<?php
    $tab = 1;

    require('SQL.php');

    $result = $MySQL->query("SELECT * FROM status");
    $empty = (!$result->num_rows > 0) ? true : false;

    include('header.php');

    if (!$empty) :

        include('table.php');

    else:
?>

<h1 class="text-muted">Não há nenhum status cadastrado :(</h1>

<?php
    endif;
    include('back_DOMs.php');
    $MySQL->close();
?>
