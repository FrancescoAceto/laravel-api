@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>My Projects</h1>
    <table>
        <thead class="table table-striped">
            <th>
                Title
            </th>
            <th>
                Slug
            </th>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>
                        {{$project->title}}
                    </td>
                    <td>
                        {{$project->slug}}
                    </td>
                    <td>
                        <a href="{{route('adminprojects.show', $project)}}">Apri</a>
                    </td>
                    <td>
                        <a href="{{route('adminprojects.create', $project)}}" class="btn btn-primary">Aggiungi un progetto</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection