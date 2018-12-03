<a href="/product/create">create product</a>
<table>
    <tr>
        <th>name</th>
        <th>category</th>
        <th>action</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td> <a href="/products/{{$product->category_id}}">{{$product->category->name}}</a></td>
            <td>
                <a href="/product/{{$product->id}}/edit">edit</a>
                
                <form action="/product/{{$product->id}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" name="submit" value="delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
