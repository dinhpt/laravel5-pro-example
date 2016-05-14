@extends('layouts.admin', ['no_boxes' => true])
@section('content')
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>management</h3>
		</div>

	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div>
					@if(Session::has('flash_notice'))
					<div class="alert alert-info alert-dismissible fade in">
						<button type="button" class="close" data-dismiss="alert"
							aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{Session::get('flash_notice')}}
					</div>
					@endif
				</div>
				<div class="x_content">
					<div class="" style="float: right">
						<a href="/lv-admin/adminuser/create"><button type="button"
								class="btn btn-info">{{Lang::get("properties.form.create")}}</button></a>
						<!-- <button class="btn btn-info" type="submit">{{Lang::get("properties.form.Delete")}}</button> -->
					</div>
					<div class="clear"></div>
					<table id="example"
						class="table table-striped responsive-utilities jambo_table">
						<thead>
							<tr class="headings">
								<th><input type="checkbox" class="tableflat"></th>
								<th>{{Lang::get("properties.adminuser.form.username")}}</th>
								<th>{{Lang::get("properties.adminuser.form.email")}}</th>
								<th>{{Lang::get("properties.form.description")}}</th>
								<th>{{Lang::get("properties.adminuser.form.role")}}</th>
								<th>{{Lang::get("properties.form.status")}}</th>
								<th>{{Lang::get("properties.adminuser.list.reset_password")}}</th>
								<th class=" no-link last"><span class="nobr">{{Lang::get("properties.form.action")}}</span></th>
							</tr>
						</thead>

						<tbody>

						</tbody>

					</table>
				</div>
			</div>
		</div>

		<br /> <br /> <br />

	</div>
</div>
<script src="{{ URL::asset('admin/js/icheck/icheck.min.js') }}"></script>

<!-- Datatables -->
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function (){
    	 $(document).on( "click",".cfdelete", function() {
  	       
 	    	return confirm('{!! Lang::get("properties.common.confirmdelete");!!}');
 	    });
          function icheck(){
        	  $('input.tableflat').iCheck({
                  checkboxClass: 'icheckbox_flat-green',
                  radioClass: 'iradio_flat-green'
              });
              }
        
    	   var table = $('#example').DataTable({
    	      'ajax': {
    	         'url': '/lv-admin/adminuser/getList' 
    	      },
    	      "sPaginationType": "full_numbers",
              "dom": 'T<"clear">lfrtip',
              "bServerSide": true,
              'sPageButtonActive':'paginate_active', 
              "iDisplayLength": {{Config::get('settings.pageSize')}},
    	      'aoColumnDefs': [{
    	         'targets': 0,
    	         'searchable':false,
    	         'orderable':false,
    	         'className': 'a-center',
    	         'render': function (data, type, full, meta){
    	             return '<input type="checkbox" class="tableflat" name="id[]" value="' + $('<div/>').text(data).html() + '">';
    	         }
        	            
    	      }],
    	      "aoColumns": [

                          { bSortable: false, },
      	                  { bSortable: false, },
      	                  { bSortable: false, },
      	                  { bSortable: false, },
      	                  { bSortable: false, },
      	                  { bSortable: false,  mRender: function (data, type, full) { return data==1?'<a href="/lv-admin/adminuser/changStatus/'+full[0]+'/1">{{Lang::get("properties.form.enable")}}</a>':'<a href="/lv-admin/user/changStatus/'+full[0]+'/0">{{Lang::get("properties.form.disable")}}</a>'; }},
      	                { bSortable: false,  mRender: function (data, type, full) { return '<a href="/lv-admin/adminuser/resetpass/'+full[0]+'">{{Lang::get("properties.adminuser.list.reset_password")}}</a>'; }},
      	                  {
      	                      bSortable: false,
      	                      mRender: function (data, type, full) { return '<a href="/lv-admin/adminuser/edit/'+full[0]+'"><i class="ui-tooltip fa fa-pencil" style="font-size: 22px;" data-original-title="Edit"></i></a>'; }
      	                  }
      	               ],
      	          
      	      'order': [1, 'asc'],
      	      "fnDrawCallback": function() {
      	         
      	          icheck();
      	      }
    	   });

    	}); 
        </script>

@endsection


