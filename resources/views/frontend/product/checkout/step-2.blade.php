@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customer Information
                </div>
                <div class="panel-body">
                    <form action="{{ url('/step-2')  }}" method="POST" class="form-horizontal">
                        {{ csrf_field()  }}
                        <div class="form-group">
                            <label for="firstName" class="control-label col-md-2">First Name</label>
                            <div class="col-md-3">
                                <input type="text" name="firstName" class="form-control" id="firstName">
                            </div>
                            <label for="firstName" class="control-label col-md-2">Last Name</label>
                            <div class="col-md-3">
                                <input type="text" name="lastName" class="form-control" id="lastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-md-2">Email</label>
                            <div class="col-md-8">
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-md-2">Address</label>
                            <div class="col-md-8">
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postal_code" class="control-label col-md-2">Postal Code</label>
                            <div class="col-md-8">
                                <input name="postal_code" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button
                                        type="submit"
                                        class="btn btn-primary">Next
                                    <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
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