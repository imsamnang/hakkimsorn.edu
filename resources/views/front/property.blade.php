@extends('layouts.backend.khmer24_layout')

@push('css')
<link href="{{ asset('assets/css/property.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
@endpush

@section('content')

	<div class="container">
		{{-- @include('properties') --}}
		<div class="home-page">
			<!-- top menu -->
			<section class="bg-white border-bottom nav-header-bar menu-items">
					<div class="my-container">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="{{ route('home') }}"><span class="icon icon-home"></span></a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<button class="nav-link btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Buy</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#house-for-sale.html">House for Sale</a>
									<a class="dropdown-item" href="#apartment-for-sale.html">Apartment for Sale</a>
									<a class="dropdown-item" href="#landed-properties-for-sale.html">Land for Sale</a>
									<a class="dropdown-item" href="#commercial-properties-for-sale.html">Commercial for Sale</a>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
							<button class="nav-link btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	Rent</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#house-for-rent.html" House for Rent< a>
								<a class="dropdown-item" href="#apartment-for-rent.html">Apartment for Rent</a>
								<a class="dropdown-item" href="#landed-properties-for-rent.html">Landed for Rent</a>
								<a class="dropdown-item" href="#commercial-properties-for-rent.html">Commercial for Rent</a>
								<a class="dropdown-item" href="#room-for-rent.html">Room for Rent</a>
							</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#properties-wanted.html">Properties Wanted</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#agent-services.html">Agent Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#others-properties.html">Other Categories</a>
						</li>
					</ul>
				</div>
			</section>
			<!-- Find Properties in Cambodia -->
			<section class="border-bottom search-box">
				<div class="my-container">
					<div class="text-center">
						<h1 class="big-title">Find Properties in Cambodia</h1>
						<p class="small-title">Welcome to tinhtodahy.com, the biggest online market in Cambodia.</p>
					</div>
					<div class="pb-3 pt-2">
						<div class="row justify-content-center">
							<div class="col-9">
								<form class="form" action="#" method="get">
									<div class="input-group form-row">
										<input type="text" class="form-control" name="q" placeholder="Search House & Lands...">
										<select class="form-control col-3" name="category" required>
											<option value="">Category</option>
											@foreach ($category_by_properties as $category)
												<option value="{{$category->category_name}}">{{$category->category_name}}</option>
											@endforeach
											</select>
										<select class="form-control col-3" name="location">
											<option value="">Locations</option>
											@foreach ($provinces as $province)
												<option value="{{$province->name_en}}">{{$province->name_en}}</option>
											@endforeach
										</select>
										<input type="submit" value="Search" name="" class="form-control btn btn-primary col-2">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- >Find House & Lands by Category -->
			<section class="list-categories">
				<div class="my-container">
					<div class="categories-items">
						<div class="header">
							<h2 class="title">Find House & Lands by Category</h2>
							<a class="btn btn-outline-primary btn-sm" href="#all-property.html">View All</a>
						</div>
						<div class="content">
							<ul class="list-unstyled items-has-image sale-categories">
								<li class="">
									<div class="item">
										<div class="detail">
											<div class="image">
												<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-house.jpg" />
											</div>
											<div class="title">House</div>
										</div>
										<div class="controls">
											<a href="#house-for-sale.html"><span class="btn">Buy</span></a>
											<a href="#house-for-rent.html"><span class="btn">Rent</span></a>
										</div>
									</div>
								</li>
								<li class="">
									<div class="item">
										<div class="detail">
											<div class="image">
												<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-land.jpg" />
											</div>
											<div class="title">Lands</div>
										</div>
										<div class="controls">
											<a href="#landed-properties-for-sale.html"><span class="btn">Buy</span></a>
											<a href="#landed-properties-for-rent.html"><span class="btn">Rent</span></a>
										</div>
									</div>
								</li>
								<li class="">
									<div class="item">
										<div class="detail">
										<div class="image">
										<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-apartment.jpg" />
										</div>
										<div class="title">Apartment</div>
										</div>
										<div class="controls">
										<a href="#apartment-for-sale.html"><span class="btn">Buy</span></a>
										<a href="#apartment-for-rent.html"><span class="btn">Rent</span></a>
										</div>
									</div>
								</li>
								<li class="">
									<div class="item">
										<div class="detail">
										<div class="image">
										<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-commercial-properties.jpg" />
										</div>
										<div class="title">Commercial Properties</div>
										</div>
										<div class="controls">
										<a href="#commercial-properties-for-sale.html"><span class="btn">Buy</span></a>
										<a href="#commercial-properties-for-rent.html"><span class="btn">Rent</span></a>
										</div>
									</div>
								</li>
								<li class="">
									<div class="item">
										<div class="detail">
										<div class="image">
										<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/categories/photo-room.jpg" />
										</div>
										<div class="title">Room</div>
										</div>
										<div class="controls one">
										<a href="#room-for-rent.html"><span class="btn">Rent</span></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Top House & Lands -->
			<section class="top-items pt-3">
				<div class="my-container">
					<div class="top-item-box">
						<div class="header">
							<h1 class="title">Top House & Lands</h1>
							<a href="#all-property.html" class="btn btn-sm btn-link">View All</a>
						</div>
							<div class="content">
								<div class="list-top-items owl-carousel owl-carousel-top-items">
									@foreach ($properties as $property)
										<div class="item">
											<a class="item" href="{{ route('post.show',$property->slug) }}" title="{{ $property->title }}">
											<article>
											<div class="company-logo">
											<img class="img-cover" src="{{isset($property->galleries[0]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[0]->gallery_image):asset('assets/img/no_image.gif')}}" alt="{{ $property->title }}">
											</div>
											<h3 class="title truncate truncate-2">{{ $property->title }}</h3>
											<p class="price text-red m-0">{{ $property->price }}</p>
											</article>
											</a>
										</div>
									@endforeach
								</div>
							</div>

					</div>
				</div>
			</section>
			<!-- Browse by Location -->
			<section class="list-locations pt-3">
				<div class="my-container">
					<div class="list-locations">
						<div class="header">
							<h2 class="title">Browse by Location</h2>
							</div>
							<div class="content">
							<ul class="list-unstyled">
								@foreach ($provinces as $province)
									<li class="big">
									<a href="{{ route('propery.by.province',$province->slug_en) }}" title="Phnom Penh" class="truncate">{{ $province->name_en }}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- Recent House & Lands -->
			<section class="list-last-items pt-3">
				<div class="my-container">
					<div class="last-items pt-3 pb-3">
						<div class="header">
							<h2 class="title">Recent House & Lands</h2>
							<a class="btn btn-link btn-sm" href="#all-property.html">View All</a>
						</div>
						<div class="content">
							<ul class="list-unstyled">
								@foreach ($properties as $property)								
									<li class="item">
										<a class="item border bg-white rounded" href="{{ route('post.show',$property->slug) }}" title="{{ $property->title }}">
											<article>
												<div class="image">
													<img class="img-cover" src="{{isset($property->galleries[0]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[0]->gallery_image):asset('assets/img/no_image.gif')}}" alt="{{ $property->title }}">
												</div>
												<div class="detail">
													<h3 class="title truncate truncate-2">{{ $property->title }}</h3>
													<p class="price text-red m-0">${{ $property->price }}</p>
												</div>
											</article>
										</a>
									</li>
								@endforeach
							</ul>
							<div class="row justify-content-md-center pt-3">
								<div class="col-8">
									<a href="#all-property.html" class="btn btn-primary btn-block">View All</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<script type="text/javascript">
					$(document).ready(function(){
						$('.owl-carousel-top-items').owlCarousel({
						    loop:true,
						    margin:15,
						    responsiveClass:true,
						    dots: false,
						    nav: true,
						    autoplay: true,
						    autoplayHoverPause:true,
						    autoplayTimeout: 5000,
						    loop:true,
						    responsive:{
						        0:{
						            items:1,
						            nav:true
						        },
						        600:{
						            items:3,
						            nav:false
						        },
						        1000:{
						            items:4,
						            nav:true,
						            loop:false
						        }
						    }
						});
					});
			</script>
		</div>
	</div>

@endsection

@push('js')
	<script>
		$(document).ready(function(){

		});	
	</script>
@endpush