@extends('login.layout')
@section('title', 'Cadastrar Usuário')
@section('conteudo')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
@endif
<section class="row container login">
    <form action="{{route('admin.usuario.store')}}" method="POST" class="col s12 m12 l6 offset-l3">
        @csrf
        
        Nome: <br> <input type="text" name="firstname"> <br>
        Sobrenome: <br> <input type="text" name="lastname"> <br>
        Email: <br> <input type="email" name="email"> <br>
        Senha: <br> <input type="password" name="password"> <br>
        
        <button type="submit" class="btn waves-effect waves-light green">Cadastrar</button>
        </form>
</section>

@endsection