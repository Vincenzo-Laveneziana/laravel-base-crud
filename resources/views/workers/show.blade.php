@extends('layouts.main')

@section('content')
    
    <ul class="list-group mt-5">
        <li class="list-group-item">
            Id dipendente: {{$worker->id}}
        </li>
        <li class="list-group-item">
            Nome: {{$worker->name}}
        </li>
        <li class="list-group-item">
            Gender: {{$worker->gender}}
        </li>
        <li class="list-group-item">
            Anni: {{$worker->age}}
        </li>
        <li class="list-group-item">
            Update at: {{$worker->description}}
        </li>
        <li class="list-group-item">
            Assunto dal : {{$worker->created_at}}
        </li>
    </ul>
@endsection
