@extends('layouts.main')

@section('content')
    
    <h2 class="m-5">Modifica il reparto {{$department->name}}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form class="m-5" action="{{route('departments.update', $department->id)}}" method="POST">
        
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">None *</label>
            <input type="text" class="form-control" value="{{ old('name', $department->name) }}" name="name" id="name" placeholder="Nome reparto">
        </div>

        <div class="form-group">
            <label for="descrizione">Descrizione *</label>
            <input type="text" class="form-control" value="{{ old('descrizione', $department->descrizione) }}" name="descrizione" id="descrizione" placeholder="Descrizione del reparto">
        </div>
        <input class="btn btn-primary" type="submit" value="Edit">
    </form>
    
@endsection