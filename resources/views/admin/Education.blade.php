@extends('adminLayout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <button type="button" class="add_education btn btn-info">Add Education</button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Education</li>
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

              <!-- /.card-header -->
              <div class="card-body card">
                <form method="post" id="form_post" action={{ URL::to('/admin/postEducation') }}>
                  @csrf
                  @if($count == 0)
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Education</h3>
                      <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse">
                           <i class="fas fa-minus"></i>
                         </button>
                         <button type="button" data-id="0" class="btn btn-tool btn-delete-box">
                           <i class="fas fa-times"></i>
                         </button>
                        <input type="hidden" name="education_id[]" value="0" class="form-control">
                     </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset('public/admin/dist/img/title.png') }}></span>
                            </div>
                            <input placeholder="Nhập tiêu đề..."  type="text" name="title[]" class="form-control float-right">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Date and time range:</label>
        
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type="text" name="time[]" value = '' class="form-control float-right" id="reservationtime0">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Type Education</label>
        
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset('public/admin/dist/img/check.png') }}></span>
                            </div>
                            <select class="form-control" name="type_education[]">
                                <option  value = '1'>Trình độ học vấn</option>
                                <option  value = '2' >Kinh nghiệm</option>
                            </select>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc[0]" id="desc0" class="form-control desc" rows="3" placeholder="Enter ..."></textarea>
                    
                      </div>
                        @error('desc')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                  </div>
                  @else
                  <?php $i=0;foreach($data as $key => $value):  ?>
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Education</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" data-id='{{$value->id}}' class="btn btn-tool btn-delete-box">
                          <i class="fas fa-times"></i>
                        </button>
                        <input type="hidden" name="education_id[]" value='{{$value->id}}' class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset('public/admin/dist/img/title.png') }}></span>
                            </div>
                            <input placeholder="Nhập tiêu đề..." value="{{$value->title}}"  type="text" name="title[]" class="form-control float-right">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Date and time range:</label>
        
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type="text" name="time[]" value = '{{$value->time}}' class="form-control float-right" id="reservationtime{{$i}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Type Education</label>
        
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset('public/admin/dist/img/check.png') }}></span>
                            </div>
                            <select class="form-control" name="type_education[]">
                                <option {{ ($value->type_education == 1) ? 'selected' : '' }} value = '1'>Trình độ học vấn</option>
                                <option {{ ($value->type_education == 2) ? 'selected' : '' }} value = '2' >Kinh nghiệm</option>
                            </select>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc[]" id="desc{{$i}}" class="form-control desc" rows="3" placeholder="Enter ...">{!! $value->content !!}</textarea>
                    
                      </div>
                        @error('desc')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                  </div>
                  <?php $i++;endforeach ?>
                  @endif
                  <div class="col-12 d-flex div justify-content-end"><button type="submit" class="btn btn-info btn-setting">Save</button></div>
                </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
@push('js')
<!-- date-range-picker -->
<script src={{ asset ("public/admin/plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- bootstrap color picker -->
<script src={{ asset ("public/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}></script>
<script>

    $('.btn-delete-box').click(function(){

      var id_education = $(this).attr('data-id');
      if(id_education == 0)
      {
        $(this).parents('.card-primary').remove();
      }
      else
      {
        $.ajax({
          url:'{{ URL::to("admin/deleteBoxEducation") }}',
          type:'POST',
          data:{
            id_education:id_education,
          },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success:function(data){
            var success = JSON.parse(data);
            if(success.status == 200)
            {
                swal("Thành công", "Xóa thành công", "success");
                setTimeout(() => {
                  location.reload();
                }, 1000);
            }
          }
        })
      }
    })
    $('.add_education').click(function(){
        var count = 0;
        $('.card-primary').each(function()
        {
            count++;
        });
        var html = '<div class="card card-primary">';
            html +='        <div class="card-header">';;
            html +='           <h3 class="card-title">Education</h3>';
            html +='             <div class="card-tools">';
            html +='               <button type="button" class="btn btn-tool" data-card-widget="collapse">';
            html +='                 <i class="fas fa-minus"></i>';
            html +='               </button>';
            html +='               <button type="button" data-id="0" class="btn btn-tool btn-delete-box">';
            html +='                 <i class="fas fa-times"></i>';
            html +='               </button>';
            html +='            <input type="hidden" name="education_id[]" value="0" class="form-control">';
            html +='           </div>';
            html +='        </div>';
            html +='        <div class="col-12">';
            html +='            <div class="form-group">';
            html +='                <label>Tiêu đề</label>';
            html +='                <div class="input-group">';
            html +='                <div class="input-group-prepend">';
            html +='                    <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset("public/admin/dist/img/title.png") }}></span>';
            html +='                </div>';
            html +='                <input type="text" placeholder="Nhập tiêu đề..." name="title['+count+']" class="form-control float-right">';
            html +='                </div>';
            html +='            </div>';
            html +='            <div class="form-group">';
            html +='                <label>Date and time range:</label>';
            html +='                <div class="input-group">';
            html +='                <div class="input-group-prepend">';
            html +='                    <span class="input-group-text"><i class="far fa-clock"></i></span>';
            html +='                </div>';
            html +='                <input type="text" name="time['+count+']" class="form-control float-right" id="reservationtime'+count+'">';
            html +='                </div>';
            html +='            </div>';
            html +='            <div class="form-group">';
            html +='                <label>Type Education</label>';
            html +='                <div class="input-group">';
            html +='                <div class="input-group-prepend">';
            html +='                    <span class="input-group-text"><img style="width:20px;height:24px" src={{ asset("public/admin/dist/img/check.png") }}></span>';
            html +='                </div>';
            html +='                <select class="form-control" name="type_education['+count+']">';
            html +='                    <option value = "1">Trình độ học vấn</option>';
            html +='                    <option value = "2">Kinh nghiệm</option>';
            html +='                </select>';
            html +='                </div>';
            html +='            </div>';
            html +='            <div class="form-group">';
            html +='            <label>Description</label>';
            html +='            <textarea name="desc['+count+']" id="desc'+count+'" class="form-control desc" rows="3" placeholder="Enter ..."></textarea>';
            html +='            </div>';
            html +='        </div>';
            html +='      </div>';
            $('.btn-setting').parents('.div').before(html);

            CKEDITOR.env.isCompatible = true;
            CKEDITOR.replace('desc'+count);

            $('#reservationtime'+count).daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
    })
    @if($count > 0)
    <?php $i=0;foreach($data as $key => $value):  ?>
      CKEDITOR.env.isCompatible = true;
      CKEDITOR.replace('desc{{$i}}');

      $('#reservationtime{{$i}}').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    <?php $i++;endforeach ?>
    @else

    $('#reservationtime0').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    CKEDITOR.env.isCompatible = true;
    CKEDITOR.replace('desc0');
    @endif
</script>
@endpush