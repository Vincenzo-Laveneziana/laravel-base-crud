@extends('layouts.main')

@section('content')
    
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
                    <td>Show</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                @endforeach
                              
            </tbody>
        </table>
    </section>
@endsection