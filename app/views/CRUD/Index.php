<div class="row">
    <h1>Atividades</h1>
    <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Prazo</th>
                    <th>Prioridade</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($activity as $activity): ?>
                        <tr>
                            <td><?php echo $activity->name; ?></td>
                            <td><?php echo $activity->description; ?></td>
                            <td><?php $data = explode(" ", $activity->dateatime);
$dataseparada = $data[0];
$dataseparada2 = $data[1];
echo implode("/", array_reverse(explode("-", $dataseparada)));
echo $dataseparada2;?></td>
                            <td><?php echo $activity->priority; ?></td>
                            <td><?php echo $activity->status; ?></td>
                            <td><a href="" class="btn btn-success">Editar</a></td>
                            <td><a href="" class="btn btn-danger">Excluir</a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

