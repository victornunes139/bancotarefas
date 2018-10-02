<div class="box box-primary">
  <h1>Editar Atividade</h1>
  <div class="box-header with-border">
    <form action="<?php echo URL_BASE . "Activity/add"; ?>" method="post">

      <input type="hidden"
         name="_token" value="{{ csrf_token() }}" />

      <div>
        <input name="id" type="hidden" value="<?php echo $activity->id; ?>">
      </div>

      <div>
        <label>Nome</label>
        <input name="name" class="form-control" value="<?php echo $activity->name; ?>">
      </div>

      <div>
        <label>Descricao</label>
        <input name="description" class="form-control" value="<?php echo $activity->description; ?>">
      </div>

      <div>
         <label>Prazo</label>
         <input name="dateatime" type="datetime" class="form-control"  value="<?php echo $activity->dateatime; ?>">
      </div>

        <div class="form-group">
                <label for="nome">Prioridade da Atividade</label>
                <select class="form-control" name="priority_id">
                    <?php $selected = '';?>
                    <?php foreach ($priority as $priority_list): ?>
                        <?php
if ($priority_list->id == $activity->priority_id) {
	$selected = 'selected';
}
?>
                        <option <?php echo $selected; ?> value="<?php echo $priority_list->id; ?>"><?php echo $priority_list->name; ?></option>
                        <?php $selected = '';?>
                    <?php endforeach;?>
                </select>
            </div>


       <div class="form-group">
                <label for="nome">Status da Atividade</label>
                <select class="form-control" name="status_id">
                    <?php $selected = '';?>
                    <?php foreach ($status as $status_list): ?>
                        <?php
if ($status_list->id == $activity->status_id) {
	$selected = 'selected';
}
?>
                        <option <?php echo $selected; ?> value="<?php echo $status_list->id; ?>"><?php echo $status_list->name; ?></option>
                        <?php $selected = '';?>
                    <?php endforeach;?>
                </select>
            </div>

      <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">
         Enviar
      </button>

    </form>
  </div>
</div>


