@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Bestellingen</h1>
                <form action="{{ route('getSearchDishes') }}">
                    <div class="input-group">
                        <input type="text" name="searchTerm" class="form-control" placeholder="Zoek op naam, nummer of categorie">
                        <button type="submit" class="btn btn-primary">Zoek</button>
                    </div>
                </form>
                @foreach($dishes as $dish)
                    <div class="row m-2 p-3 rounded border border-light shadow-sm bg-white">
                        <div class="d-flex flex-column w-50">
                            <div class="h5 m-0 fw-bold">
                                {{ $dish->number }}.{{ $dish->number_addition }} {{ $dish->name }}</div>
                            <p>{{ $dish->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
