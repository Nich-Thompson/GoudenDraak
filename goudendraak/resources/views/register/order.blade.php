@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Bestellingen</h1>
                @foreach($dishes as $dish)
                    <div class="row m-2 p-3 rounded border border-light shadow-sm bg-white">
                        <div class="d-flex flex-column w-50">
                            <div class="h5 m-0 fw-bold mb-3">
                                {{ $dish->dishes_id }}
                                . {{ \App\Models\Dish::query()->where('id', '=', $dish->dishes_id)->pluck('name')->first() }}</div>
                            <div>
                                <form action="{{ route('postComment', $dish->id) }}" method="POST">
                                    @csrf
                                    <input type="text" name="saleId" value="{{ $saleId }}" hidden>
                                    <input type="text" name="comment" placeholder="Opmerking" class="form-control mb-2" value="{{ $dish->comment }}">
                                    <button type="submit" id="{{ $dish->id }}" class="btn btn-primary">
                                        Voeg opmerking toe.
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
