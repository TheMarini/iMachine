<?php $disabled = ($empty) ? 'disabled' : ''; ?>

<nav class="d-flex justify-content-between align-items-center">
    <form class="form-inline">
        <div class="form-group">
            <div class="input-group input-group-lg">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar por ID" aria-label="Search" name="search_id" <?php echo $disabled ?>>
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar por nome" aria-label="Search" name="search_nome" <?php echo $disabled ?>>
            </div>

            <?php if ($tab == 0) : ?>
                <select class="form-control form-control-lg mr-sm-2" id="exampleFormControlSelect1" style="color: dimgray" <?php echo $disabled ?>>
                    <option>Procurar por status</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            <?php endif; ?>
        </div>

        <button class="btn btn-lg my-2 my-sm-0" type="submit" <?php echo $disabled ?>>
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
</nav>
