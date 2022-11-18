<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center d-flex justify-content-center">
          <div class="col-6 d-flex justify-content-center align-item-center img-fluid img-circle" style="align-items:center">
            <label for="upload_logo" style="height:fit-content">
                <div class="upload_logo_vehicle position_r profile-user-img">
                    @if(file_exists( public_path().'/upload/'.$data->avatar ) && $data->avatar != '')
                    <img src={{ asset('public/upload/'.$data->avatar)}} alt="">
                    @else
                    <img src={{ asset('public/admin/dist/img/add_logo.svg') }} alt="">
                    @endif
                    <form method="post" id="update_avt" action='{{ URL::to('admin/profile/updateAVT') }}' enctype="multipart/form-data">
                      @csrf
                      <input type="file" id="upload_logo" name="avatar" class="profile-user-img upload_logo display_none" accept=".png, .jpg, .jpeg">
                    </form>
                </div>
                @error('avatar')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            <div class="upload_logo_vehicle_done position_r display_none profile-user-img">
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

        <h3 class="profile-username text-center">{{ $data->name }}</h3>

        <p class="text-muted text-center">{{ $data->job }}</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Followers</b> <a class="float-right">1,322</a>
          </li>
          <li class="list-group-item">
            <b>Following</b> <a class="float-right">543</a>
          </li>
          <li class="list-group-item">
            <b>Friends</b> <a class="float-right">13,287</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">About Me</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Education</strong>

        <p class="text-muted">
          <?php foreach($education as $key=>$value): ?>
          <p class="tag tag-primary">{{ $value->title }}</p>
          <?php endforeach ?>
        </p>

        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

        <p class="text-muted">{{ $data->address }}</p>

        <hr>

        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

        <p class="text-muted">
          <?php $i=1;foreach($skill as $key=>$value): ?>
          <span class="tag tag-primary">{{ $value->skillname }}</span>{{ ($i == count($skill)) ? '' : ',' }}
          <?php $i++;endforeach ?>
        </p>

        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

        <p class="text-muted">{!! $data->information !!}</p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <style>
    .upload_logo_vehicle_done:hover .add_logo_hover,
    .upload_logo_vehicle_done:hover .add_logo,
    .upload_logo_vehicle_done:hover .del_logo
    {
        display: block;
    }
    .upload_logo_vehicle, img.ready_upload_logo, .upload_logo_vehicle_done {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
    .display_none {
        display: none;
    }
    .upload_logo_vehicle img
    {
      border-radius: 50%;
      height: 100%;
      width: 100%
    }
    img.del_logo {
        bottom: 25px;
        right: 25px;
        cursor: pointer;
        display: none;
    }
    img.add_logo {
        top: 25px;
        left: 25px;
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
    .ready_upload_logo
    {
      height: 100% !important;
      width: 100% !important;
    }
    .position_a {
        position: absolute;
    }
    .position_r {
        position: relative;
    }
    #update_avt
    {
      padding: 0 !important;
    }
</style>