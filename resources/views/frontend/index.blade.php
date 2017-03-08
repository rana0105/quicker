@extends('frontend.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Customer Information</h3></div>
                    <div style="margin-right: 10px">
                        <form class="navbar-form navbar-right" role="form" action="/" method="GET">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search" name="search_tag">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <!-- Table -->
                    <table class="table table-striped table-sm table-responsive">
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Created At</th>
                        </thead>

                        <tbody>   
                            @foreach($customers as $customer)

                                <tr>
                                    <th>{{ $customer->id  }}</th>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ substr($customer->address, 0, 50) }} {{ strlen($customer->address) >50 ? "..." :""}}</td>
                                    <td>{{ date('M j, Y', strtotime($customer->created_at))  }}</td>
                                </tr>

                            @endforeach 
                        </tbody>
                    </table>
                    <div class="text-center">
                    {!! $customers->links(); !!} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
