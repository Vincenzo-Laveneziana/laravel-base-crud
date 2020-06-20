@extends('layouts.main')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form class="m-5" action="{{route('workers.update', $worker->id)}}" method="POST">
        
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Nome *</label>
            <input type="text" class="form-control" value="{{ old('name', $worker->name) }}" name="name" id="name" placeholder="Nome reparto">
        </div>

        <div class="form-group">
            <label for="gender">Genere *</label>
            <input type="text" class="form-control" value="{{ old('gender', $worker->gender) }}" name="gender" id="gender" placeholder="Sesso">
        </div>

        <div class="form-group">
            <label for="age">Anni *</label>
            <input type="text" class="form-control" value="{{ old('name', $worker->age) }}" name="age" id="age" placeholder="age">
        </div>

        <div class="form-group">         
            <label for="description">Descrizione *</label>
            <input type="text" class="form-control" value="{{ old('descrizione', $worker->description) }}" name="description" id="description" placeholder="Descrizione del dipendente">
        </div>
        <input class="btn btn-primary" type="submit" value="Edit">
    </form>
    
@endsection