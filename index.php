<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>TCS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <nav class="nav flex-column" id="tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Início</a>
        <a class="nav-link" data-toggle="tab" href="#maquinas" role="tab" aria-controls="maquinas" aria-selected="false">Máquinas</a>
        <a class="nav-link" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
        <a class="nav-link" data-toggle="tab" href="#simulacao" role="tab" aria-controls="simulacao" aria-selected="false">Simulador</a>
    </nav>
    <main class="tab-content" id="tabContent">
        <article class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <nav class="d-flex justify-content-between align-items-center">
                <form class="form-inline">
                    <div class="input-group input-group-lg">
                        <input class="form-control mr-sm-2" type="search" placeholder="Procurar por nome" aria-label="Search">
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

            <table class="table table-striped">
                <caption class="justify-content-center">Lista de Máquinas</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Status Atual</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                </tbody>
            </table>
        </article>
        <article class="tab-pane fade" id="maquinas" role="tabpanel" aria-labelledby="maquinas-tab">

        </article>
        <article class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">3</article>
        <article class="tab-pane fade" id="simulacao" role="tabpanel" aria-labelledby="simulacao-tab">4</article>
    </main>
</body>

</html>
