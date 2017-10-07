@extends('main')

@section('content')
    <div class="row">
        @foreach($products as $key => $value)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('product-images/' . $value->image)  }}"
                         alt="{{ $value->name  }}">
                    <div class="caption">
                        <h3>{{ $value->name }}</h3>
                        <p> Rp.{{ number_format($value->price)  }} </p>
                        <p>
                            {{ str_limit($value->description, 100)  }}
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <i class="fa fa-shopping-cart"></i> Add Cart
                            </a>
                            <a href="#" class="btn btn-default" role="button">
                                <i class="fa fa-eye"></i> View Detail
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container center-text">
        {{ $products->links() }}
    </div>
@endsection