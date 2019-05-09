<select name="category" class="form-control select-category">
	<option value="">All Category</option>
		@foreach ($categories as $category)
			<option value="property-housing-rentals" class="main">
					{{$category->category_name}}
				  @if(count($category->childs))
				      @include('front.category_submenu',['childs' => $category->childs])
				  @endif
			</option>
		@endforeach
</select>