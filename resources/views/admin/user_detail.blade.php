@extends('admin.template')
@section('content')
<div class="row" >
	<div class="block-header">

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
                        
                        <form class="form-horizontal" id="user-form" role="form" onsubmit="return submitUser();">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        	<input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="card-header">
                                <h2>Edit User Data </h2>
                            </div>
                            
                            <div class="card-body card-padding">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='text' name="first_name" class="form-control" placeholder="Enter Name" value="{{$user->first_name}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Phone: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='text' name="phone" class="form-control" placeholder="Enter Phone" value="{{$user->phone}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='email' name="email" class="form-control" placeholder="Enter Phone" value="{{$user->email}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Start Location: </label>
                                    <div class="col-md-1">
                                    	<label class="control-label" id="start_tag">Home</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" value="{{($user->home_text=='none')?'':$user->home_text}}" id="home-input" name="start_text" placeholder="Start Location" >
                                            <input type="hidden" name="home_location" id="home-location" value="{{($user->home_location=='none')?'':$user->home_location}}">
                                        </div>
                                        <span class="text-warning" id="home-error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">End Location: </label>
                                    <div class="col-md-1">
                                    	<label class="control-label" id="end_tag">Office</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="fg-line">
                                            <input type="text" class="form-control input-sm" value="{{($user->office_text=='none')?'':$user->office_text}}" id="office-input" name="end_text" placeholder="end Location">
                                            <input type="hidden" name="office_location" id="office-location" value="{{($user->office_location=='none')?'':$user->office_location}}">
                                        </div>
                                        <span class="text-warning" id="office-error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Company: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='text' name="company" class="form-control" placeholder="Enter Company Name" value="{{$user->company}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Company Email: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <input type='email' name="company_email" class="form-control" placeholder="Enter Company Email" value="{{$user->company_email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Gender: </label>
                                    <div class="col-sm-10">
                                        <div class="fg-line">
                                            <select name="gender" class="form-control">
                                                <option value=""></option>
                                                <option {{$user->gender=="male"?"selected":""}} value="male">Male</option>
                                                <option {{$user->gender=="female"?"selected":""}} value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               	<div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn bgm-deeporange waves-effect btn-sm">Save User Details</button>
                                        <a type="button" href="{{route('admin::home')}}/book-ride/{{$user->id}}" class="btn btn-info">Register Journey</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
</div>
@endsection

@section('script')
  <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.
var placeSearch, autocomplete1, autocomplete2;
function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete1 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('home-input')),
      {types: ['geocode']});
  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete1.addListener('place_changed', fillInAddress1);
  autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('office-input')),
      {types: ['geocode']});
  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete2.addListener('place_changed', fillInAddress2);
  geolocate();
}
// [START region_fillform]
function fillInAddress1() {
 $('#home-location').val("");
  // Get the place details from the autocomplete object.
  var place = autocomplete1.getPlace();
  console.log(place);
   var check = checkInPlace(place);
  
  if(!check){
    $('#home-error').html("Sorry! We are only supporting in Bombay Now");
    $('#home-input').val("");
    return;
  }
  $('#home-error').html("");
   $('#home-location').val(place.geometry.location.H+","+place.geometry.location.L);
}

function checkInPlace(place){
    var check = false;
    for (var i = place.address_components.length - 1; i >= 0; i--) {
    var part = place.address_components[i];
    if(part.types[0]=="administrative_area_level_2")
    {
        if(part.short_name=="Mumbai Suburban"||part.short_name=="Thane"||part.short_name=="Kalyan"||part.short_name=="Mumbai")
            check=true;
        break;
    }
  };
  return check;
}
function fillInAddress2() {
  // Get the place details from the autocomplete object.
  $('#office-location').val("");
  var place = autocomplete2.getPlace();
    
  var check = checkInPlace(place);
  
  if(!check){
    $('#office-input').val("");
    $('#office-error').html("Sorry! We are only supporting in Bombay Now");
    return;
  }
    $('#office-error').html("");
   $('#office-location').val(place.geometry.location.H+","+place.geometry.location.L);
}

// [END region_fillform]
// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      console.log(position);
      autocomplete1.setBounds(circle.getBounds());
      autocomplete2.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]
$(window).load(function() {
    
    $("#home-input").on('keyup',function(){
        $("#home-location").val("");
    });
    $("#office-input").on('keyup',function(){
        $("#office-location").val("");
    });

    $("#home-input").focusout(function(){
        if($("#home-location").val()==""&&$("#home-input").val()!=""){
            $("#home-input").val("");
            $('#home-error').html("Please select a place from dropdown");
        }
    })
    $("#office-input").focusout(function(){
        if($("#office-location").val()==""&&$("#office-input").val()!=""){
            $("#office-input").val("");
            $('#office-error').html("Please select a place from dropdown");
        }
    })
});
function submitUser(){
      
       $.ajax({
                url: "{{route('admin::user.edit')}}",
                type: "POST",
                data: $('#user-form').serialize(),
                cache: false,
                success: function(data) {
                    swal("User successfully edited",data,'success');
                },
                error: function(data) {
                    console.log(data);
                    swal("Error in Server",data.responseText,'error');
                },
            })
       return false;
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection