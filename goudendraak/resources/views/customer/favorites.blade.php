@extends('customer.layout')

@section('content')
    <h1 class="display-3">Favorieten</h1><br>
    <div id="itemList">
        <div
            v-for="item in items"
        >
            <menu-item :dish="item"></menu-item>
        </div>
    </div>
@endsection

<script src={{ asset('../js/favorites.js') }} defer></script>
