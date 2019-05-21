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
								<li class="active"><a href="https://www.khmer24.com/en/member/store">Store Information</a></li>
								<li class=""><a href="https://www.khmer24.com/en/member/store-banner">Store Banner</a></li>
								</ul>
								</div>
								</section>
								<br>
								<section class="logout-box">
								<a class="btn btn-default btn-block btn-lg btn-logout" href="https://www.khmer24.com/logout">Log out</a>
							</section>
						</div>
					</div>
					<div class="right-content col">
						<div id="my_content" class="">
							<section class="box">
								<div class="list active">
								<div class="head">
								<h1 class="title">Store Information</h1>
								</div>
								<div class="list_data pt-2">
									<form action="https://www.khmer24.com/en/member/store.html" class="mar_t15 form form-horizontal" method="post" accept-charset="utf-8">
										<input type="hidden" name="csrf_test_name" value="ff765c806cb14fd49015cf2d8a9a772e">
										<div class="form-group">
										<label for="title"><span class="text-red">*</span> Title :</label>
										<div class="row">
										<div class="col-sm-8">
										<input type="text" name="title" value="" class="form-control" id="title">
										</div>
										</div>
										</div>
										<div class="form-group">
										<label for="about">About :</label>
										<textarea name="about" cols="40" rows="10" class="store_about form-control" id="about"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" name="btnsave" value="Save" class="btn btn-block btn-primary ">
										</div>
									</form>
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