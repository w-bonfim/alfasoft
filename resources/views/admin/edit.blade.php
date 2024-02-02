@extends('layout')

@section('title', 'Editar contato')

@section('content')

<div class="container">
    <h1 class="mx-auto p-2" >Editar contato</h1>
    
    <form action="{{ route("contact.update", $contact->id) }}" method="POST">
        @csrf()
        <input type="hidden" name="_method" value="PUT" />
        <div class="row">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="phone" name="phone" class="form-control" placeholder="" value="{{ $contact->phone }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
             </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" placeholder="name@example.com"  value="{{ $contact->email }}">

                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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