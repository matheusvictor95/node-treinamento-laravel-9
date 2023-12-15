@extends('admin.layout')
@section('titulo', 'Produtos')
@section('conteudo')
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
            <i class="large material-icons">add</i>
        </a>
    </div>
    @include('admin.usuarios.create')
   
    <div class="row container crud">
       
        <div class="row titulo ">
            <h1 class="left">Usuários</h1>
            <span class="right chip">{{ $usuarios->count() }} usuários exibidos nesta página</span>
        </div>

        <nav class="bg-gradient-blue">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input placeholder="Pesquisar..." id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>

        <div class="card z-depth-4 registros">
            @include('admin.includes.mensagens')
            <table class="striped ">
                <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>Primeiro Nome</th>
                        <th>Ultimo Nome</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->firstname }}</td>
                            <td>{{ $usuario->lastname }}</td>
                            <td>{{ $usuario->email }}
                            <td><a class="btn-floating  waves-effect waves-light orange"><i
                                        class="material-icons">mode_edit</i></a>
                                <a href="#delete-{{ $usuario->id }}"
                                    class="btn-floating modal-trigger waves-effect waves-light red"><i
                                        class="material-icons">delete</i></a>
                            </td>
                            @include('admin.usuarios.delete')
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection