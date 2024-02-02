@extends('layout')

@section('title', 'Adicionar contato')

@section('content')

<div class="container">
    <h1 class="mx-auto p-2" >Adicionar contato</h1>
    
    <form action="{{ route("contact.store") }}" method="POST">
        @csrf()
        <div class="row">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="email" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="phone" name="phone" class="form-control" placeholder="(11) 1111-1111">
             </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
             </div>
         </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
            <div class="col-md-6">
                <a href="{{ route("contact.index") }}" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </form>
</div>
@endsection