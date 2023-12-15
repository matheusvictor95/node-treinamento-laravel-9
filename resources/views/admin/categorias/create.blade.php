<!-- Modal Structure -->
<div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Nova Categoria</h4>
      <form action="{{route('admin.categoria.store')}}" class="col s12" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
        <div class="row">
          <div class="input-field col s6">
            <input name="nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12">
            <input name="descricao" id="descricao" type="text" class="validate">
            <label for="descricao">Descrição</label>
          </div>  
        </div> 
        <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button><br>
    </div>
  </form>
  </div>