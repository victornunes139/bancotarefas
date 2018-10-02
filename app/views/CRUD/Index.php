<?php if (!empty($_GET['msgAdd'])) {
	?>
  <div class="alert alert-success">
       Tarefa cadastrada com sucesso!
  </div>
<?php }?>

<?php if (!empty($_GET['msgEdit'])) {
	?>
  <div class="alert alert-success">
       Edição realizada com sucesso!
  </div>
<?php }?>

<?php if (!empty($_GET['msgDelete'])) {
	?>
  <div class="alert alert-success">
       Excluido com sucesso!
  </div>
<?php }?>

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
                            <td><?php echo $activity->activity_name; ?></td>
                            <td><?php echo $activity->description; ?></td>
                            <td><?php $data = explode(" ", $activity->dateatime);
								$dataseparada = $data[0];
								$dataseparada2 = $data[1];
								echo "Data: " . implode("/", array_reverse(explode("-", $dataseparada))) . "<br>Hora: " . $dataseparada2;?></td>
                            <td><?php echo $activity->priority_name; ?></td>
                            <td><?php echo $activity->status_name; ?></td>
                            <td><a href="<?php echo URL_BASE . "Activity/details/" . $activity->activity_id; ?>" class=" btn btn-info">Visualizar</a></td>
                            <td><a href="<?php echo URL_BASE . "Activity/editForm/" . $activity->activity_id; ?>" class="btn btn-success">Editar</a></td>
                            <td><a href="<?php echo URL_BASE . "Activity/deleteAction/" . $activity->activity_id; ?>" class="btn btn-danger">Excluir</a></td>
                        </tr>

                    <?php endforeach;?>
                </tbody>
            </table>

