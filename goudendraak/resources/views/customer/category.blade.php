@extends('customer.layout')

@section('content')
    @if (strlen($errorMessage) > 0)
        <div class="alert alert-danger" id="errors">
            <strong>Er zijn een aantal errors!</strong><br><br>
            <ul>
                <li>{{ $errorMessage }}</li>
            </ul>
        </div>
    @endif
    <h1 class="display-3">{{ $category->name }}</h1><br>
    <category-menu :items="{{ $dishes }}"></category-menu>
@endsection
