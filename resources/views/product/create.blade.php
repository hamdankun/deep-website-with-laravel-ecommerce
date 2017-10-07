@extends('main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-plus fa-lg"></i> Add Product</div>
        <div class="panel-body">
            <form action="{{ url('/product')  }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field()  }}
                <div class="form-group">
                    <label for="name" class="control-label col-md-2">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="control-label col-md-2">Price</label>
                    <div class="col-md-9">
                        <input type="number" name="price" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="weight" class="control-label col-md-2">Weight</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="number" name="weight" class="form-control" required>
                            <span class="input-group-addon" id="basic-addon1">Kg</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="control-label col-md-2">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="control-label col-md-2">Image</label>
                    <div class="col-md-9">
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button class="btn btn-primary">
                            Save
                        </button>
                        <button type="reset" class="btn btn-danger">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection