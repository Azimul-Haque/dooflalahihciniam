<div class="row">
  <div class="col-md-12">
    <div class="profile-sidebar thumbnail">
		<!-- SIDEBAR USERPIC -->
		<div class="profile-userpic">
			<center>
				<img src="{{ asset('images/user.png') }}" class="img-responsive img-circle" alt="" style="max-height: 120px; padding: 10px; border-radius: 50%;">
			</center>
		</div>
		<!-- END SIDEBAR USERPIC -->
		<!-- SIDEBAR USER TITLE -->
		<div class="profile-usertitle">
			<center>
				<div class="profile-usertitle-name">
					<big><b>{{ Auth::user()->name }}</b></big>
				</div>
				<div class="profile-usertitle-job">
					<span class="badge badge-pill badge-default">{{ ucfirst(Auth::user()->role) }}</span><br/><hr/>
				</div>
			</center>
		</div>
		<!-- END SIDEBAR USER TITLE -->
		<!-- SIDEBAR BUTTONS -->
		{{-- <div class="profile-userbuttons">
			<button type="button" class="btn btn-success btn-sm">Follow</button>
			<button type="button" class="btn btn-danger btn-sm">Message</button>
		</div> --}}
		<!-- END SIDEBAR BUTTONS -->
		<!-- SIDEBAR MENU -->
		<div class="">
			<span title="">
				<i class="fa fa-id-card-o"></i> <b>{{ Auth::user()->code }}</b>
			</span><br/>
			{{-- <span title="Earned Balance"><i class="fa fa-money"></i> ¥ {{ Auth::user()->points }}</span> --}}
			<span title="Contact No"><i class="fa fa-phone"></i> {{ Auth::user()->phone }}</span><br/>
			<span title="Email Address"><i class="fa fa-envelope-o"></i> {{ Auth::user()->email }}</span><br/>
			<span title="Delivery Address"><i class="fa fa-home"></i> {{ Auth::user()->address }}</span><br/>
			<span class="text-center">
				<button class="site-btn" type="button" data-toggle="modal" data-target="#editProfileModal" data-backdrop="static" style="width: 100%;"><i class="fa fa-edit"></i> Edit Profile</button>
			</span>
		</div>
		<!-- END MENU -->
	</div>
  </div>
</div>