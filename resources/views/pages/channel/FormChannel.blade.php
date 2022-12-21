@extends('adminLayout')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="col-md-12 col-sm-12 ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ URL::to('PushChannel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="x_panel">
                        <div class="form-group">
                            <label class="mb-0 mt-4"><h6>Tên kênh truyền thông</h6></label>
                            <input class="form-control" name="channel_name" required placeholder="Tên kênh truyền thông">
                        </div>
                        <div class="form-group">
                            <label class="mb-0 mt-2"><h6>Nền tảng MXH</h6></label>
                            <div>
                                <select name="category" required>
                                    <option selected disabled >Nền tảng MXH</option>
                                    @foreach ($categories as $key => $category)
                                    <option value="{{ $category->category_id }}" >{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group w-100">
                            <input type="file" name="file" required>
                            <img id="output"/>
                        </div>
                        <button type="submit" class="btn btn-info">Process</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection