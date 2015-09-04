@extends('admin.template')
@section('content')
<div class="row" >
	<div class="block-header">
	    <h2>Book Ride for {{$user->first_name}}</h2>

	    <ul class="actions">
	    	

	        <li class="dropdown">
	            <a class="icon-pop" href="form-elements.html" data-toggle="dropdown">
	                <i class="md md-more-vert"></i>
	            </a>

	            <ul class="dropdown-menu dropdown-menu-right">
	               
	                <li>
	                    <a class="block-hide-anchor" data-id="book-ride-form-card" href="#">Hide</a>
	                </li>
	            </ul>
	        </li>
	    </ul>

	</div>

	 <div class="card" id="book-ride-form-card">
                        
                        <form class="form-horizontal" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        	<input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="card-header">
                                <h2>Book Ride </h2>
                            </div>
                            
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Start Location: </label>
                                    <div class="col-md-1">
                                    	<label class="control-label" id="start_tag">Home</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" value="{{$user->home_text}}" id="start_text" name="start_text" placeholder="Start Location" readonly="">
                                            <input type="hidden" name="start_lat" id="start_lat" value="{{$user->home_lat}}">
                                            <input type="hidden" name="start_long" id="start_long" value="{{$user->home_long}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">End Location: </label>
                                    <div class="col-md-1">
                                    	<label class="control-label" id="end_tag">Office</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" value="{{$user->office_text}}" id="end_text" name="end_text" placeholder="end Location" readonly="">
                                            <input type="hidden" name="end_lat" id="end_lat" value="{{$user->office_lat}}">
                                            <input type="hidden" name="end_long" id="end_long" value="{{$user->office_long}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button id="swap_locations" type="button" class="btn btn-primary btn-sm">Swap Start and End </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">30min / 60min: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <select name="margin_after" class="form-control">
	                                            <option>30</option>
	                                            <option>60</option>
	                                        </select>
	                                        <input type="hidden" name="margin_before" value="30">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Booking Time: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='text' class="form-control date-time-picker" data-toggle="dropdown" placeholder="Click here..." data-value="{{$user->time_int}}">
                                            <input type="hidden" name="margin_before" value="30">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="journey_time" value="3-3-3 3:3:3">
                                <input type="hidden" name="preference" value="1">
                               	<div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" id="book_journey" class="btn btn-primary btn-sm">Find Best Matches </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
</div>
@endsection


@section('script')
<script type="text/javascript">
	$('#swap_locations').click(function(){
		var temp;
		temp = $('#start_tag').html();
		$('#start_tag').html($('#end_tag').html());
		$('#end_tag').html(temp);

		temp = $('#start_text').val();
		$('#start_text').val($('#end_text').val());
		$('#end_text').val(temp);

		temp = $('#start_lat').val();
		$('#start_lat').val($('#end_lat').val());
		$('#end_lat').val(temp);

		temp = $('#start_long').val();
		$('#start_long').val($('#end_long').val());
		$('#end_long').val(temp);
	});

	$('#book_journey').click(function(){
		$('input[name=margin_before]').val($('select[name=margin_after]').val());

		$.ajax({
			url:"{{route('admin::api.get_best_match')}}",
			method:"POST",
            dataType: "json",
			data:$('form').serialize(),
			success:function(data){
				confirm_with(data);
			},
            error:function(){
                swal("Error!", "Some Mishap Happened while making this request!!", "error");
            }
		})
	});

    function confirm_with(details){
        var data=details.data;
        var id=details.id;
        var htmlT="Matches are :<br><table class=\"table table-responsive\">"
        for (var i = data.length - 1; i >= 0; i--) {
            var temp = data[i];
            htmlT+="<tr>";
            htmlT+="<th>"+temp.name+"<th>";
            htmlT+="<th>"+temp.email+"<th>";
            htmlT+="</tr>";
        };
        htmlT+="</table>";
        if(data.length==0)
            htmlT="No Best Matches availbale right now";
        console.log(data);
        console.log(htmlT);
        swal({
            title: "Confirm Jourey?",
            text: htmlT,
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            html:true
        }, function() {
            $.ajax({
                url:"{{route('admin::home').'/confirm_journey'}}/"+id,
                method:"GET",
                success:function(data){
                    swal("Success!!",data,"success");
                },
                error:function(){
                    swal("Error!", "Some Mishap Happened while confirming!!", "error");
                }
            })
        });
    }
</script>
@endsection