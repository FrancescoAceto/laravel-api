@extends('layouts.admin')

@section('content')
<form action="{{route('adminprojects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="container">
        <h1>Aggiungi un progetto</h1>
        
        <div class="mb-3">
            <label for="">TITOLO</label>
            <input class="form-controll @error('title') is-invalid @enderror"  type="text">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="">REPO</label>
            <input class="form-controll @error('title') is-invalid @enderror"  type="text">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="">DESCRIZIONE</label>
            <input class="form-controll @error('title') is-invalid @enderror"  type="text">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="">IMMAGINE DI COPERTINA</label>
            <input type="file" value="">
        </div>
    
        <div class="mb-3">
            <select name="" id="">
                @foreach ($types as $type)
                   <option value="">{{$type->name}}</option>         
                @endforeach
            </select>
        </div>
    
        <div class="mb-3 form-group" >
            <h4>Tecnologie</h4>
            <div class="form-check">
                @foreach ($technologies as $technology)
                    <input type="text">
                    <label for="">{{$technology->name}}</label>
                @endforeach
            </div>
        </div>
        
        
    
        <button type="submit" class="btn btn-primary">
            Aggiungi
        </button>
    </div>
</form>

@endsection