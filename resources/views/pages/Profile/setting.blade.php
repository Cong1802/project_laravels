@extends('adminLayout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          @if(isset($data))
          @include('include.sidebarProfile')
          @endif
          <!-- /.col -->
          <div class="{{ (isset($data) ? 'col-md-9' : 'col-12') }}">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li><a class="nav-link" href="{{ URL::to('profile/activity') }}">Activity</a></li>
                  <li><a class="nav-link" href="{{ URL::to('profile/timeline') }}">Timeline</a></li>
                  <li><a class="nav-link" href="{{ URL::to('profile/setting') }}">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form action='{{ URL::to('admin/profile/editprofile') }}' method='POST' class="form-horizontal">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ (isset($data) ? $data->name : '') }}" name='name' id="inputName" placeholder="Nhập họ tên ...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" value="{{ (isset($data) ? $data->email : '') }}" name='email' id="inputEmail" placeholder="Nhập email ...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ (isset($data) ? $data->phone : '') }}" name='phone' placeholder="Nhập số điện thoại ...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">My job</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ (isset($data) ? $data->job : '') }}" name='job' placeholder="Công việc hiện tại của bạn">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name='address' value="{{ (isset($data) ? $data->address : '') }}" placeholder="Nhập địa chỉ ...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name='birthday' value="{{ (isset($data) ? $data->birthday : '') }}" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="information" class="col-sm-2 col-form-label">personal information</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="information" name='information' placeholder="Thông tin cá nhân">{!! (isset($data) ? $data->information : '') !!}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('js')
<script>
    CKEDITOR.env.isCompatible = true;
    CKEDITOR.replace('information');

    // upload file logo
    var forward_style_img = $('.forward_style_img');
    var upload_logo_vehicle = $('.upload_logo_vehicle');
    var upload_logo_vehicle_done = $('.upload_logo_vehicle_done');

    window.addEventListener('load', function () {
        document.querySelector('input[type="file"]').addEventListener('change', function () {
            if (this.files && this.files[0]) {
                var img = document.querySelector('img.ready_upload_logo');
                img.onload = () => {
                    URL.revokeObjectURL(img.src);  // no longer needed, free memory
                }

                img.src = URL.createObjectURL(this.files[0]); // set src to blob url
            }
            $('.upload_logo_vehicle').hide();
            $('.upload_logo_vehicle_done').show();
            // reloadImg();
        });
    });

    $('.del_logo').click(function () {
        $('.ready_upload_logo').attr('src', '');
        $('.upload_logo_vehicle_done').hide();
        $('.upload_logo_vehicle').show();
        // reloadImg();
    })

    $('input[name="avatar"]').change(function () {
      var file_data = $(this)[0].files[0];
        var form_data = new FormData();
        form_data.append('avatar', file_data);
        $.ajax({
              url : '{{ URL::to('admin/profile/updateAVT') }}',
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              type: 'POST',   
              contentType: false,
              processData: false,   
              cache: false,        
              data: form_data,
              success: function(data) {
                  console.log(data);
              }
         });
    })
</script>
@endpush