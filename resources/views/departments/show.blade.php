@extends('layouts.main')

@section('content')
    <h2 class="m-5">Reparto {{$department->name}}</h2>
    
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{$department->name}}
        </li>
        <li class="list-group-item">
            Descrizione: {{$department->descrizione}}
        </li>
        <li class="list-group-item">
            Create at: {{$department->created_at}}
        </li>
        <li class="list-group-item">
            Update at: {{$department->updated_at}}
        </li>
    </ul>
@endsection
