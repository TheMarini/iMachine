<?php
    require('../SQL.php');
    require('SQL_filter.php');

    echo $_POST['SQL_type'];

    switch ($_POST['SQL_type']){
        case null:
            $result = $MySQL->query('SELECT * FROM ' . $tabela . $where);

            if($result->num_rows > 0) {
                include('../views/table.php');
            }
            break;

        case 'addModal':
            echo 'adiconar';
            break;

        case 'editModal':
            echo 'editar';
            break;

        case 'deleteModal':
            echo 'deletar';
            break;
    }

    $MySQL->close();
?>
