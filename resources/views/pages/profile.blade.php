@extends('adminLayout')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-md-12 mb-lg-0 mb-4">
          <div class="card">
            <form class="dark col-12" action="{{ URL::to('addSkill') }}">
              <div class="card-header">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0"><ion-icon name="cube-sharp"></ion-icon> Skill</h6>
                  </div>
                  <div class="col-6 text-end">
                    <button type="submit" class="btn bg-gradient-dark mb-0"><i class="fas fa-plus"></i>&nbsp;&nbsp;Save</button>
                  </div>
                </div>
              </div>
              <fieldset>
                <div class="field">
                  <label for="name2">Skill Name: </label>
                  <input type="text" id="skillname" placeholder="Enter for add skill">
                </div>
                @if($count_skill == 0)
                <div class="field main_level">
                  <label for="power2">Power Level</label>
                  <div class="range">
                    <span>No value</span>
                  </div>
                </div>
                @else
                <div class="field main_level">
                  <label for="power2">Power Level</label>
                  <?php $i=0;foreach($data_skill as $key => $value):  ?>
                  <div class="range">
                    <input type="hidden" name="id_skill[{{$i}}]" value="{{ $value->id }}">
                    <label class="skillname" for="power2">{{ $value->skillname }}<input type='hidden' value='{{ $value->skillname }}' name='skillname[{{$i}}]'></label>
                    <input type="range" min=0 max=100 value={{ $value->process }} id="power2" name="process[{{$i}}]">
                    <label for="power" class="text-center"><span>{{ $value->process }}</span>%
                      <button type="button" data-id="{{ $value->id }}" onclick="delete_skill(this)" class="btn btn-tool btn-delete-skill">
                        <i class="fas fa-times"></i>
                      </button></label>
                    </label>
                  </div>
                  <?php $i++;endforeach ?>
                </div>
                @endif
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0"><ion-icon name="qr-code-sharp"></ion-icon> Profile Template</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                <span class="text-xs">#MS-415646</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $180
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                <span class="text-xs">#RV-126749</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $250
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                <span class="text-xs">#FB-212562</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $560
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                <span class="text-xs">#QW-103578</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $120
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                <span class="text-xs">#AR-803481</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                $300
                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 mt-4">
      <div class="card timelines">
          <div class="card-header d-flex align-center justify-content-between">
            <h6 class="card-title"><ion-icon name="layers-sharp"></ion-icon> TimeLine</h6>
            <button type="button" class="add_education btn btn-info">Add Education</button>
          </div>
          <form method="post" class="p-0" id="form_post" action={{ URL::to('/postEducation') }}>
            @csrf
            @if($count_education == 0)
            <div class="card p-3 mb-3 card-primary">
              <div class="col-12">
                  <div class="form-group">
                    <div class="d-flex justify-content-between">
                      <label>Tiêu đề</label>
                      <button type="button" data-id="0" onclick="delete_box(this)" class="btn btn-tool btn-delete-box"><i class="fas fa-times"></i></button>
                    </div>
                      <div class="input-group">
                      <input placeholder="Nhập tiêu đề..."  type="text" name="title[]" class="form-control box-shadow float-right">
                      <input type="hidden" name="education_id[]" value='0' class="form-control box-shadow">
                      </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                      <label>Date and time range:</label>
                      <div class="input-group">
                      <input type="text" name="time[]" value = '' class="form-control float-right box-shadow" id="reservationtime0">
                      </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                      <label>Type Education</label>
  
                      <div class="input-group">
                      <select class="form-control box-shadow" name="type_education[]">
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
            <?php $i=0;foreach($data_education as $key => $value):  ?>
            <div class="card mb-3 p-3 card-primary">
              <div class="col-12">
                  <div class="form-group">
                      <div class="d-flex justify-content-between">
                        <label>Tiêu đề</label>
                        <button type="button" data-id="{{ $value->id }}" onclick="delete_box(this)" class="btn btn-tool btn-delete-box"><i class="fas fa-times"></i></button>
                      </div>
                      <div class="input-group">
                      <input type="hidden" name="education_id[]" value='{{$value->id}}' class="form-control">
                      <input placeholder="Nhập tiêu đề..." value="{{$value->title}}"  type="text" name="title[]" class="box-shadow form-control float-right">
                      </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                      <label>Date and time range:</label>
  
                      <div class="input-group">
                        <input type="text" name="time[]" value = '{{$value->time}}' class="box-shadow form-control float-right box-shadow" id="reservationtime{{$i}}">
                      </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                      <label>Type Education</label>
  
                      <div class="input-group">>
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
      </div>
    </div>
    <div class="col-md-5 mt-4">
      <div class="card card-infomation h-100 mb-4">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-md-6 mb-3">
              <h6 class="mb-0"><ion-icon name="cube-sharp"></ion-icon> Personal Information</h6>
            </div>
          </div>
        </div>
        <form class="p-0">
          <div class="form-row">
            <div class="form-group">
              <label for="inputPassword4">Full name</label>
              <input type="text" class="form-control box-shadow" id="inputPassword4" placeholder="Full name ...">
            </div>
            <div class="form-group">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control box-shadow" id="inputEmail4" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control box-shadow" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Phone Number</label>
            <input type="text" class="form-control box-shadow " id="inputAddress2" placeholder="Phone number">
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="inputCity">Information</label>
              <input type="text" class="form-control box-shadow" id="inputCity">
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-info">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer class="footer pt-3  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection
@push('js')
<script src={{ asset ("public/users/ckeditor/ckeditor.js")}}></script>
<script src={{ asset ("public/users/dist/js/skill.js")}}></script>
<!-- date-range-picker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<scrip>
<script>
      $('input[type="range"]').change(function(){
          var value = $(this).val();
          $(this).parent('.range').find('label[for="power"]').children('span').text(value);
      })
      $('#skillname').keydown(function(e){
        $('.range>span').remove();
        if (e.which == 13)
        {
          var skillname = $('#skillname').val();
          var length = $('#skillname').val().length;
          if(skillname != '' && length < 20)
          {
            var skill =  '<div class="range">';
            skill += '  <input type="hidden" name="id_skill[]" value="0">'
            skill += '  <label for="power2" class="skillname">'+skillname+'<input type="hidden" value="'+skillname+'" name="skillname[]"></label>';
            skill += '  <input type="range" min=0 max=100 value=50 id="power2" name="process[]">';
            skill += '  <label for="power" class="text-center"><span>50%</span>';
            skill += '    <button type="button" data-id="0" onclick="delete_skill(this)" class="btn btn-tool mb-0 btn-delete-skill">';
            skill += '      <i class="fas fa-times"></i>';
            skill += '    </button></label>';
            skill += '  </label>';
            skill += '</div>';
            $('.main_level').append(skill);
            $('#skillname').val('');
          }
          else
          {
            if(length > 20)
            {
              swal("Skill name không vượt quá 20 kí tự");
              $('#skillname').val('');
            }
            else
            {
              swal("Vui lòng nhập skillname");
            }
          }
          $('input[type="range"]').change(function(){
              var value = $(this).val();
              $(this).parent('.range').find('label[for="power"]').children('span').text(value);
          })
          event.preventDefault();
          return false;
        }
      })
        function delete_skill(e){
          var id_skill = $(e).attr('data-id');
          if(id_skill == 0)
          {
            $(e).parents('.range').remove();
          }
          else
          {
            $.ajax({
              url:'{{ URL::to("deleteSkill") }}',
              type:'POST',
              data:{
                id_skill:id_skill,
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
        }
        // 
    function delete_box(e){
      var id_education = $(e).attr('data-id');
      if(id_education == 0)
      {
        $(e).parents('.card-primary').remove();
      }
      else
      {
        $.ajax({
          url:'{{ URL::to("deleteBoxEducation") }}',
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
    }
    $('.add_education').click(function(){
        var count = 0;
        $('.card-primary').each(function()
        {
            count++;
        });
        var html = '<div class="card p-3 mb-3 card-primary">';
            html +='        <div class="col-12">';
            html +='            <div class="form-group">';
            html +='                <div class="d-flex justify-content-between">';
            html +='                  <label>Tiêu đề</label>';
            html +='                  <button type="button" data-id="0" onclick="delete_box(this)" class="btn btn-tool btn-delete-box"><i class="fas fa-times"></i></button>';
            html +='                </div>';
            html +='                <div class="input-group box-shadow">';
            html +='                <input type="text" placeholder="Nhập tiêu đề..." name="title['+count+']" class="form-control float-right">';
            html +='                <input type="hidden" name="education_id[]" value="0" class="form-control">'
            html +='                </div>';
            html +='            </div>';
            html +='            <div class="form-group">';
            html +='                <label>Date and time range:</label>';
            html +='                <div class="input-group box-shadow">';
            html +='                <input type="text" name="time['+count+']" class="form-control float-right" id="reservationtime'+count+'">';
            html +='                </div>';
            html +='            </div>';
            html +='            <div class="form-group">';
            html +='                <label>Type Education</label>';
            html +='                <div class="input-group box-shadow">';
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
    @if($count_education > 0)
    <?php $i=0;foreach($data_education as $key => $value):  ?>
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