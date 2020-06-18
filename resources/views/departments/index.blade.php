@extends('layouts.main')

@section('content')

    @if (session('deleted'))
        <div class="alert alert-success mt-3">
            {{session('deleted')}} Eliminato con successo
        </div>
    @endif
    
    <section class="reparti d-flex flex-column align-items-center">
        <h2 class="m-5">Reparti</h2>
        <table class="table col-10">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('departments.show', $department->id)}}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('departments.edit', $department->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('departments.destroy', $department->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
                              
            </tbody>
        </table>
    </section>
@endsection