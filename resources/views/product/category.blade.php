<table>
    <tr>
        <th>name</th>

    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
        </tr>
    @endforeach
</table>