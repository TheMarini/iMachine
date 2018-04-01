<?php
    //Get current tab
    $tab = $_GET['tab'];

    //Set table
    $tabela = ($tab == 0) ? 'maquina' : 'status';

    //Set where
    $where = ' ';
    if ($_GET['ID'] != '' || $_GET['Nome'] != '' || $_GET['Status'] != ''){
        $where .= 'where 1 = 1';

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
?>
