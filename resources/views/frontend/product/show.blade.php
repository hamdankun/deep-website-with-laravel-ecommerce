@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product Detail
                </div>
                <div class="panel-body">
                    <img
                    src="{{ asset('product-images/' . $product->image)  }}" a
                    lt="Product Image"
                    class="img-responsive"
                    >
                    Name : {{ $product->name  }} <br />
                    Price : {{ number_format($product->price) }}
                    <p>
                        {{ $product->description  }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  List Other Product
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($otherProducts as $key => $value)
                            <li class="list-group-item">
                                <a href="{{ url('/product-list/' . $value->id)  }}">
                                    {{ $value->name  }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection