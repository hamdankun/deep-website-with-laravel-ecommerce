@extends('main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-list fa-lg"></i> List</div>
        <div class="panel-body">
            <a href="{{ url('/product/create') }}" class="btn btn-primary mb-10">
                <i class="fa fa-plus"></i>
            </a>
            <table class="table table-bordered table-stiped table-hovered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $value)
                        <tr>
                            <th>{{ $value->name }}</th>
                            <th>{{ number_format($value->price) }}</th>
                            <th>{{ $value->weight }}</th>
                            <th>
                                <a href="{{ url('/product/' . $value->id . '/edit')  }}"
                                class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection