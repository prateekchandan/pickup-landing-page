@extends('admin.template')
@section('content')
                
<div class="row" >
	<div class="block-header">
	    <h2>Form to Send Email</h2>

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
	        <h2>Send Email</h2>
	    </div>
	    
	    <div class="card-body card-padding">
	        
	    	<form method="POST" id="form">
	    		<input type="hidden" name="_token" value="{{csrf_token()}}">
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="email" name ="email" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Email To</label>
		        </div>
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="name" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Name of reciepient</label>
		        </div>
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="subject" class="input-lg form-control fg-input" required>
		            </div>
		            <label class="fg-label">Subject</label>
		        </div>
		        <div class="form-group fg-float">
		            <div class="fg-line">
		                <input type="text" name ="company" class="input-lg form-control fg-input" id="company_input" value="ICICI" required>
		            </div>
		            <label class="fg-label">Company Name</label>
		        </div>
		        <div class="form-group fg-float">
                    <div class="fg-line">
                        <input type='text' class="form-control input-lg  fg-input launch-date-picker" name ='date' data-toggle="dropdown" required>
                    </div>
                    <label class="fg-label">Date</label>
                </div>
		        <button class="btn bgm-deeporange btn-primary btn-block waves-effect">
		        	<i class="md md-mail"></i> Send
		        </button>
		    </form>
	    </div>
	    <div class="card-header">
	        <h2>Email Preview</h2>
	    </div>
	    
	    <div class="card-body card-padding">
	        
		        @include('aemail',['web' => '1'])
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

<script type="text/javascript">
	$( "#company_input" ).keyup(function() {
	  $('#company').html($( "#company_input" ).val());
	});

	if ($('.launch-date-picker')[0]) {
    	$('.launch-date-picker').datetimepicker({
    	    format: 'dddd (D, MMMM)'
    	});
    	$('.launch-date-picker').on('dp.change', function (ev) {
		    var date = $('.launch-date-picker')[0].value;
		    $('#launch-date').html(date);
		});
    }
</script>
@endsection