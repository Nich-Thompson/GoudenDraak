@extends('customer.layout')

@section('content')
    <h1 class="display-3">Uw Bestelling</h1><br>
    <div class="item-list">
        <div id="itemList">
        </div>
        <br>
        <form action="{{ route('postOrder') }}" method="post">
            @csrf
            <label for="orderInput"></label><input type="text" name="order" id="orderInput" value="" hidden> <!--Value is set in js-->
            <button type="submit" class="btn finalize-button final-order-button" id="finalizeButton">
                Bestellen
            </button>
        </form>
    </div>

@endsection

<script src={{ asset('../js/order.js') }} defer></script>
