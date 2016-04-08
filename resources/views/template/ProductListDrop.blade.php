<div class="4u 12u$(xsmall)">
	<div class="select-wrapper">
		<select name="ProductName" id="ID">
			<option value="">- Product Name -</option>
            @foreach($productName as $product)
                <option value="{{$product->product_name}}">{{$product->product_name}}</option>
            @endforeach
		</select>
	</div>
</div>