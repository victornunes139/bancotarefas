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
        <select name="priority" class="form-control">
              <option value="Muito Alta">Muito Alta</option>
              <option value="Alta">Alta</option>
              <option value="Média">Média</option>
              <option value="Baixa">Baixa</option>
        </select>
      </div>

       <div class="form-group">
        <label>Situação da atividade</label>
        <select name="status" class="form-control">
              <option value="A fazer">A fazer</option>
              <option value="Em execução">Em execução</option>
              <option value="Feita">Feita</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">
         Enviar
      </button>

    </form>
  </div>
</div>