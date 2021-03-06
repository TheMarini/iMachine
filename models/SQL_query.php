<?php
    //Requires
    require('../SQL.php');
    require('SQL_filter.php');

    //SELECT | INSERT | UPDATE | DELETE
    switch ($_POST['SQL_type']){
        case null:
            $result = $MySQL->query('SELECT * FROM ' . $tabela . $where);

            if($result->num_rows > 0) {
                include('../views/table.php');
            }
        break;

        case 'addModal':
            if ($tab == 0){
                if ($_POST['Nome'] == ''){
                    $nome = 'MARK-' . $MySQL->query("SELECT MAX(id)+1 as 'id' FROM $tabela")->fetch_object()->id;
                }
                else{
                    $nome = $_POST['Nome'];
                }
                $MySQL->query('INSERT INTO ' . $tabela . ' VALUES (null, "' . $nome . '", null)');
            }
            else{
                $nome = ($_POST['Nome'] == '') ? 'STATUS INDEFINIDO' : $_POST['Nome'];

                $MySQL->query('INSERT INTO ' . $tabela . ' VALUES (null, "' . $nome . '")');
            }

            refresh_Table();
        break;

        case 'editModal':
            $MySQL->query('UPDATE ' . $tabela . ' SET nome = "'. $_POST['Nome'] . '" WHERE id = ' . $_POST['ID']);

            refresh_Table();
        break;

        case 'deleteModal':
            $MySQL->query('DELETE FROM ' . $tabela . ' WHERE id = ' . $_POST['ID']);

            refresh_Table();
        break;
    }

    //Refresh Table
    function refresh_Table(){
        $result = $GLOBALS['MySQL']->query('SELECT * FROM ' . $GLOBALS['tabela'] . $GLOBALS['where']);
        include('../views/table.php');
    }

    $MySQL->close();
?>
