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
        <a class="nav-link active" data-toggle="tab" href="#maquinas" role="tab" aria-controls="maquinas" aria-selected="true">Máquinas</a>
        <a class="nav-link" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Status</a>
        <a class="nav-link" data-toggle="tab" href="#simulacao" role="tab" aria-controls="simulacao" aria-selected="false">Simulador</a>
    </nav>
    <main class="tab-content" id="tabContent">

        <article class="tab-pane fade show active" id="maquinas" role="tabpanel" aria-labelledby="maquinas-tab">
            <?php $tab = 0; include('header.php'); ?>
            <table class="table table-striped">
                <caption class="justify-content-center">Lista de Máquinas</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome da Máquina</th>
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

        <article class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
            <?php $tab = 1; include('header.php'); ?>
            <table class="table table-striped">
                <caption class="justify-content-center">Lista de Status</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome do Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                    </tr>
                </tbody>
            </table>
        </article>

        <article class="tab-pane fade" id="simulacao" role="tabpanel" aria-labelledby="simulacao-tab">
            <form>
                <div class="form-row mb-3 container-fluid input-group input-group-lg d-flex justify-content-between align-items-center">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Periodicidade</div>
                    </div>
                    <input class="col form-control" type="number" placeholder="anos" aria-label="anos" name="search_id">
                    <input class="col form-control" type="number" placeholder="meses" aria-label="meses" name="search_nome">
                    <input class="col form-control" type="number" placeholder="dias" aria-label="dias" name="search_nome">
                    <input class="col form-control" type="number" placeholder="horas" aria-label="horas" name="search_nome">
                    <input class="col form-control" type="number" placeholder="minutos" aria-label="minutos" name="search_nome">
                    <input class="col form-control" type="number" placeholder="segundos" aria-label="segundos" name="search_nome">
                    <input class="col form-control" type="number" placeholder="milisegundos" aria-label="milisegundos" name="search_nome">
                </div>
                <div class="form-row container-fluid">
                    <button type="button" class="col btn btn-lg btn-warning disabled" type="submit">Realizar simulação</button>
                </div>
            </form>
        </article>
    </main>
</body>

</html>
