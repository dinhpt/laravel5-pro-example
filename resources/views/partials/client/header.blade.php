<div class="header col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		<div class="container">
			<div class="header_bg">
				<div>
					<h1>{{Lang::get('properties.header.title')}}</h1>
				</div>
				<div class=" menu_top col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<form action="/language/change" id="locale_lange" method="get">
							<input type="hidden" value="" name="locale" id="locale">
							<div>
								<button  onclick="submitLocale('vi');">vietnamese</button>
								<button onclick="submitLocale('jp');">japanese</button>
							</div>
						</form>
						<div class="logo_top">
							<a href="/home"> <img alt="" src="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	submitLocale = function(val) {
		$( "#locale" ).val(val);
		$( "#locale_lange" ).submit();
	}
});
</script>


