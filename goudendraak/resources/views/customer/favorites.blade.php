@extends('customer.layout')

@section('content')
    <h1 class="display-3">Favorieten</h1><br>
    <div class="item-list" id="itemList">
    </div>
@endsection

<script src={{ asset('../js/favorites.js') }} defer></script>
