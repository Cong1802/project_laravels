@extends('adminLayout')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="col-md-12 col-sm-12 ">
                <form action="{{ URL::to('updateCategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="x_panel">
                        <div class="form-group">
                            <label class="mb-0 mt-4"><h6>Danh mục</h6></label>
                            <input class="form-control" name="category_name" value="{{ $dataa->category_name }}" required placeholder="Tên kênh truyền thông">
                            <input type="hidden" class="form-control" name="category_id" value="{{ $dataa->category_id }}">
                        </div>
                        <button type="submit" class="btn btn-info">Process</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
