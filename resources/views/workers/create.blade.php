@extends('layouts.main')

@section('content')
    
    <h2 class="m-5">Aggiungi un nuovo dipendente</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form class="m-5" action="{{route('workers.store')}}" method="POST">
        
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control"  value="{{old('name')}}" name="name" placeholder="Nome dipendente">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"  value="{{old('gender')}}" name="gender" placeholder="Sesso">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="{{old('description')}}" name="description" placeholder="description del dipendente">
        </div>
        
        <div class="form-group">
            <input type="number" class="form-control"  value="{{old('age')}}" name="age" placeholder="Anni dipendente">
        </div>

        <input class="btn btn-primary" type="submit" value="Create">
    </form>
    
@endsection