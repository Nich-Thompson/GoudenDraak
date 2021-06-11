@extends('customer.layout')

@section('content')
    <h1 class="display-3">{{ $category->name }}</h1><br>
    <category-menu :items="{{ $dishes }}"></category-menu>
@endsection

<script>
    import MenuItem from "../../js/components/customer/MenuItem";

    export default {
        components: {MenuItem}
    }
</script>
