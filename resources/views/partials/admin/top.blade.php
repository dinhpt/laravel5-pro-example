
<div class="top_nav">

	<div class="nav_menu">
		<nav class="" role="navigation">
			<ul class="nav navbar-nav navbar-right">
				<li class=""><a href="javascript:;"
					class="user-profile dropdown-toggle" data-toggle="dropdown"
					aria-expanded="false"> <img src="{{URL::asset('imgs/avatar.jpg')}}"
						alt="Profile Image" /><?php  echo Auth::user()->username?>
                                    <span class=" fa fa-angle-down"></span>
				</a>
					<ul
						class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
						<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out pull-right"></i>
								{{ trans('admin.logout') }}</a></li>
					</ul></li>
			</ul>
		</nav>
	</div>

</div>