@extends('admin.template')

@section('content')

@if(sizeof($groups)==0)
<div class="card">
    <div class="card-body card-padding">
    	<div class="lead">No Groups To Show</div>
    </div>
</div>
@else
	<div class="block-header">
	    <h2>Showing {{sizeof($groups)}} Groups</h2>
	</div>
	@foreach($groups as $group)
	<div class="card">
	    <div class="card-body card-padding">
	    	<div>
	    		Ride Time : <b>{{date('h:i a F d, Y', strtotime($group->start_time))}}</b>
	    	</div>
	    	@if(!is_null($group->driver))
	    	<div class="alert alert-success">
	    		Driver : <b>{{$group->driver->driver_name}} , {{$group->driver->car_model}} , {{$group->driver->car_number}}</b>
	    	</div>
	    	@else
	    	<div class="alert alert-danger">
	    		No Driver Allocated
	    	</div>
	    	@endif
	    	<div class="table-responsive">
	        	<table class="table table-bordered">
			        @foreach($group->journeys as $journey)
			        <tr>
			        	<td>{{$journey->user->first_name}}</td>
			        	<td>{{$journey->user->email}}</td>
			        	<td>{{$journey->user->phone}}</td>
			        	<td><a href="http://maps.google.com/maps?q={{$journey->start_lat}},{{$journey->start_long}}&z=17" target="_blank"> {{$journey->start_text}}</a></td>
			        	<td><a href="http://maps.google.com/maps?q={{$journey->end_lat}},{{$journey->end_long}}&z=17" target="_blank"> {{$journey->end_text}}</a></td>
			        </tr>
			        @endforeach
		        </table>
		    </div>
	    </div>
	</div>
	@endforeach

@endif

@endsection