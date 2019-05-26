<div class="sub_cat">
	<ul class="list-unstyled items-sub-categories">
		@foreach($childs as $child)
			<li>
				@if (Request::route()->getName() == "post.index")
	        <a href="{{route('post.create',$child->id)}}">&raquo; {{$child->category_name}}</a>
	      @else
					<a href="{{route('post.edit',[Request::segment(2),$child->id])}}">&raquo; {{$child->category_name}}</a>
				@endif
				@if(count($child->childs))
					@include('freeads.loadsubmenu',['childs' => $child->childs])
				@endif			
			</li>
		@endforeach
	</ul>
</div>