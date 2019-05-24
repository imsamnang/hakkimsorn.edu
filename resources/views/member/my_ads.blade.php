
<div class="my-container pt-3 pb-3">
	<div class="filter_box">
	</div>
	<div class="row filter pb-3">
		<div class="col col-3">
			<div class="btn-group manage_ads_tab" role="group" aria-label="Basic example">
				<a class="disabled active_ads btn btn-default" href="#manage-ads.html">Active Ads <span class="counter badge badge-primary ml-1">{{ $properties->count() }}</span></a>
				<a class=" expired_ads btn btn-default" href="#expired-ads.html">Expired Ads </a>
			</div>
		</div>
		<div class="col text-right">
			<form action="#manage-ads" id="filter_form" class="form-inline" method="get">
				<span class="filter_left form-group">
					<label>Search: </label>
					<input type="text" name="search" class="form-control" placeholder="What are you looking for..." value="">
				</span>
				<span class="filter_left form-group">
					<label>Filter: </label>
					<select class="form-control" name="category" style="width: 160px;">
						<option value="">All Categories</option>
				{{-- <option value="property-housing-rentals" class="main_cate">{{ isset($properties)?$properties[0]->category->category_name : '' }}</option>
						<option value="landed-properties-for-sale">- {{ isset($properties)?$properties[0]->parent->category_name:'' }}</option> --}}
					</select>
				</span>
				<span class="filter_right  form-group">
					<label>Sort: </label>
					<select class="form-control" name="sort" style="width: 160px;">
						<option value="posted_date_desc">Post Date: New to Old</option>
						<option value="posted_date_asc">Post Date: Old to New</option>
						<option value="renew_date_desc">Renew Date: New to Old</option>
						<option value="renew_date_asc">Renew Date: Old to New</option>
						<option value="price_desc">Price: High to Low</option>
					 	<option value="price_asc">Price: Low to High</option>
					</select>
				</span>
			</form>
		</div>
	</div>

	<div id="my_content" class="">
		<div class="post_shortcut text-center bg-white border rounded mb-3">
			<div class="text">
			Hi <strong>p-{{ $user->phone }}</strong>, you currently have <strong>{{ $properties->count() }}</strong> ads (Active Ads)
			</div>
			<div>
				<a class="btn btn-warning btn-md " href="{{ route('post.index') }}">
					<span class="icon icon-plus-full"></span> Post an Ad
				</a>
			</div>
		</div>
		<ul class="list_posts list-unstyled">
			@foreach ($properties as $key => $property)
				<li id="item-{{ $property->id }}">
					<div class="item_box">
						<div class="ad_info">
							@if ($property->status)
								<span class="icon-point green"></span>
								<span class="status">Ad Active</span>
							@else
								<span class="icon-point brown"></span>
								<span class="status">Ad Expired</span>
							@endif
						</div>
								<div class="detail_box ">
									<a class="post_image" href="#" title="">
										<img alt="" class="img-cover" src="{{isset($property->galleries[0]->gallery_image) ? asset('uploads/property/galleries/'.$property->galleries[0]->gallery_image):asset('assets/img/no_image.gif')}}" />
									</a>
									<div class="post_detail">
										<a class="title" href="{{ route('post.show',$property->slug) }}" title="{{ $property->title }}">{{ $property->title }}</a>
										<div class="ad_price">${{ $property->price }}</div>
										<div class="save_ads_sumery">
											<dl>
												<dt>Ad ID:</dt>
													<dd>{{ $property->id }}</dd>
											</dl>
											<dl>
												<dt>Posted On:</dt>
													<dd>{{ $property->created_at }}</dd>
											</dl>
											<dl>
												<dt>Renew On:</dt>
													<dd>{{ $property->updated_at }}</dd>
											</dl>
											<dl>
												<dt>View:</dt>
													<dd>{{ $property->view_count }}</dd>
											</dl>
										</div>
										<p class="save_post_detail">
											{{ str_limit($property->description,100) }}
										</p>
									</div>
								</div>
								<div class="controls ">
									<div class="list_control text-center row">
										<div class="col">
											<a href="#promote-ad.html" class="btn btn-link " data-id="{{ $property->id }}" data-m="0" data-h="1" data-ampm="am"><span class="icon icon-renew"></span> Auto Renew
											</a>
										</div>
										<div class="col">
											<a class="btn btn_renew disable disabled" data-disable="true" data-renewdate="20190413" title="Renew" href="#"><span class="icon icon-repost"></span> <span class="text">Renew</span>
											</a>
										</div>
										<div class="col">
											<a class="btn btn_edit " title="Edit" data-id="{{ $property->id }}" href="{{ route('post.edit',$property->id) }}"><span class="icon icon-edit"></span> <span class="text">Edit</span>
											</a>
										</div>
										<div class="col">
											<a data-status="active" class="btn btn_delete " title="Delete" data-id="{{ $property->id }}" href="#delete_ad_reason"><span class="icon icon-delete"></span> <span class="text">Delete</span>
											</a>
										</div>
									</div>
								</div>
					</div>
				</li>
			@endforeach
		</ul>
	</div>

	<div class="modal delete_ad_reason" tabindex="-1" role="dialog" id="delete_ad_reason">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Delete Reason</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body form">
					<div id="popup_message"></div>
					<div class="reason">
						<div class="custom-control custom-radio form-group">
							<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-1" value="lang-reason-1">
							<label class="custom-control-label" for="reason-lang-reason-1">This product has been sold</label>
						</div>
						<div class="custom-control custom-radio form-group">
							<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-2" value="lang-reason-2">
							<label class="custom-control-label" for="reason-lang-reason-2">Suspend this ads</label>
						</div>
						<div class="custom-control custom-radio form-group">
							<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-lang-reason-3" value="lang-reason-3">
							<label class="custom-control-label" for="reason-lang-reason-3">Delete to post new ads</label>
						</div>
						<div class="custom-control custom-radio form-group">
							<input type="radio" name="delete_ad_reason" class="custom-control-input" id="reason-other" value="other">
							<label class="custom-control-label" for="reason-other">Other</label>
						</div>
					</div>
					<div class="enter_reason" id="enter_reason">
						<textarea id="input_reason" name="enter_reason" minlength="15" maxlength="255" placeholder="Comment..." class="form-control"></textarea>
					</div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn_close_modal" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" id="btn_delete_ad">Delete</button>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

	  $('body').delegate('.btn_delete', 'click', function(event) {
	    event.preventDefault();
	    var id = $(this).data('id');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.value) {
			    $.post('{{ route("post.destroy") }}',{id:id},function(data){
			      location.reload();
			    })				  	
					Swal.fire({
					  title: 'Successful Deleted!',
					  html: 'It will close in <strong></strong> seconds.',
					  timer: 2000,
					  onBeforeOpen: () => {
					    Swal.showLoading()
					    timerInterval = setInterval(() => {
					      Swal.getContent().querySelector('strong')
					        .textContent = Swal.getTimerLeft()
					    }, 200)
					  },
					  onClose: () => {
					    clearInterval(timerInterval)
					  }
					}).then((result) => {
					  if (
					    // Read more about handling dismissals
					    result.dismiss === Swal.DismissReason.timer
					  ) {
					    console.log('I was closed by the timer')
					  }
					})		    
			  }
			})
	  });
  });					
</script>

{{-- 		<script type="text/javascript">
	  $('document').ready(function(){
	      var base_url = '{{route('home')}}';
	      var csrf = '{{ csrf_token() }}';
	      var id='';
	      var ad_type='active';
	      var reason='';

	      $('.btn_delete').click(function(e){
	          $('#delete_ad_reason').removeClass('loading');
	          e.preventDefault();
	          $('#popup_message').html('');
	          reason = '';
	          id = $(this).attr('data-id');
	          $('#input_reason').val('');
	          $('#enter_reason').hide();
	          $('input[name="delete_ad_reason"]').prop('checked', false);
	          var status = $(this).attr('data-status');
	          if(id) {
              if(status=='active') {
                  $('#delete_ad_reason').modal('show');
              } else {
                if(confirm('Are you sure to delete this item?')) {
                  $('#item-'+id).addClass('loading');
                  $.post(base_url+'manage-ads/delete-ad',{"csrf_test_name":csrf,"adid":id,"reason":status,"status":ad_type},function(result){
                      $('#item-'+id).removeClass('loading');
                      if(result.status==1 || result.status=='1') {
                        location.reload();
                      } else {
                        alert(result.info);
                      }
                  },'json');
                }
              }   
	          }
	      });

	      $('.btn_close_modal').click(function(e){
	          e.preventDefault();
	          $('#delete_ad_reason').modal('hide');
	          reason = '';
	          id = '';
	          $('#input_reason').val('');
	          $('#enter_reason').hide();
	          $('input[name="delete_ad_reason"]').prop('checked', false);
	          $('#popup_message').html('');
	          $('#delete_ad_reason').removeClass('loading');
	      });

	      $('input[name="delete_ad_reason"]').change(function(){
	          $('#popup_message').html('');
	          var val = $(this).val();
	          reason = val;		          
	          if(val=="other") {
	              $('#enter_reason').show(function(){
	                  $('#input_reason').focus();
	              });
	          } else {
	              $('#enter_reason').hide();
	          }
	      });

	      $('#btn_delete_ad').click(function(e){
          e.preventDefault();
          if(id) {
            if(reason=='') {
              $('#popup_message').html('<div class="alert">សូមធ្វើការជ្រើសរើសប្រភេទខាងក្រោមណារមួយដើម្បីធ្វើការលប់</div>');
            } else {
              if(reason=='other' && $('#input_reason').val().length<15) {
                $('#input_reason').focus();
                return;
              }
              $('#delete_ad_reason').addClass('loading');
              if(reason=='other') {
                  reason = $('#input_reason').val();
              }
              $.post(route('post.destroy'),{"csrf_test_name":csrf,"adid":id,"reason":reason,"status":ad_type},function(result){
                $('#delete_ad_reason').removeClass('loading');
                if(result.status==1 || result.status=='1') {
                    location.reload();
                } else {
                    $('#popup_message').html('<div class="alert alert-danger alert-error">'+result.info+'</div>');
                }
              },'json');
            }
          }
	      });
	  });
	</script>
	<script>
	  $(document).ready(function(e) {
	    $('.auto_renew_checker').attr('checked', false);
	    $('.auto_renew_checker').on('change',function(event){
	        window.location.href = "{{route('home')}}";
	    });
	  });
	</script>
	<script type="text/javascript">
	    $(document).ready(function(){
	        $('.btn_more_control').click(function(e){
	            e.stopPropagation();
	            e.preventDefault();
	            var btn = $(this);
	            if(btn.attr('data-show')=="true") {
	                $('.btn_more_control').attr('data-show',"false");
	                $('.more_controls').removeClass('active');
	                $(this).attr('data-show',"false");
	                $(this).closest('div.more_controls').removeClass('active');
	            } else {
	                $('.btn_more_control').attr('data-show',"false");
	                $('.more_controls').removeClass('active');
	                $(this).attr('data-show',"true");
	                $(this).closest('div.more_controls').addClass('active');
	            }
	        });
	        $(window).click(function() {
	            $('.btn_more_control').attr('data-show',"false");
	            $('.more_controls').removeClass('active');
	        });

	    });
	</script>
	<script type="text/javascript">
	  $(document).ready(function(){
	    $(window).on("load", function (e) {
	        $.get('#',function(respone){
	            $('#overview-statistics').removeClass('loading');
	            if(respone) {
	                if(respone.all) {
	                    $('#statistics-all').text(respone.all);
	                }
	                if(respone.today) {
	                    $('#statistics-today').text(respone.today);
	                }
	                if(respone.last_7_day) {
	                    $('#statistics-last-7-day').text(respone.last_7_day);
	                }
	                if(respone.this_month) {
	                    $('#statistics-this-month').text(respone.this_month);
	                }
	            }
	        },'json');
	    });
	    $('#filter_form select').change(function(){
	        $('#filter_form').submit();
	    });
	    $('#clear-filter').click(function(e){
	        $('#filter_form select[name="category"]').val('');
	        $('#filter_form').submit();
	    });
	  });
	</script> --}}

</div>
