@extends('adminLayout')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="col-md-12 col-sm-12 ">
                <form action="{{ URL::to('PushCategory') }}" method="POST">
                    @csrf
                    <div class="x_panel">
                        <div class="form-group">
                            <label class="mb-0 mt-4"><h6>Tên danh mục</h6></label>
                            <input class="form-control" name="category_name" required placeholder="Tên danh mục"></input>
                        </div>
                        <button type="submit" class="btn btn-info">Process</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
