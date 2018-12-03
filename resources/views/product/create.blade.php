<form action="/product" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="text" name="name" >
	<select name="category_id">
		@foreach($categories as $cat)
  			<option value="{{$cat->id}}">{{$cat->name}}</option>
  		@endforeach

</select>
	<input type="submit" name="submit" value="ADD">
</form>