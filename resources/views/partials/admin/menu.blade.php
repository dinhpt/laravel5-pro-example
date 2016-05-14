<div class="col-md-3 left_col">
	<div class="left_col scroll-view">

		<div class="navbar nav_title" style="border: 0;">
		</div>
		<div class="clearfix"></div>

		<!-- menu prile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="{{URL::asset('imgs/avatar.jpg')}}"
					class="img-circle profile_img" alt="Profile Image" />
			</div>
			<div class="profile_info">
				<h2>{{Auth::user()->username}}</h2>
			</div>
		</div>
		<!-- /menu prile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
					<li><a href=""><i class="fa fa-home">
						</i>home<span class="fa fa-chevron-down"></span></a></li>
					<li><a><i class="fa fa-edit"></i>menu1<span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="">sub menu 1</a>
							</li>
							<li><a href="">sub menu 2</a>
							</li>
						</ul></li>
					<li><a><i class="fa fa-desktop"></i>menu2<span
							class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="">sub menu 3</a></li>
							<li><a href="">sub menu 4</a>
							</li>
							<li><a href="">sub menu 5</a>
							</li>
						</ul></li>
					</li>
					<li><a href=""><i class="fa fa-edit"></i>menu3</a>
					</li>
					<li><a href=""><i class="fa fa-table"></i>menu4</a>
					</li>
					<li><a href=""><i class="fa fa-edit"></i>menu5</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<!-- /menu footer buttons -->
	</div>
</div>