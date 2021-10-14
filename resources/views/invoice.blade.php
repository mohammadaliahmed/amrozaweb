@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>VIew Invoice</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-globe"></i> Amroza Network (AMC)
                            <small class="float-right">Date: {{date("d-M-Y ", $invoice['time']/1000)}}</small>
                        </h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>


                                    <h1><strong>Amroza.com</strong></h1>
                                    <br>


                                    <h3><b>Invoice #:{{$invoice['invoiceId']}}
                                        </b>
                                        <br>
                                        <br>
                                        <b>Order #: {{$invoice['order']['orderId']}} </b><br>
                                    </h3>
                                </th>
                                <th></th>

                                <th>
                                    <strong>To:</strong>
                                    <address>
                                        <strong>Name: </strong>{{$invoice['order']['customer']['name']}}<br>
                                        <strong>Phone: </strong> {{$invoice['order']['customer']['phone']}}<br>
                                        <strong>Address: </strong> {{$invoice['order']['customer']['address']}}<br>
                                        <strong>Store Name: </strong> {{$invoice['order']['customer']['storeName']}}
                                        <br>
                                        <strong>Store Type: </strong> {{$invoice['order']['customer']['storeType']}}
                                        <br>
                                    </address>

                                </th>


                            </tr>
                            <tr>
                                <th>
                                    <center>Sr #</center>
                                </th>
                                <th>Product Name</th>
                                <th>
                                    <center>Price</center>
                                </th>
                                <th>
                                    <center>Quantity</center>
                                </th>
                                <th>
                                    <center>Total</center>
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @php($count=1)
                            @foreach($invoice['order']['countModelArrayList'] as $item)
                                <tr>
                                    <td style="padding: 0rem;width: 20px;">
                                        <center>{{$count}}</center>
                                    </td>
                                    <td style="padding: 0rem;width:500px">{{$item['product']['title']}}</td>
                                    <td style="padding: 0rem;">
                                        <center>{{$item['product']['price']}}</center>
                                    </td>
                                    <td style="padding: 0rem;">
                                        <center>{{$item['quantity']}}</center>
                                    </td>
                                    <td style="padding: 0rem;">
                                        <center>{{$item['quantity']*$item['product']['price']}}</center>
                                    </td>


                                </tr>
                                @php($count++)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <!-- accepted payments column -->
                        <hr>
                        <h3 class="float-right mr-5">Total: Rs {{$invoice['order']['totalPrice']}}</h3>

                    </div>

                </div>
            </div>

            <div class="row no-print">
                <div class="col-12">
                    <button onclick="window.print()" target="_blank" class="btn btn-default"><i
                                class="fas fa-print"></i> Print
                    </button>


                </div>
            </div>
        </div>

    </div>
    {{--order details end--}}

    {{--user details--}}

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop