@extends('adminLayout')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="col-md-12 col-sm-12 ">
                <form action="{{ URL::to('updateChannel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="x_panel">
                        <div class="form-group">
                            <label class="mb-0 mt-4"><h6>Tên kênh truyền thông</h6></label>
                            <input class="form-control" name="channel_name" value="{{ $dataa->channel_name }}" required placeholder="Tên kênh truyền thông">
                            <input class="form-control" name="channel_id" value="{{ $dataa->id }}" type="hidden">
                        </div>
                        <div class="form-group">
                            <label class="mb-0 mt-2"><h6>Nền tảng MXH</h6></label>
                            <div>
                                <select name="category" required>
                                    <option selected disabled >Nền tảng MXH</option>
                                    @foreach ($categories as $key => $category)
                                    <option @if($category->category_id == $dataa->category) selected @endif value="{{ $category->category_id }}" >{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file">
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
