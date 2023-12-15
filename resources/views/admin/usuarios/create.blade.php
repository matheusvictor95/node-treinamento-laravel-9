 <!-- Modal Structure -->
 <div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo Usuário</h4>
      <form action="{{route('admin.usuario.store')}}" class="col s12" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <div class="input-field col s6">
            <input name="firstname" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="lastname" id="lastname" type="text" class="validate">
            <label for="lastname">Sobrenome</label>
          </div>
          <div class="input-field col s12">
            <input name="email" id="email" type="text" class="validate">
            <label for="email">Email</label>
          </div>
        </div> 
        <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button><br>
    </div>
    
  </form>
  </div>