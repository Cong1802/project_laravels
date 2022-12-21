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
                              <th class="column-title">Danh mục</th>
                              <th style="width:200px" class="column-title no-link last"><span class="nobr">Action</span>
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
                              <td style="vertical-align: middle;">{{ $value ->category_name }}</td>
                              <td class=" last" style="vertical-align: middle;">
                                <button type="button" class="btn btn-danger" onclick="location.href='{{ URL::to('/Edit-Category/'.$value->category_id) }}'">Edit</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-info remove_news" data-id="{{$value->category_id}}">Remove</button>
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
            var id_category = $(this).attr('data-id');
            $.ajax({
                url:'{{ URL::to("remove_category") }}',
                type:'POST',
                data:{
                  id_category:id_category,
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
    </script>
@endpush