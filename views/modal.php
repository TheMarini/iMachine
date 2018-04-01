<?php
    if($tab == 0){
        $objeto = ['Máquina', 'da máquina', 'maquina'];
    }
    else{
        $objeto = ['Status', 'do status', 'status'];
    }
?>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar <?php echo $objeto[0] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nome</div>
                    </div>
                    <input name="nome" type="text" class="form-control" placeholder="Nome <?php echo $objeto[1] ?>">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID</div>
                    </div>
                    <?php $result = $MySQL->query("SELECT MAX(id)+1 as 'id' FROM $objeto[2]")->fetch_object()->id; ?>
                    <input name="id" type="number" class="form-control" placeholder="<?php echo $result; ?>" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar <?php echo $objeto[0] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nome</div>
                    </div>
                    <input type="text" class="form-control" placeholder="Nome <?php echo $objeto[1] ?>">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID</div>
                    </div>
                    <?php $result = $MySQL->query("SELECT MAX(id)+1 as 'id' FROM $objeto[2]")->fetch_object()->id; ?>
                    <input type="number" class="form-control" placeholder="<?php echo $result; ?>" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir <?php echo $objeto[0] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nome</div>
                    </div>
                    <input type="text" class="form-control" placeholder="Nome <?php echo $objeto[1] ?>">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID</div>
                    </div>
                    <?php $result = $MySQL->query("SELECT MAX(id)+1 as 'id' FROM $objeto[2]")->fetch_object()->id; ?>
                    <input type="number" class="form-control" placeholder="<?php echo $result; ?>" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Excluir</button>
            </div>
        </form>
    </div>
</div>
