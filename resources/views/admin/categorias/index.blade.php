@extends('admin.layout')
@section('titulo','Categorias')
@section('conteudo')
<div class="fixed-action-btn">
    <a class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
        <i class="large material-icons">add</i>
    </a>
</div>
@include('admin.categorias.create')

<div class="row container crud">
   
    <div class="row titulo ">
        <h1 class="left">Categorias</h1>
        <span class="right chip">{{ $categorias->count() }} Categorias exibidas nesta página</span>
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
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Opções</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td> <br>
                        <td>{{ $categoria->descricao }}</td> 
                         <td><a class="btn-floating  waves-effect waves-light orange"><i
                                    class="material-icons">mode_edit</i></a>
                            <a href="#delete-{{ $categoria->id }}"
                                class="btn-floating modal-trigger waves-effect waves-light red"><i
                                    class="material-icons">delete</i></a>
                        </td>
                        @include('admin.categorias.delete') 
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <div class="row center">
        {{ $categorias->links('site.custom.paginate') }}
    </div>
@endsection