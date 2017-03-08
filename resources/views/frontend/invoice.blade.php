@extends('frontend.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Customer Order Information</h3></div>
                    <div style="margin-right: 10px;">
                        <form class="navbar-form navbar-right" role="form" action="/" method="GET">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Input name or phone no.." name="search_tag">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <!-- Table -->
                    <table class="table table-striped table-sm table-responsive">
                        <thead>
                        <th>#</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Title</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        </thead>

                        <tbody>   
                            @foreach($invoices as $invoice)

                                <tr>
                                    <th>{{ $invoice->id  }}</th>
                                    <td>{{ $invoice->date }}</td>
                                    <td>{{  $invoice->customer ?  $invoice->customer->name  : '' }}</td>
                                    <td>{{ substr($invoice->title, 0, 30) }} {{ strlen($invoice->title) >30 ? "..." :""}}</td>
                                    <td>{{ $invoice->total }}</td>
                                    <td>{{ $invoice->discount  }}</td>
                                </tr>

                            @endforeach 
                        </tbody>
                    </table>
                    <div class="text-center">
                    {!! $invoices->links(); !!} 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
