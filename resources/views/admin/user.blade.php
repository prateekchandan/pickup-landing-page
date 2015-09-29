@extends('admin.template')

@section('content')
 <div class="card">
        <div class="card-header">
                            <h2>All Users</h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                    <th data-column-id="name">Name</th>
                                    <th data-column-id="phone">Phone</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
@endsection

@section('script')

<script type="text/javascript">
                var grid = $("#data-table-command").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                        	var home_location = $(row.home_location).data('location');
                        	var office_location = $(row.office_location).data('location');

                        	console.log(home_location);
                            return "<button type=\"button\"  class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"md md-delete\"></span></button>"+
                            "<a href=\"{{route('admin::home')}}/book-ride/"+row.id+"\" type=\"button\"  class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"md md-send\"></span></a>";
                        }
                    }
                });

                $("#data-table-command").on("loaded.rs.jquery.bootgrid", function()
				{
				    grid.find(".command-delete").on("click", function(e)
				    {
				        var rows = Array();
				        rows[0] = $(this).data("row-id");
				        swal({   
		                    title: "Are you sure?",   
		                    text: "This User Data will be permanently deleted from system!",   
		                    type: "warning",   
		                    showCancelButton: true,   
		                    confirmButtonColor: "#DD6B55",   
		                    confirmButtonText: "Yes, delete it!",   
		                    closeOnConfirm: false 
		                }, function(){   
		                	$.ajax({
					        	url:"{{route('admin::delete_user')}}",
					        	method:"DELETE",
					        	data:{
					        		user:rows[0],
					        		_token:"{{csrf_token()}}"
					        	},
					        	success:function(data){
					        		$("#data-table-command").bootgrid('remove', rows);
			                    	swal("Deleted!", "Ths User been deleted.", "success"); 
					        	},
					        	error:function(){
					        		swal("Error", "There was an error deleting the user", "error");   
					        	}
				        	});
		                });
				       
				    });
				});

</script>
@endsection