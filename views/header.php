<?php $disabled = ($empty) ? 'disabled' : ''; ?>

<nav class="d-flex justify-content-between align-items-center">
    <form class="form-inline" action="search" method="get">
        <div class="form-group">
            <div class="input-group input-group-lg">
                <input id="search_id" class="form-control mr-sm-2" type="number" placeholder="Procurar por ID" aria-label="Search" name="ID" min="0" <?php echo $disabled ?>>
                <input id="search_nome" class="form-control mr-sm-2" type="text" placeholder="Procurar por nome" aria-label="Search" name="Nome" <?php echo $disabled ?>>
            </div>

            <?php
                if ($tab == 0) :
                $status = $MySQL->query("SELECT nome FROM status ORDER BY id asc");
                $status_empty = (!$status->num_rows > 0) ? true : false;
                $status_disabled = ($status_empty) ? 'disabled' : '';
            ?>
                <select id="search_status" class="form-control form-control-lg mr-sm-2" style="color: dimgray" name="Status" <?php echo $disabled; echo $status_disabled; ?>>
                    <option>Procurar por status</option>
                    <?php
                        if (!$status_empty) :
                            while($row = $status->fetch_assoc()) :
                    ?>
                        <option><?php echo $row['nome']; ?></option>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </select>
            <?php endif; ?>
        </div>

        <button id="search_btn" class="btn btn-lg my-2 my-sm-0" type="submit" <?php echo $disabled ?>>
            <img src="/views/assets/img/search.svg" alt="search">
        </button>
    </form>

    <form class="controls">
        <a data-toggle="modal" href="add" data-target="#addModal">
            <button class="add" type="button" data-toggle="tooltip" data-placement="left" title="Adicionar">
                <img src="/views/assets/img/add.svg" alt="adicionar">
            </button>
        </a>
        <a data-toggle="modal" href="edit" data-target="#editModal">
            <button class="edit" type="button" data-toggle="tooltip" data-placement="left" title="Editar">
                <img src="/views/assets/img/edit.svg" alt="excluir">
            </button>
        </a>
        <a data-toggle="modal" href="delete" data-target="#deleteModal">
            <button class="delete" type="button" data-toggle="tooltip" data-placement="left" title="Excluir">
                <img src="/views/assets/img/delete.svg" alt="excluir">
            </button>
        </a>
    </form>
    <script>$('[data-toggle="tooltip"]').tooltip();</script> <!-- FIXME: can't do inner .js -->
</nav>
