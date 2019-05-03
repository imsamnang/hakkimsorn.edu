<div class="my-container pt-3 pb-3">
	<div class="list-setting">
		<section>
			<div class="section-bar">
				<div class="title">Account</div>
			</div>
			<div class="list-items">
				<ul class="list-unstyled mb-0">
					<li class=""><a href="https://www.khmer24.com/en/member/edit-profile">Edit Profile</a></li>
					<li class=""><a href="https://www.khmer24.com/en/member/change-password">Change Password</a></li>
				</ul>
			</div>
		</section>
		<section>
			<div class="section-bar">
				<div class="title">Store / Website / Page</div>
			</div>
			<div class="list-items">
				<ul class="list-unstyled mb-0">
					<li class=""><a href="https://www.khmer24.com/en/member/store">Store Information</a></li>
					<li class=""><a href="https://www.khmer24.com/en/member/store-banner">Store Banner</a></li>
				</ul>
			</div>
		</section>
		<br>
		<section class="logout-box">
			<a class="btn btn-default btn-block btn-lg btn-logout" href="{{route('logout')}}"
				onclick="event.preventDefault();
	      document.getElementById('logout-form').submit();"
			>Log out</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
      </form>					
		</section>
	</div>
</div>