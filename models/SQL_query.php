<?php
    require('../SQL.php');
    require('SQL_filter.php');

    switch ($_GET['SQL_type']){
        case null:
            $result = $MySQL->query('SELECT * FROM ' . $tabela . $where);

            if($result->num_rows > 0) {
                include('../views/table.php');
            }
            break;

        case 'AddModal':
            break;

        case 'EditModal':
            break;

        case 'DeleteModal':
            break;
    }

    $MySQL->close();
?>
