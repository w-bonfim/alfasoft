@extends('layouts.template')

@section('title', 'Adicionar contato')

@section('content')

<div class="container">
    <h1 class="mx-auto p-2" >Detalhe do contato</h1>
    
    <div class="row">
        <div class="card" style="width: 20rem" >
            <div class="card-body">
                <h5 class="card-title"><strong>Nome:</strong> {{ $contact->name }}</h5>
                <p class="card-text"><strong>Telefone:</strong> {{ $contact->phone }}</p>
                <p class="card-text"><strong>E-mail:</strong> {{ $contact->email }}.</p>
             
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route("contact.edit", $contact->id) }}" class="btn btn-primary">Editar</a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route("contact.destroy", $contact->id) }}" method="POST">
                            @csrf()
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Deletar</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@endsection