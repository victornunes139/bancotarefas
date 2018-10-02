<div class="box box-primary">
    <div class="box-header with-border">
        <table class="table table-striped table-bordered table-hover">
            <h1>Detalhes</h1>
            <thead>
               <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>Descrição</th>
                 <th>Prazo</th>
                 <th>Prioridade</th>
                 <th>Status</th>
               </tr>
            </thead>
            <tr>
                 <td><?php echo $activity->id; ?></td>
                 <td><?php echo $activity->name; ?></td>
                 <td><?php echo $activity->description; ?></td>
                 <td><?php $data = explode(" ", $activity->dateatime);
					 $dataseparada = $data[0];
					 $dataseparada2 = $data[1];
					 echo "Data: " . implode("/", array_reverse(explode("-", $dataseparada))) . "<br>Hora: " . $dataseparada2;?></td>
                 <td><?php echo $priority->name; ?></td>
                 <td><?php echo $status->name; ?></td>
            </tr>

        </table>
    </div>
</div>
