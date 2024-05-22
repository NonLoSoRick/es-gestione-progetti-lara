@extends('layouts.app')

@section('title', 'Elenco Progetti')

@section('content')
<h1 class="mb-4">Progetti</h1>
<a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Crea Progetto</a>
@if($projects->count())
<ul class="list-group">
    @foreach($projects as $project)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
        <div>
            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Modifica</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@else
<p>Nessun progetto disponibile.</p>
@endif
@endsection