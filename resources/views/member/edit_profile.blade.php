@extends('layouts.backend.khmer24_layout')

@push('css')
	{{-- <script src="{{asset('assets/js/plupload.full.min.js')}}"></script> --}}
  <link rel="stylesheet" href="{{asset('assets/css/members.css')}}">
  <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}">
@endpush

@section('content')

  <div class="my-account-page account-page">
    <div class="my-account-head bg-white border-bottom">
			@include('member.includes.user_info')                                    
    </div>

		<div class="my-container pt-3 pb-3">
			<div class="setting-page">
				<div class="my-container">
					<div class="bg-white">
						<div class="content row">
							<div class="left-content col-3">
								@include('member.includes.list_setting')
							</div>
							<div class="right-content col">
								<div id="my_content" class="">
									<section class="box">
										<div class="list active">
											<div class="head">
											<h1 class="title">Edit Profile</h1>
											</div>
											<div class="list_data">
												<form action="#edit-profile" class="mar_t15 form form-horizontal" method="post" accept-charset="utf-8">
													<input type="hidden" name="csrf_test_name" value="{{csrf_token()}}">
													<div class="edit_profile">

														<div class="img_profile">
															<div class="plupload text-center" style="display: inline-block; position: relative;">
																<div class="pl_img">
																	<div class="default_image">
																		<img class="img-cover" src="https://www.khmer24.com/khmer24-reform21/template/img/default_profile.jpg" alt="Photo">
																	</div>
																</div>
																<a id="pl_browse" class="btn btn-warning btn-sm " style="position: relative; z-index: 1;">Change Photos</a>
																<input type="hidden" id="csrf" value="ff765c806cb14fd49015cf2d8a9a772e">
																<input type="hidden" id="browser" value="">
																<div id="html5_1dbcoq08b19fl14k115frb171lkc3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 136px; left: 3px; width: 114px; height: 31px; overflow: hidden; z-index: 0;">
																	<input id="html5_1dbcoq08b19fl14k115frb171lkc3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,.jpeg">
																</div>
															</div>
														</div>
														{{-- name --}}
														<div class="form-group row">
															<label class="col-3 text-right col-form-label">Name <span class="red">*</span>:</label>
															<div class="col-4">
															<input type="text" name="name" value="សុភ័ក្រ លាប" autocomplete="off" placeholder="Name" class="form-control">
															</div>
														</div>
														{{-- phone --}}
														<div class="form-group row">
															<label for="phone" class="col-3 text-right col-form-label">Phone <span class="red">*</span>:</label>
															<div class="phone col-5">
															<div class="phone-1 form-input">
															<input type="text" name="phone-1" value="070393143" id="phone-1" class="form-control number" maxlength="10">
															<a href="javascript:void(0)" class="add_phone" data-id="add"><i class="icon-plus-full"></i></a>
															</div>
															<div class="phone-2 form-input  ">
															<input type="text" name="phone-2" value="" id="phone-2" class="form-control number" maxlength="10">
															<a href="javascript:void(0)" class="delete_phone" data-id="phone-2"><i class="icon-remove"></i></a>
															</div>
															<div class="phone-3 form-input d-none">
															<input type="text" name="phone-3" value="" id="phone-3" class="form-control number" maxlength="10">
															<a href="javascript:void(0)" class="delete_phone" data-id="phone-3"><i class="icon-remove"></i></a>
															</div>
															</div>
														</div>
														{{-- Select a City/Province --}}
														<div class="form-group row">
															<label for="province" class="col-3 text-right col-form-label">City/Province <span class="red">*</span>:</label>
															<div class="col-5">
																<select class="form-control" id="province" name="province" required="">
																	<option value="">Select a City/Province</option>
																	 <option value="phnom-penh" data-value="phnom-penh">Phnom Penh</option>
																	<option value="preah-sihanouk" data-value="preah-sihanouk">Preah Sihanouk</option>
																	<option value="kampong-cham" data-value="kampong-cham">Kampong Cham</option>
																	<option value="siem-reap" data-value="siem-reap" selected="">Siem Reap</option>
																	<option value="battambang" data-value="battambang">Battambang</option>
																	<option value="kandal" data-value="kandal">Kandal</option>
																	<option value="banteay-meanchey" data-value="banteay-meanchey">Banteay Meanchey</option>
																	<option value="kampong-chhnang" data-value="kampong-chhnang">Kampong Chhnang</option>
																	<option value="kampong-speu" data-value="kampong-speu">Kampong Speu</option>
																	<option value="kampong-thom" data-value="kampong-thom">Kampong Thom</option>
																	<option value="kampot" data-value="kampot">Kampot</option>
																	<option value="kep" data-value="kep">Kep</option>
																	<option value="koh-kong" data-value="koh-kong">Koh Kong</option>
																	<option value="kratie" data-value="kratie">Kratie</option>
																	<option value="mondulkiri" data-value="mondulkiri">Mondulkiri</option>
																	<option value="oddar-meanchey" data-value="oddar-meanchey">Otdar Meanchey</option>
																	<option value="pailin" data-value="pailin">Pailin</option>
																	<option value="preah-vihear" data-value="preah-vihear">Preah Vihear</option>
																	<option value="prey-veng" data-value="prey-veng">Prey Veng</option>
																	<option value="pursat" data-value="pursat">Pursat</option>
																	<option value="ratanakiri" data-value="ratanakiri">Ratanakiri</option>
																	<option value="stung-treng" data-value="stung-treng">Stung Treng</option>
																	<option value="svay-rieng" data-value="svay-rieng">Svay Rieng</option>
																	<option value="takeo" data-value="takeo">Takeo</option>
																	<option value="tboung-khmum" data-value="tboung-khmum">Tboung Khmum</option>
																</select>
															</div>
														</div>
														{{-- Select a Khan/District --}}
														<div class="form-group row">
															<label for="district" class="col-3 text-right col-form-label">Khan/District <span class="red">*</span>:</label>
															<div class="col-5">	
																<select class="form-control" id="district" name="district" required="">
																	<option value="" data-value="">Select a Khan/District</option>
																	<option value="angkor-chum" data-value="angkor-chum" data-chained="siem-reap" class="siem-reap">Angkor Chum</option>
																	<option value="angkor-thum" data-value="angkor-thum" data-chained="siem-reap" class="siem-reap">Angkor Thum</option>
																	<option value="banteay-srei" data-value="banteay-srei" data-chained="siem-reap" class="siem-reap" selected="">Banteay Srei</option>
																	<option value="chi-kraeng" data-value="chi-kraeng" data-chained="siem-reap" class="siem-reap">Chi Kraeng</option>
																	<option value="kralanh" data-value="kralanh" data-chained="siem-reap" class="siem-reap">Kralanh</option>
																	<option value="puok" data-value="puok" data-chained="siem-reap" class="siem-reap">Puok</option>
																	<option value="prasat-bakong" data-value="prasat-bakong" data-chained="siem-reap" class="siem-reap">Prasat Bakong</option>
																	<option value="krong-siem-reab" data-value="krong-siem-reab" data-chained="siem-reap" class="siem-reap">Krong Siem Reab</option>
																	<option value="soutr-nikom" data-value="soutr-nikom" data-chained="siem-reap" class="siem-reap">Soutr Nikom</option>
																	<option value="srei-snam" data-value="srei-snam" data-chained="siem-reap" class="siem-reap">Srei Snam</option>
																	<option value="svay-leu" data-value="svay-leu" data-chained="siem-reap" class="siem-reap">Svay Leu</option>
																	<option value="varin" data-value="varin" data-chained="siem-reap" class="siem-reap">Varin</option>
																</select>
															</div>
														</div>
														{{-- Select a Sangkat/Commune --}}
														<div class="form-group row">
															<label for="commune" class="col-3 text-right col-form-label">Sangkat/Commune <span class="red">*</span>:</label>
															<div class="col-5">
															<select class="form-control" id="commune" name="commune" required="">
																<option value="" data-value="">Select a Sangkat/Commune</option>
																<option value="1381" data-value="1381" data-chained="banteay-srei" class="banteay-srei">Khnar Sanday</option>
																<option value="1382" data-value="1382" data-chained="banteay-srei" class="banteay-srei" selected="">Khun Ream</option>
																<option value="1383" data-value="1383" data-chained="banteay-srei" class="banteay-srei">Preak Dak</option>
																<option value="1384" data-value="1384" data-chained="banteay-srei" class="banteay-srei">Rumchek</option>
																<option value="1385" data-value="1385" data-chained="banteay-srei" class="banteay-srei">Run Ta Aek</option>
																<option value="1386" data-value="1386" data-chained="banteay-srei" class="banteay-srei">Tbaeng</option>
															</select>
															</div>
														</div>
														{{-- Location Details --}}
														<div class="form-group row">
															<label for="address" class="col-3 text-right col-form-label">Location Details
																<span class="red">*</span>:</label>
															<div class="col-8">
															<textarea name="address" cols="40" rows="10" id="address" class="form-textarea  form-control" style="height: 55px;">ភូមិ ចន្លោង សង្កាត់ស្រង៉ែ ក្រុងសៀមរាប ខេត្តសៀមរាប</textarea>
															</div>
														</div>
														<div class="form-group">
															<div class="map_view">
																<div class="map_box hidden" id="ad_map">
																	<div id="map" style="position: relative; overflow: hidden;">
																		<div class="centerMarker"></div>
																	</div>
																	<a id="find_location" href="#"><span class="icon icon-my-location"></span> Find My Location</a>
																	<span id="map_loading" class="loading"></span>
																</div>
																<input type="hidden" id="x" name="x" value="">
																<input type="hidden" id="y" name="y" value="">
																<input type="hidden" id="z" name="z" value="">
															</div>
														</div>

														<div class="form-group">
															<input type="submit" name="btnsave" value="Save" class="btn btn-block btn-primary ">
														</div>
													</div>
												</form>
											</div>
										</div>
									</section>
								</div>
								<script type="text/javascript">
								  $(document).ready(function () {
								    $(".number").keypress(function(evt) {
								      if (evt.keyCode != 8) {
								        var theEvent = evt || window.event;
								        var key = theEvent.keyCode || theEvent.which;
								        key = String.fromCharCode(key);
								        var regex = /[0-9]|\./;
								        if (!regex.test(key)) {
								            theEvent.returnValue = false;
								          if (theEvent.preventDefault)
								            theEvent.preventDefault();
								        }
								      }
								    });

								    $('.phone a').click(function(e) {
								      e.preventDefault();
								      if($(this).attr('data-id') == 'add') {
								        if($( "body" ).find('div.phone-2').hasClass( "d-none" )) {
								          $('.phone-2').removeClass('d-none');
								        } else {
								          $('.phone-3').removeClass('d-none');
								          $('a.add_phone').addClass('d-none');
								        }
								      } else {
								        if ($(this).attr('data-id') == 'phone-2') {
								          if($('input[name="phone-3"]').val()) {
								            $('input[name="phone-2"]').val($('input[name="phone-3"]').val());
								            $('input[name="phone-3"]').val('');
								          } else {
								            if($('input[name="phone-2"]').val()) {
								              $('input[name="phone-2"]').val('');
								            } else {
								              if(!$('input[name="phone-2"]').val()) {
								                $('.phone-2').addClass('d-none');
								              }
								              $('.phone-3').addClass('d-none');
								              $('a.add_phone').removeClass('d-none');
								            }              
								          }
								        }

								        if ($(this).attr('data-id') == 'phone-3') {             
								            if($('input[name="phone-3"]').val()) {
								                $('input[name="phone-3"]').val('');
								            } else {
								                $('a.add_phone').removeClass('d-none');
								                $('.phone-3').addClass('d-none');
								                $('input[name="phone-3"]').val('');
								            }
								        }
								      }
								    });

								    $('.phone input').on('keypress keyup focus change', function() {
								      if ($(this).val()) {
								        var input_name = $(this).attr('name');
								        if (input_name == 'phone-1') {
								            $('.phone-2').removeClass('d-none');
								        }
								        if (input_name == 'phone-2') {
								            $('.phone-3').removeClass('d-none');
								        }
								      }
								    });
								  });    
								</script> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <a href="#totop" id="totop"><i class="icon-up"></i></a>
    <div class="fix-feedback">
        <a href="#feedback" class="btn btn-primary btn-sm">Feedback</a>
    </div>
  </div>

@endsection

@push('js')

@endpush