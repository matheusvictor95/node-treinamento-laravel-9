<div id="delete-{{$usuario->id}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i>Tem Certeza?</h4>
        <div class="row">
                <p>Tem certeza que deseja excluir o usuario: {{$usuario->firstname}}?</p>  
        </div> 
        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        <form action="{{route('admin.usuario.delete',$usuario->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="waves-effect waves-green btn red right">Excluir</button><br>
        </form>
        
    </div>
  </div>