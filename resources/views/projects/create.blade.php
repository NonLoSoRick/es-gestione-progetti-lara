@extends('layouts.app')

@section('title', 'Crea Progetto')

@section('content')
<h1 class="mb-4">Crea Progetto</h1>
<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>
@endsection