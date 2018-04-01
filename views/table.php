<?php if ($tab == 0): ?>
    <table class="table table-striped text-center">
        <caption class="justify-content-center">Lista de Máquinas</caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome da Máquina</th>
                <th scope="col">Status Atual</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) : ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo ($row['status'] == null) ? 'sem status' : $row['status']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<? else: ?>
    <table class="table table-striped text-center">
        <caption class="justify-content-center">Lista de Status</caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) : ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['nome']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<? endif; ?>
