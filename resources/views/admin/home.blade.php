@extends('admin.template')


@section('content')
<style type="text/css">
	.easy-pie .percent:after {
    content: "";
	}
</style>
 					<div class="block-header">
                        <h2>Dashboard</h2>
                        
                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="md md-cached"></i>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    
                   
                    
                    <div class="mini-charts">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-cyan">
                                    <div class="clearfix">
                                        <div class="chart stats-bar"></div>
                                        <div class="count">
                                            <small>Total User Registered</small>
                                            <h2>{{$user}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-lightgreen">
                                    <div class="clearfix">
                                        <div class="chart stats-bar-2"></div>
                                        <div class="count">
                                            <small>Total Email Clicks</small>
                                            <h2>{{$totalClicks}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-orange">
                                    <div class="clearfix">
                                        <div class="chart stats-line"></div>
                                        <div class="count">
                                            <small>Total Sales</small>
                                            <h2>$ 458,778</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-bluegray">
                                    <div class="clearfix">
                                        <div class="chart stats-line-2"></div>
                                        <div class="count">
                                            <small>Support Tickets</small>
                                            <h2>23,856</h2>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                    
                    
                    <div class="dash-widgets">
                        <div class="row">
                        	<div class="col-md-12 col-sm-12">
                                <div id="pie-charts" class="dash-widget-item">
                                    <div class="bgm-pink">
                                        <div class="dash-widget-header">
                                            <div class="dash-widget-title">Click Statistics</div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div class="text-center p-20 m-t-25">
                                            <div class="easy-pie main-pie" id="main-pie" data-percent="752">
                                                <div class="percent">{{$totalClicks}}</div>
                                                <div class="pie-title">Total Emails Link Clicked</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-t-20 p-b-20 text-center">
                                    	@foreach($clicks as $key => $click)
                                    		<div class="easy-pie sub-pie" id="sub-pie-{{$key}}" data-percent="{{$click->percent}}">
	                                            <div class="percent">{{$click->count}}</div>
	                                            <div class="pie-title">{{$click->description}}</div>
	                                        </div>
                                    	@endforeach
                                    </div>
    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    
@endsection