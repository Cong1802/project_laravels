@extends('adminLayout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit user</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Advanced Form</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                <div class="card-body">
                    <form action='{{ URL::to('admin/insertUser') }}' method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                              <div class="card card-info">
                                <div class="card-header">
                                  <h3 class="card-title">Input masks</h3>
                                </div>
                                <div class="card-body">
                                  <!-- /.form group -->
                  
                                  <div class="form-row">
                                        <div class="col-6 p-0">
                                            <div class="form-group col-12">
                                                <label for="inputEmail4">Họ tên</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-anchor"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Nhập họ tên" name="name" data-inputmask="'alias': 'ip'" data-mask>
                                                </div>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputPassword4">Email</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Nhập họ email" name='email' data-inputmask="'alias': 'ip'" data-mask>
                                                </div>
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputPassword4">Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-anchor"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="******" name='password' data-inputmask="'alias': 'ip'" data-mask>
                                                </div>
                                                @error('Password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputPassword4">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-anchor"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="******" name='confirm_password' data-inputmask="'alias': 'ip'" data-mask>
                                                </div>
                                                @error('confirm_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">City</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-landmark"></i></span>
                                                    </div>
                                                    <select id="city" name="city" class="form-control">
                                                        <option disabled selected>Thành phố</option>
                                                        @foreach ($city as $key => $value)
                                                        <option value="{{ $value->cit_id }}">{{ $value->cit_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">District</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                    </div>
                                                    <select id="district" name="district" class="form-control">
                                                        <option disabled selected>Quận / huyện</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                @error('district')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center align-item-center" style="align-items:center">
                                            <label for="upload_logo" style="height:fit-content">
                                                <div class="upload_logo_vehicle position_r">
                                                    <img class="" src={{ asset('public/admin/dist/img/add_logo.svg') }} alt="">
                                                    <input type="file" id="upload_logo" name="avatar" class=" upload_logo display_none" accept=".png, .jpg, .jpeg">
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
                                  <div class="form-group">
                                    <label for="inputAddress">Ward</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-snowflake"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="ward" placeholder="Nhập họ phường / xã" data-inputmask="'alias': 'ip'" data-mask>
                                    </div>
                                    @error('ward')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="inputAddress2">Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ chi tiết" data-inputmask="'alias': 'ip'" data-mask>
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-12">
                                      <label for="inputCity">sex</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hammer"></i></span>
                                            </div>
                                            <select id="sex" name="sex" class="form-control">
                                                <option disabled selected>Giới tính</option>
                                                <option value='1'>Nam</option>
                                                <option value='2'>Nữ</option>
                                                <option value='3'>Khác</option>
                                            </select>
                                        </div>
                                      
                                    </div>
                                    <div class="form-group col-12">
                                      <label for="inputState">Level</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-virus"></i></span>
                                        </div>
                                        <select id="level" name="level" class="form-control">
                                            <option value='0'>Customer</option>
                                            <option value='1'>Admin</option>
                                            <option value='2'>Manager</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.form group -->
                                  <div class="form-group">
                                    <label>Status</label>
                                    <div class="">
                                        <div class="icheck-success col-12 d-inline">
                                          <input type="radio" value='1' name="status" checked="" id="radioSuccess1">
                                          <label for="radioSuccess1">
                                                Block
                                          </label>
                                        </div>
                                        <div class="icheck-success col-12 d-inline">
                                          <input type="radio" value='0' name="status" id="radioSuccess2">
                                          <label for="radioSuccess2">
                                                None
                                          </label>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                  </div> 
                                  <!-- /.form group -->
                  
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                  
                            </div>
                            <!-- /.col (left) -->
                        </div>
                        <button type="submit" class="btn btn-info">Register</button>
                    </form>
                
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
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
            border-radius: 50%;
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
    <!-- Select2 -->
    <script src={{ asset("public/admin/plugins/select2/js/select2.full.min.js")}}></script>
    <script src={{ asset("public/admin/plugins/moment/moment.min.js")}}></script>
    <script src={{ asset("public/admin/plugins/inputmask/jquery.inputmask.min.js")}}></script>
    <!-- date-range-picker -->
    <script src={{ asset("public/admin/plugins/daterangepicker/daterangepicker.js")}}></script>
    <!-- bootstrap color picker -->
    <script src={{ asset("public/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset("public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
    <!-- BS-Stepper -->
    <script src={{ asset("public/admin/plugins/bs-stepper/js/bs-stepper.min.js")}}></script>
    <!-- dropzonejs -->
    <script src={{ asset("public/admin/plugins/dropzone/min/dropzone.min.js")}}></script>
    <script>
        $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()
    
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    
        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
            format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
            ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
            },
            function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )
    
        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })
    
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()
    
        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()
    
        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })
        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    
        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false
    
        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)
    
        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })
    
        myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })
    
        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })
    
        myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })
    
        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
        })
    
        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
@endsection
