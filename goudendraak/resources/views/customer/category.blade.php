@extends('customer.layout')

@section('content')
    <h1>{{ $category->name }}</h1>
    @foreach($dishes as $dish)
        <div>
            {{ $dish->name }}
        </div>
    @endforeach
@endsection
