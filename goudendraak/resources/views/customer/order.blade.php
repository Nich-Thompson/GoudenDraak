@extends('customer.layout')

@section('content')
    <h1 class="display-3">Uw Bestelling</h1><br>
    <div class="item-list">
        <div id="itemList">
        </div><br>
        <a class="btn finalize-button order-button" href="{{ route('klant.index') }}" id="finalizeButton">Bestellen</a>
    </div>

@endsection

<script src={{ asset('../js/order.js') }} defer></script>
