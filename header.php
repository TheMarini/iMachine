<nav class="d-flex justify-content-between align-items-center">
    <form class="form-inline">
        <div class="form-group">
            <div class="input-group input-group-lg">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar por ID" aria-label="Search" name="search_id">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar por nome" aria-label="Search" name="search_nome">
            </div>

            <?php if ($tab == 0) : ?>
                <select class="form-control form-control-lg mr-sm-2" id="exampleFormControlSelect1" style="color: dimgray">
                  <option>Procurar por status</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            <?php endif; ?>
        </div>
        <div class="form-group">
        </div>

        <button class="btn btn-lg my-2 my-sm-0" type="submit">
            <img src="assets/img/search.svg" alt="search">
        </button>
    </form>

    <form class="controls">
        <button type="button" data-toggle="tooltip" data-placement="left" title="Adicionar Máquina">
            <img src="assets/img/add.svg" alt="adicionar">
        </button>
        <button type="button" data-toggle="tooltip" data-placement="left" title="Editar Máquina">
            <img src="assets/img/edit.svg" alt="excluir">
        </button>
        <button type="button" data-toggle="tooltip" data-placement="left" title="Excluir Máquina">
            <img src="assets/img/delete.svg" alt="excluir">
        </button>
    </form>
</nav>
