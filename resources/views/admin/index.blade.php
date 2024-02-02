@extends('layouts.template')

@section('title', 'Adicionar contato')

@section('content')
<div class="container">
    <h1>Listagem de Contatos</h1>

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif

    <a href="{{ route('contact.create') }}" class="btn btn-primary">Criar contato</a>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($contacts as $contact) 
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td><a href="{{ route("contact.show", $contact->id) }}">Detalhe</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
