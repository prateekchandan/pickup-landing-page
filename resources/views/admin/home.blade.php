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
	                                            <div class="percent">{{$click->register}}/{{$click->count}}</div>
	                                            <div class="pie-title">{{$click->description}}</div>
	                                        </div>
                                    	@endforeach
                                    </div>
    
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Email Clicks <small>Day wise and hour wise email click data</small></h2>
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="chart-edge">
                                <div id="hour-line-chart" style="height:200px" ></div>
                            </div>
                        </div>
                    </div>
                    
                    
@endsection


@section('script')
<script type="text/javascript">
$(document).ready(function(){
    var hour_data = {!!json_encode($hours)!!};

    var options = {
        series: {
            shadowSize: 0,
            curvedLines: { //This is a third party plugin to make curved lines
                apply: false,
                active: false,
                monotonicFit: true
            },
            lines: {
                show: false,
                lineWidth: 0,
            },
        },
        grid: {
            borderWidth: 0,
            labelMargin:10,
            hoverable: true,
            clickable: true,
            mouseActiveRadius:6,
            
        },
        xaxis: {
            tickDecimals: 0,
            ticks: false
        },
        
        yaxis: {
            tickDecimals: 0,
            ticks: false
        },
        
        legend: {
            show: false
        }
    };

     if ($("#hour-line-chart")[0]) {
        $.plot($("#hour-line-chart"), [
            {data: hour_data, lines: { show: true, fill: 0.98 }, label: 'Hour', stack: false, color: '#abcdef' }
        ], options);
    }
    
    /* Tooltips for Flot Charts */
    
    if ($("#hour-line-chart")[0]) {
        $("#hour-line-chart").bind("plothover", function (event, pos, item) {
            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);
                $(".flot-tooltip").html("At "+item.series.label +" "+ parseInt(x) + " click = " + parseInt(y)).css({top: item.pageY+5, left: item.pageX-50}).show();
            }
            else {
                $(".flot-tooltip").hide();
            }
        });
        
        $("<div class='flot-tooltip' class='chart-tooltip'></div>").appendTo("body");
    }
});
</script>

@endsection