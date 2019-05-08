<div class="sub_cat">
	<ul class="list-unstyled items-sub-categories">
		@foreach($childs as $child)
			<li>
       	<a href="{{route('post.create',$child->id)}}">&raquo; {{$child->category_name}}</a>
				@if(count($child->childs))
					@include('freeads.loadsubmenu',['childs' => $child->childs])
				@endif
			</li>
		@endforeach
	</ul>
</div>