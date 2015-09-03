@extends('admin.template')
@section('content')
                
<div class="row" >
	<div class="block-header">
	    <h2>Form to Add new Driver</h2>

	    <ul class="actions">
	    	

	        <li class="dropdown">
	            <a class="icon-pop" href="form-elements.html" data-toggle="dropdown">
	                <i class="md md-more-vert"></i>
	            </a>

	            <ul class="dropdown-menu dropdown-menu-right">
	               
	                <li>
	                    <a class="block-hide-anchor" data-id="add-new-grade-form" href="#">Hide</a>
	                </li>
	            </ul>
	        </li>
	    </ul>

	</div>

	<div class="card" id="add-new-grade-form">
	    <div class="card-header">
	        <h2>Add New Driver <small>All Fields are required.</small></h2>
	    </div>
	    
	    <div class="card-body card-padding">
	        
	    	<form method="POST" id="form" action="{{route('admin::driver.add')}}" onsubmit="return validate()">
	    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		        <input type="hidden" name ="SubClass" class="input-lg form-control fg-input" value="None">
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="driver_name" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Driver Name</label>
		        </div>

		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="username" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">User ID</label>
		        </div>
		        
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="password" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Password</label>
		        </div>

		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="phone" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Phone Number</label>
		        </div>
		        

		       <p class="f-500 c-black m-b-5">Car Details</p>
		       <br>
		       <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="car_model" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Car Model Name</label>
		        </div>

		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="car_number" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Car Model Number</label>
		        </div>

		        <p class="f-500 c-black m-b-5">Security Details</p>
		       <br>
		       <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="license_details" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Driver's Lisence Number</label>
		        </div>

		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="driver_address" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Driver's Address</label>
		        </div>

		  
		        <br \>
		        <button class="btn bgm-deeporange btn-primary btn-block waves-effect">
		        	<i class="md md-add"></i> Add New Driver
		        </button>
		        
		    </form>
	    </div>
	</div>
</div>
@endsection

@section('script')
@if(Session::has('message'))
<script type="text/javascript">
    notify("{{Session::get('message')}}","success");
</script>
@endif
@endsection