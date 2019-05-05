@extends('layouts.backend.khmer24_layout')

@push('css')
<link href="{{ asset('assets/css/property.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
@endpush

@section('content')

	<div class="container">

		<div class="listing-page">
			<div class="my-breadcrumb">
				<div class="my-container">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item" aria-current="page">
								<a href="{{ route('home') }}"><i class="icon-home"></i>Home</a>
							</li>
							<li class="breadcrumb-item" aria-current="page">House & Lands in Phnom Penh, Cambodia</li>
						</ol>
				</nav>
				</div>
			</div>
			<section class="page-header">
				<div class="my-container">
				<h1 class="title">House & Lands in Phnom Penh, Cambodia</h1>
				</div>
			</section>
			<section class="categories-items">
				<div class="my-container">
					<div class="lists-categories">
						<ul class="list-unstyled sub_categories">
							<li><a href="#">House for Sale</a></li>
							<li><a href="#">House for Rent</a></li>
							<li><a href="#">Apartment for Sale</a></li>
							<li><a href="#">Apartment for Rent</a></li>
							<li><a href="#">Land for Sale</a></li>
							<li><a href="#">Landed Properties for Rent</a></li>
							<li><a href="#">Commercial for Sale</a></li>
							<li><a href="#">Commercial for Rent</a></li>
							<li><a href="#">Room for Rent</a></li>
							<li><a href="#">Properties Wanted</a></li>
							<li><a href="#">Agent Services</a></li>
							<li><a href="#">Others</a></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="pb-3">
				<div class="my-container">
					<div class="row">
						{{-- left search --}}
						<div class="col-3 left-side">
							<div class="p-3 bg-white border rounded filter-box">
								<div class="filter_title">Refine your Results</div>
									<form class="form" id="ftr_left" method="get" action="#">
										<div class="form-group filter-group active"><span class="clear_filter fter_d"><a rel="nofollow" class="a_fter_d" data-name="location" data-value="" href="javascript:void(0);">Clear</a></span><label class="filter-title">City/Province</label>
											<div class="filter-data">
												<select class="form-control fter_d  form-control-" name="location">
													<option value="">All</option>
													<option value="phnom-penh" selected>Phnom Penh</option>
													<option value="preah-sihanouk">Preah Sihanouk</option>
													<option value="kampong-cham">Kampong Cham</option>
													<option value="siem-reap">Siem Reap</option>
													<option value="battambang">Battambang</option>
													<option value="kandal">Kandal</option>
													<option value="banteay-meanchey">Banteay Meanchey</option>
													<option value="kampong-chhnang">Kampong Chhnang</option>
													<option value="kampong-speu">Kampong Speu</option>
													<option value="kampong-thom">Kampong Thom</option>
													<option value="kampot">Kampot</option>
													<option value="kep">Kep</option>
													<option value="koh-kong">Koh Kong</option>
													<option value="kratie">Kratie</option>
													<option value="mondulkiri">Mondulkiri</option>
													<option value="oddar-meanchey">Otdar Meanchey</option>
													<option value="pailin">Pailin</option>
													<option value="preah-vihear">Preah Vihear</option>
													<option value="prey-veng">Prey Veng</option>
													<option value="pursat">Pursat</option>
													<option value="ratanakiri">Ratanakiri</option>
													<option value="stung-treng">Stung Treng</option>
													<option value="svay-rieng">Svay Rieng</option>
													<option value="takeo">Takeo</option>
													<option value="tboung-khmum">Tboung Khmum</option>
												</select>
											</div>
										</div>
									<div class="form-group filter-group "><label class="filter-title">Khan/District</label>
										<div class="filter-data scrollbar-light">
											<select class="form-control list_filter list-unstyled fter_d  form-control-" name="district">
												<option value="">All</option>
												<option value="ruessei-kaev">Ruessei Kaev</option>
												<option value="saensokh">Saensokh</option>
												<option value="por-senchey">Por Senchey</option>
												<option value="chrouy-changva">Chrouy Changva</option>
												<option value="preaek-pnov">Preaek Pnov</option>
												<option value="chbar-ampov">Chbar Ampov</option>
												<option value="chamkar-mon">Chamkar Mon</option>
												<option value="doun-penh">Doun Penh</option>
												<option value="prampir-meakkakra">Prampir Meakkakra</option>
												<option value="tuol-kouk">Tuol Kouk</option>
												<option value="dangkao">Dangkao</option>
												<option value="mean-chey">Mean Chey</option>
											</select>
										</div>
									</div>
									<input type="hidden" name="category" value="48" />
									<input type="hidden" name="sortby" value="" />
									</form>
							</div>
							<div class="sponsors text-center pt-3">
							</div>
						</div>
						{{-- right content --}}
						<div class="col col-9 right-side">	
							<div class="bar">
								<div class="left">
									<h2 class="title"><strong>{{ $property_by_province->count() }}</strong> Result On 05 May, 2019 </h2>
								</div>
								<div class="right text-right">
									<ul class="nav justify-content-end">
										<li class="nav-item">
											<label>View</label>
										 	<span class="btn-group mr-1" role="group" aria-label="Basic example">
												<button type="button" class="btn btn-default icon icon-list btn-change-view" disabled></button>
												<button type="button" class="btn btn-default icon-gallery btn-change-view"></button>
											</span>
										</li>
										<li class="nav-item dropdown">
											<label>Sort By</label>
												<a class="btn btn-default btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Laste Ads </a>
												<div class="dropdown-menu btn-sortby" aria-labelledby="dropdownMenuLink">
												<a class="dropdown-item " data-value="latestads" href="#">Laste Ads</a>
												<a class="dropdown-item " data-value="newads" href="#">New Ads</a>
												<a class="dropdown-item " data-value="mosthitads" href="#">Most Hit Ads</a>
												<a class="dropdown-item " data-value="priceasc" href="#">Price: Low to High</a>
												<a class="dropdown-item " data-value="pricedesc" href="#">Price: High to Low</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div>
								<ul class="list-unstyled list-items item-list"> 
									@foreach ($property_by_province as $property)
									<li class="item  special-item  top-item ">
										<a class="border post" href="{{ route('post.show',$property->id) }}" title="{{ $property->title }}">
											<article>
												<div class="item-image">
													<img class="img-cover" src="{{isset($property->galleries[0]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[0]->gallery_image):asset('assets/img/no_image.gif')}}" alt="{{ $property->title }}" />
												</div>
												<div class="item-detail">
													<h2 class="item-title truncate truncate-2 ">{{ $property->title }}</h2>
													<p class="description truncate truncate-2">{{ $property->description }}
														<i>tel: 010245643,011735635</i>
													</p>
													<ul class="list-unstyled summary">
														<li>Phnom Penh</li>
														<li><time datetime="2019-05-04 18:00:01">16 hours ago</time></li>
														<li>29 hits</li>
													</ul>
													<p class="item-price m-0 text-red">$185,000</p>
													<div class="list_thumb">
														<span class="thumb">
															<img class="img-cover" src="{{isset($property->galleries[1]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[1]->gallery_image):asset('assets/img/no_image.gif')}}">
														</span>
														<span class="thumb">
															<img class="img-cover" src="{{isset($property->galleries[2]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[2]->gallery_image):asset('assets/img/no_image.gif')}}">
														</span>
														<span class="thumb">
															<img class="img-cover" src="{{isset($property->galleries[3]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[3]->gallery_image):asset('assets/img/no_image.gif')}}">
														</span>
													</div>
												</div>
											</article>
										</a>
										<a class="username-tag" href="{{ url('/') }}">{{ $property->user->lastname }} {{ $property->user->firstname }}</a>
									</li>
									@endforeach
								</ul>
							</div>
							{{-- Pagination --}}
							<div class="p-3">
								<div class="page navigation content-center">
											{{ $property_by_province->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

	</div>

@endsection
	
@push('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.btn-change-view').click(function(e){
				e.preventDefault();
				var type = $(this).attr('data-type');
				$.get('https://www.khmer24.com/en/change-ad-view.html',function(respone){
					location.reload();
				});
			});
			$('#ftr_left select, input[type="radio"]').change(function(){
				$('#ftr_left').submit();
			});
			$('.btn-sortby a').click(function(e){
				e.preventDefault();
				$('#ftr_left').find('input[name="sortby"]').val($(this).attr('data-value'));
				$('#ftr_left').submit();
			});
			$('.clear_filter .a_fter_d').click(function(){
				var btn = $(this);
				var parent = btn.closest('div.form-group');
				parent.find('input').val('');
				parent.find('select').val('');
				$('#ftr_left').submit();
			});
		});
	</script>
@endpush