<table>
    <thead>
    <tr>
        <th>Sale ID</th>
        <th>Gerecht ID</th>
        <th>Gerechtnaam</th>
        <th>Prijs</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sales as $sale)
        @foreach($sale->dishes as $dish)
            <tr>
                <td>
                    {{$sale->sales->id}}
                </td>
                <td>
                    {{$dish->id}}
                </td>
                <td>
                    {{$dish->name}}
                </td>
                <td>
                    € {{$dish->price}}
                </td>
            </tr>
        @endforeach
    @endforeach
    <tr>
        <td>Totaal verdiend vandaag:</td>
        <td> € {{$total_earned}}</td>
    </tr>
    </tbody>
</table>

