@extends('layouts.main')

@section('content')
    

    <section class="products d-flex flex-column align-items-center">
        <h2 class="m-5">Product link</h2>
        <table class="table col-10">
            <thead>
                <tr>
                    <th>Immagine</th>
                    <th>Marca</th>
                    <th>Nome</th>
                    <th>Tipologia</th>
                    <th>Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><img style="width: 50px" src="{{ $product->img }}" alt="{{ $product->nome }}"></td>
                        <td class="align-middle">{{ $product->marca }}</td>
                        <td class="align-middle">{{ $product->nome }}</td>
                        <td class="align-middle">{{ $product->genere }}</td>
                        <td class="align-middle">{{ $product->prezzo }}€</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

{{-- @section('content')
    

    <section class="products">
        <h2 class="text-center m-5">Product link</h2>
        <div class="row text-center">
            @foreach ($products as $product)
            <div class="col-sm border border-dark rounded m-3 p-3">
              <img class="w-25 p-4" src="{{ $product->img }}" alt="{{ $product->nome }}">
              <h2>{{ $product->marca }}</h2>
              <h3>{{ $product->nome }}</h3>
              <h3>{{ $product->prezzo }} €</h3>
            </div>
                
            @endforeach
          </div>
    </section>
@endsection
 --}}



