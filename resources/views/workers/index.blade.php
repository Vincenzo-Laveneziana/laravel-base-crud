@extends('layouts.main')

@section('content')

    @if (session('deleted'))
        <div class="alert alert-success mt-3">
            {{session('deleted')}} Eliminato con successo
        </div>
    @endif
    
    <section class="reparti d-flex flex-column align-items-center">
        <h2 class="m-5">Dipendenti</h2>
        <table class="table col-10">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Genere</th>
                    <th>Descrizione</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workers as $worker)
                <tr>
                    <td>{{$worker->id}}</td>
                    <td>{{$worker->name}}</td>
                    <td>{{$worker->gender}}</td>
                    <td>{{$worker->age}}</td>
                    <td>{{$worker->description}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('workers.show', $worker->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('workers.edit', $worker->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('workers.destroy', $worker->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
                              
            </tbody>
        </table>
        <a class="nav-link" href="{{route('workers.create')}}">Aggiungi Dipendente</a>
    </section>
@endsection