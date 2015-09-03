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
                        	<input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="card-header">
                                <h2>Horizontal Form <small>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding '.form-horizontal' to the form. Doing so changes '.form-groups' to behave as grid rows, so no need for '.row'.</small></h2>
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
                                <input type="hidden" name="journey_time" value="">
                               	<div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" id="book_journey" class="btn btn-primary btn-sm">Book Ride </button>
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

		notify("Yet to be implemented");
	});
</script>
@endsection