@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Shopping Cart
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach(Cart::content() as $row)

                            <tr>
                                <td>
                                    <p><strong><?php echo $row->name; ?></strong></p>
                                </td>
                                <td><input type="number" value="<?php echo $row->qty; ?>" class="form-control"></td>
                                <td>Rp <?php echo number_format($row->price); ?></td>
                                <td>Rp <?php echo number_format($row->total); ?></td>
                            </tr>

                        @endforeach

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Subtotal</td>
                            <td><?php echo Cart::subtotal(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Tax</td>
                            <td><?php echo Cart::tax(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Total</td>
                            <td><?php echo Cart::total(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2" align="right">
                                <a href="{{ url('/step-1')  }}" class="btn btn-primary">
                                    Checkout
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List Other Product
                </div>
                {{--<div class="panel-body">--}}
                    {{--<ul class="list-group">--}}
                        {{--@foreach($otherProducts as $key => $value)--}}
                            {{--<li class="list-group-item">--}}
                                {{--<a href="{{ url('/product-list/' . $value->id)  }}">--}}
                                    {{--{{ $value->name  }}--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection