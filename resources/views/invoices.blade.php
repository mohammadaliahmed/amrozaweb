@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Invoices</h1>
@stop

@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Bills</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body  table-bordered table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Bill #</th>
                                <th>Order #</th>
                                <th>Total Price</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($count=1)
                            @if(isset($invoices))
                                @foreach($invoices as  $invoice)
                                    @if(isset($invoice))


                                        <tr>
                                            <td>{{$count}}</td>

                                            <td>{{$invoice['invoiceId']}}</td>

                                            <td>{{$invoice['order']['orderId']}}</td>
                                            <td>{{$invoice['order']['totalPrice']}}</td>

                                            <td>{{$invoice['order']['customer']['name']}}</td>

                                            <td>{{$invoice['order']['customer']['phone']}}</td>

                                            <td width="50">{{$invoice['order']['customer']['address']}}</td>




                                            <td>
                                                <a href="viewinvoice/{{$invoice['invoiceId']}}">
                                                    <button class="btn btn-primary">View</button>
                                                </a>
                                            </td>


                                        </tr>
                                        @php($count++)
                                    @endif

                                @endforeach
                            @endif


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop