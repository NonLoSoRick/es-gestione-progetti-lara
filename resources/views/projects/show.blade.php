@extends('layouts.app')

@section('title', $project->name)

@section('content')
<h1 class="mb-4">{{ $project->name }}</h1>
<p>{{ $project->description }}</p>
<a href="{{ route('projects.index') }}" class="btn btn-secondary">Torna all'elenco</a>
@endsection