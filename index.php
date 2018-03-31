<?php
    require 'vendor/autoload.php';

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    include('database.php');
?>

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
            <?php include('maquinas.php'); ?>
        </article>

        <article class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
            <?php include('status.php'); ?>
        </article>

        <article class="tab-pane fade" id="simulacao" role="tabpanel" aria-labelledby="simulacao-tab">
            <?php include('simulacao.php'); ?>
        </article>
    </main>
</body>

</html>
