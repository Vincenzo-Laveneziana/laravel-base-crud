<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand nav-dark bg-dark">
            <div class="nav-brand text-info">Market</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departments.index')}}">Reparti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('departments.create')}}">Aggiungi Reparto</a>
                </li>
            </ul>
        </nav>
    </header>