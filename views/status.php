<?php
    //Actual tab/content
    $tab = 1;

    //Database connection
    require('SQL.php');

    $result = $MySQL->query("SELECT * FROM status");
    $empty = (!$result->num_rows > 0) ? true : false;

    //Search and Controls
    include('header.php');

    if (!$empty) :

        include('table.php');  //Load Table

    else:
?>

<h1 class="text-muted">Não há nenhum status cadastrado :(</h1>

<?php
    endif;
    include('back_DOMs.php');  //Behind DOMs
    $MySQL->close();
?>
