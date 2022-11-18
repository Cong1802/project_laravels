@extends('adminLayout')
@section('content')
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Setting</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div>
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action={{ URL::to('/admin/postSetting') }} enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title Blog</label>
                        <input type="text" value="{{ $data[0]->title }}" name ="title"class="form-control" placeholder="Enter ...">
                      </div>
                      @error('title')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Footer</label>
                        <input type="text" name="footer" value="{{ $data[0]->Footer }}" class="form-control" placeholder="Coppy right">
                      </div>
                      @error('footer')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                    <div class="col-12">
                        <!-- textarea -->
                        <div class="form-group">
                        <label>Introduce yourself</label>
                        <textarea name="Introduce" id="Introduce" class="form-control Introduce" rows="3" placeholder="Enter ...">{{ $data[0]->Introduce }}</textarea>
                        </div>
                        @error('Introduce')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                  <!-- input states -->
                  <div class="form-group ">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Email</label>
                    <input type="text" class="form-control is-valid" value="{{ $data[0]->email }}" name="email" id="inputSuccess" placeholder="Enter ...">
                    @error('email')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Phonenumber</label>
                    <input type="text" class="form-control is-warning" value="{{ $data[0]->phone }}" name="phone" id="inputWarning" placeholder="Enter ...">
                    @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Address</label>
                    <input type="text" class="form-control is-invalid" value="{{ $data[0]->address }}" name="address" id="inputError" placeholder="Enter ...">
                    @error('address')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="row">
                    <div class="col-12 border border-primary rounded">
                      <!-- checkbox -->
                      <label class="col-form-label  w-100 mb-2" for="inputError"><img style="height:24px;with:24px" class="mr-2" src={{ asset('public/admin/dist/img/menu.png')}}>Display Blog</label>
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label"><input class="form-check-input" {{ ($data[0]->job ==1) ? 'checked' : '' }} value='1' name="job" type="checkbox"> My job</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label"><input class="form-check-input" {{ ($data[0]->images ==1) ? 'checked' : '' }} value='1' name="images" type="checkbox"> Images</label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label"><input class="form-check-input" {{ ($data[0]->project ==1) ? 'checked' : '' }} value='1' name="project" type="checkbox"> My project</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" {{ ($data[0]->feedback ==1) ? 'checked' : '' }} value='1' name="feedback" type="checkbox"> Feedback</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" {{ ($data[0]->post ==1) ? 'checked' : '' }} value='1' name="post" type="checkbox"> Post</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                      <div class="form-group col-12">
                        <label>Logo</label>
                        <div class="col-6 d-flex justify-content-center align-item-center" style="align-items:center">
                            <label for="upload_logo" style="height:fit-content">
                                <div class="upload_logo_vehicle position_r">
                                  @if(file_exists( public_path().'/upload/'.$data[0]->logo ) && $data[0]->logo != '')
                                  <img class="col-12" src={{ asset('public/upload/'.$data[0]->logo)}} alt="">
                                  @else
                                  <img class="" src={{ asset('public/admin/dist/img/add_logo.svg') }} alt="">
                                  @endif
                                    
                                    <input type="file" id="upload_logo" name="logo" class=" upload_logo display_none" accept=".png, .jpg, .jpeg">
                                </div>
                                @error('avatar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </label>
                            <div class="upload_logo_vehicle_done position_r display_none">
                                <img class="ready_upload_logo" src={{ asset('public/admin/dist/img/add_logo.svg')}} alt="">
                                <img class="add_logo_hover position_a" src={{ asset('public/admin/dist/img/add_logo_hover.png')}} alt="">
                                <label for="upload_logo">
                                    <img class="add_logo position_a" src={{ asset('public/admin/dist/img/add_photo.png')}} alt="">
                                    <input type="file" id="upload_logo" class=" display_none upload_logo" accept=".png, .jpg, .jpeg">
                                </label>
                                <img class="del_logo position_a" src={{ asset('public/admin/dist/img/dell_logo.svg')}} alt="">
                            </div>
                            
                        </div>
                      </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end"><button type="submit" class="btn btn-info btn-setting">Save</button></div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <style>
        .upload_logo_vehicle_done:hover .add_logo_hover,
        .upload_logo_vehicle_done:hover .add_logo,
        .upload_logo_vehicle_done:hover .del_logo
        {
            display: block;
        }
        .upload_logo_vehicle, img.ready_upload_logo, .upload_logo_vehicle_done {
            width: 215px;
            height: 215px;
            border-radius: 10%;
            background: #C4C4C4;
        }
        .display_none {
            display: none;
        }
        .upload_logo_vehicle img
        {
            height: 100%;
        }
        img.del_logo {
            bottom: 45px;
            right: 45px;
            cursor: pointer;
            display: none;
        }
        img.add_logo {
            top: 45px;
            left: 45px;
            cursor: pointer;
            display: none;
        }
        img.add_logo_hover {
            left: 0;
            top: 0;
            display: none;
            height: 100%;
            width: 100%;
        }
        .position_a {
            position: absolute;
        }
        .position_r {
            position: relative;
        }
    </style>
  <!-- /.content-wrapper -->
@endsection
@push('js')
  <script>
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
      
      CKEDITOR.env.isCompatible = true;
      CKEDITOR.replace('Introduce');
  </script>
@endpush