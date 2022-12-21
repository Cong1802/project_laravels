@extends('AdminLayout')
@section('content')
<style>
    table tr td
    {
        vertical-align: inherit;
    }
</style>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="mb-3">
            <select onchange="filter_type_pitch(this)" name="category" required>
              <option selected disabled >Nền tảng MXH</option>
              @foreach ($categories as $key => $category)
              <option @if($min_id == $category->category_id) selected @endif value="{{ $category->category_id }}" >{{ $category->category_name }}</option>
              @endforeach
            </select>
          </div>
            <div class="">
              <div class="clearfix"></div>
              <div class="row" style="display: block;">
                <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                    <div class="x_content">
                      <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th class="column-title">STT</th>
                              <th class="column-title">Channel</th>
                              <th class="column-title">File</th>
                              <th class="column-title">Category</th>
                              <th class="column-title">Time</th>
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              </th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                            </tr>
                          </thead>
  
                          <tbody>
                            <?php $i=1;foreach($dataa as $key => $value): ?>
                            <tr class="even pointer">
                              <td style="vertical-align: middle;">{{ $i }}</td>
                              <td style="vertical-align: middle;">{{ $value ->channel_name }}</td>
                              <td style="vertical-align: middle">{{ $value->file }}</td>
                              <td style="vertical-align: middle">{{ $value->category_name }}</td>
                              <td style="vertical-align: middle;">{{ date ('H:i d/m/Y',$value->created_at); }}</td>
                              <td class=" last" style="vertical-align: middle;">
                                <button type="button" class="btn btn-danger" onclick="location.href='{{ URL::to('/Edit-Channel/'.$value->id) }}'">Edit</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-info remove_news" data-id="{{$value->id}}">Remove</button>
                              </td>
                            </tr>
                            <?php $i++;endforeach ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->  
@endsection
@push('js')
    <script>
        $('.remove_news').click(function remove_news()
        {
            var id_news = $(this).attr('data-id');
            $.ajax({
                url:'{{ URL::to("remove_channel") }}',
                type:'POST',
                data:{
                    id_news:id_news,
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
        })
        function filter_type_pitch(e){
          var social = $(e).val();
          var url = location.pathname+'?social='+social;
          location.href=url;
        }
    </script>
@endpush