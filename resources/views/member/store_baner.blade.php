<div class="my-container pt-3 pb-3">
	<div class="setting-page">
		<div class="my-container">
			<div class="bg-white">
			<div class="content row">
				<div class="left-content col-3">
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
							<li class="active"><a href="https://www.khmer24.com/en/member/store-banner">Store Banner</a></li>
							</ul>
							</div>
						</section>
						<br>
						<section class="logout-box">
							<a class="btn btn-default btn-block btn-lg btn-logout" href="{{route('member.logout')}}">Log out</a>
						</section>
					</div>
				</div>
				<div class="right-content col">
					<div id="my_content" class="">
						<section class="box">
							<div class="list active">
								<div class="head">
								<h1 class="title">Store Banner</h1>
								</div>
								<div class="list_data pb-3">
								<div id="plerror"></div>
								<form action="https://www.khmer24.com/en/member/store-banner.html" class="form form-horizontal" method="post" accept-charset="utf-8">
								<input type="hidden" name="csrf_test_name" value="ff765c806cb14fd49015cf2d8a9a772e">
								<div id="form-banner" class="upload">
								<div id="upload_banner_box">
								<div class="image-placeholder">
								</div>
								<div class="big-text">Upload your banner here</div>
								<div class="small-text">Supported file types: jpg, png, jpeg.<br>(Max size: 10MB, 900x105px)</div>
								<br>
								<button id="pl_browse" class="btn btn-warning btn_yellow_brown btn-md" style="position: relative; z-index: 1;">Browse Photo</button>
								<div id="html5_1dbctb3fuplt1b67u2l1b6ic3n3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 219px; left: 290px; width: 127px; height: 38px; overflow: hidden; z-index: 0;"><input id="html5_1dbctb3fuplt1b67u2l1b6ic3n3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,image/png,.png,.jpeg"></div></div>
								<div id="display_banner_box">
								</div>
								</div>
								<br>
								<div class="text-center pb-3">
								<input type="submit" name="btnsave" value="Save" class="btn col-3 btn-primary btn_blue ">
								</div>
								</form>
								<input type="hidden" id="csrf" value="ff765c806cb14fd49015cf2d8a9a772e">
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>