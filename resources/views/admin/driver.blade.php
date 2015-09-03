@extends('admin.template')

@section('content')
 <div class="card">
                        <div class="card-header">
                            <h2>All Drivers</h2>
                        </div>
                        
                        <table id="data-table-command" class="table table-striped table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                    <th data-column-id="name">Name</th>
                                    <th data-column-id="username">username</th>
                                    <th data-column-id="location">Current Location</th>
                                    <th data-column-id="status">Status</th>
                                    <th data-column-id="emstatus">Empty Status</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($drivers as $driver)
                                <tr>
                                    <td>{{$driver->driver_id}}</td>
                                    <td>{{$driver->driver_name}}</td>
                                    <td>{{$driver->username}}</td>
                                    <td><a href="http://maps.google.com/maps?q={{$driver->current_pos}}&z=17" target="_blank"> {{$driver->current_pos}}</a></td>
                                    <td>{{$driver->phone_status}}</td>
                                    <td>{{$driver->driver_status}}</td>
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
                            //return "<button type=\"button\"  class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"md md-delete\"></span></button>";
                        }
                    }
                });

               

</script>
@endsection