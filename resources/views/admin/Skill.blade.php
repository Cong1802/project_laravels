@extends('adminLayout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Skill</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary"> 
                <main id=app>                  
                  <form class="dark col-12" action="{{ URL::to('admin/addSkill') }}">
                    <fieldset>
                      <legend>The Skill</legend>
                      <div class="field">
                        <label for="name2">Skill Name</label>
                        <input type="text" id="skillname" placeholder="Skill name ...">
                      </div>
                      <div class="field">
                        <button type="button" class="addSkill">Add Skill</button>
                      </div>
                      @if($count == 0)
                      <div class="field main_level">
                        <label for="power2">Power Level</label>
                        <div class="range">
                          <input type="hidden" name="id_skill[]" value="0">
                          <label for="power2">Html<input type='hidden' value='Html' name='skillname[]'></label>
                          <input type="range" min=0 max=100 value=50 id="power2" name="process[]">
                          <label for="power"><span>50</span>%
                            <button type="button" data-id="0" class="btn btn-tool btn-delete-skill">
                              <i class="fas fa-times"></i>
                            </button></label>
                        </div>
                      </div>
                      @else
                      <div class="field main_level">
                        <label for="power2">Power Level</label>
                        <?php $i=0;foreach($data as $key => $value):  ?>
                        <div class="range mt-4">
                          <input type="hidden" name="id_skill[{{$i}}]" value="{{ $value->id }}">
                          <label for="power2">{{ $value->skillname }}<input type='hidden' value='Html' name='skillname[{{$i}}]'></label>
                          <input type="range" min=0 max=100 value={{ $value->process }} id="power2" name="process[{{$i}}]">
                          <label for="power" class="d-flex"><span>{{ $value->process }}</span>%
                            <button type="button" data-id="{{ $value->id }}" class="btn btn-tool btn-delete-skill">
                              <i class="fas fa-times"></i>
                            </button></label>
                          </label>
                        </div>
                        <?php $i++;endforeach ?>
                      </div>
                      @endif
                      <div class="field">
                        <label for="color2">Favourite Color</label>
                        <input type="color" id="color2" name="color2" value="#7c42f0">
                      </div>
                    </fieldset>
                      
                    <div class="buttons">
                      <button class="cancel" type="button">Cancel</button>
                      <button class="submit" type="submit">Submit
                          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M20.707 11.293L15.05 5.636a1 1 0 0 0-1.414 1.414l3.95 3.95H4a1 1 0 0 0 0 2h13.586l-3.95 3.95a1 1 0 1 0 1.414 1.414l5.657-5.657a1 1 0 0 0 0-1.414z"/>
                          </svg></button>
                    </div>
                  </form>
                </main>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- form input knob -->

    <!-- /form input knob -->
</div>
@endsection
@push('js')
<script src={{ asset ("public/admin/dist/js/skill.js")}}></script>
<script>
      
      $('input[type="range"]').change(function(){
          var value = $(this).val();
          $(this).parent('.range').find('label[for="power"]').children('span').text(value);
      })
      $('.addSkill').click(function(){
        var skillname = $('#skillname').val();
        var length = $('#skillname').val().length;
        if(skillname != '' && length < 20)
        {
          var skill =  '<div class="range">';
          skill += '  <input type="hidden" name="id_skill[]" value="0">'
          skill += '  <label for="power2">'+skillname+'<input type="hidden" value="'+skillname+'" name="skillname[]"></label>';
          skill += '  <input type="range" min=0 max=100 value=50 id="power2" name="process[]">';
          skill += '  <label for="power" class="d-flex"><span>50%</span>';
          skill += '    <button type="button" data-id="0" class="btn btn-tool btn-delete-skill">';
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
      })

      $('.btn-delete-skill').click(function(){
        var id_skill = $(this).attr('data-id');
        if(id_skill == 0)
        {
          $(this).parents('.range').remove();
        }
        else
        {
          $.ajax({
            url:'{{ URL::to("admin/deleteSkill") }}',
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
        })
</script>
@endpush
