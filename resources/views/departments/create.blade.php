@extends('layouts.main')

@section('content')
    
    <h2 class="m-5">Crea un nuovo reparto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form class="m-5" action="{{route('departments.store')}}" method="POST">
        
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control"  value="{{old('name')}}" name="name" placeholder="Nome reparto">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" value="{{old('descrizione')}}" name="descrizione" placeholder="Descrizione del reparto">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
    
@endsection