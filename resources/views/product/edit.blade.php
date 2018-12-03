<form action="/product/{{$product->id}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="put">
	<input type="text" name="name"  value="{{$product->name}}">
	<select name="category_id">
		@foreach($categories as $cat)
  			<option value="{{$cat->id}}">{{$cat->name}}</option>
  		@endforeach

</select>
	<input type="submit" name="submit" value="edit">
</form>