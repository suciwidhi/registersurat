<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="<?php echo base_url('assets/img/icon.png')?>" class="max-h-150px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Register Surat</h3>
								<p class="opacity-60 font-weight-bold">Register Surat</p>
							</div>
							<form class="form" id="kt_login_signin_form">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 username" type="text" placeholder="Username" name="username" autocomplete="off" />
									<div style="display:none;" class="fv-plugins-message-container need-username"><div data-field="username" data-validator="notEmpty" class="fv-help-block">Username is required</div></div>
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 password" type="password" placeholder="Password" name="password" autocomplete="off"/>
									<div style="display:none;" class="fv-plugins-message-container need-password"><div data-field="password" data-validator="notEmpty" class="fv-help-block">Password is required</div></div>
								</div>
								<div class="form-group text-center mt-10">
									<button type="button" id="btnLogin" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign in form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
</div>
<!--end::Entry-->