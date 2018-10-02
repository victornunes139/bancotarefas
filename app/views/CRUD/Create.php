<?php if (isset($erro) > 0) {
	?>
  <div class="alert alert-danger">
	   <?php foreach ($erro as $erro) {
		echo $erro . "<br>";
	}?>
  </div>
<?php }?>


<div class="box box-primary">
  <h1>Cadastrar Atividade</h1>
  <div class="box-header with-border">
    <form action="<?php echo URL_BASE . "Activity/add"; ?>" method="post">

      <input type="hidden"
         name="_token" value="{{ csrf_token() }}" />

      <div>
        <label>Nome</label>
        <input name="name" class="form-control">
      </div>

      <div>
        <label>Descricao</label>
        <input name="description" class="form-control">
      </div>

      <div>
         <label>Prazo</label>
         <input name="dateatime" type="datetime-local" class="form-control">
      </div>

      <div class="form-group">
        <label>Prioridade</label>
        <select name="priority_id" class="form-control">
              <option value="1">Muito Alta</option>
              <option value="2">Alta</option>
              <option value="3">Media</option>
              <option value="4">Baixa</option>
        </select>
      </div>

       <div class="form-group">
        <label>Situação da atividade</label>
        <select name="status_id" class="form-control">
              <option value="1">A fazer</option>
              <option value="2">Em execucao</option>
              <option value="3">Feita</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">
         Enviar
      </button>

    </form>
  </div>
</div>

