<?php
    $tab = $_GET['tab'];

    $tabela = ($tab == 0) ? 'maquina' : 'status';

    $where = '';

    if ($_GET['ID'] != '' || $_GET['Nome'] != '' || $_GET['Status'] != ''){
        $where = 'where 1 = 1';

        if ($_GET['ID'] != ''){
            $where .= ' AND id = ' . $_GET['ID'];
        }
        if ($_GET['Nome'] != '' ){
            $where .= ' AND nome LIKE  "%' . $_GET['Nome'] . '%"';
        }
        if ($_GET['Status'] != ''){
            $where .= ' AND id_status = "' . $_GET['Status'] . '"';
        }
    }

    require('../SQL.php');

    $result = $MySQL->query('SELECT * FROM ' . $tabela . ' ' . $where);

    if($result->num_rows > 0) {
        include('../views/table.php');
    }

    $MySQL->close();
?>
