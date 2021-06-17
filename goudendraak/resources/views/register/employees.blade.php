@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Medewerkers</h1>
                @foreach($employees as $employee)
                    <div class="row m-2 p-3 rounded border border-light shadow-sm bg-white">
                        <div class="d-flex flex-column w-50">
                            <div class="h5 m-0 fw-bold">
                                {{ $employee->name }} </div>
                        </div>
{{--                        <div class="d-flex flex-column justify-content-end w-50 text-right pb-2">--}}
{{--                            <a id="{{ $order->id }}" class="btn btn-primary" href="{{ route('getRegisterOrder', $order->id) }}">--}}
{{--                                Ga naar bestelling--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
