@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')
<h1 class="mb-4">Modifica Progetto</h1>
<form action="{{ route('projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $project->name }}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description">{{ $project->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>
@endsection