@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Progetto: {{$project->name}}</h1>

    <hr>

    <div class="card">
        <div class="card-title">Repo:</div>
        <div class="card-body">
            <a href="{{$project->repo}}">Github</a>
        </div>
    </div>
</div>
@endsection