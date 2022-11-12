@extends('adminLayout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Manager</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{ URL::to('/admin')}}>Home</a></li>
              <li class="breadcrumb-item active">Manager</li>
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
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="d-flex justify-content-end mb-2">
                  <a href={{ URL::to('admin/addUser') }} class="btn btn-info">Add Users</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Avatar</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Sex</th>
                    <th>Role</th>
                    <th>Option  </th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($manager as $key => $value)
                  <tr>
                    <td>{{ $value->id }}</td>
                    <td>
                      
                      @if(file_exists( public_path().'/upload/'.$value->avatar ) && $value->avatar != '' )
                        <img class="img-circle" style="height:50px" src="{{Auth::user()->account_id}}" alt="">
                      @else
                        <img class="img-circle" style="height:50px" src={{ asset('public/admin/dist/img/default-150x150.png') }} alt="">
                      @endif
                    </td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                      @if($value->sex == 1)
                        Nam
                      @else
                        Nữ
                      @endif
                    </td>
                    <td>
                      @if($value->level == 1)
                        Admin
                      @elseif($value->level == 2)
                        Manager
                      @else
                        Customer
                      @endif
                    </td>
                    <td>
                      <button type="button" data-toggle="modal" onclick="delete_user({{ $value->id }})" data-target="#exampleModal" class="btn btn-danger">Delete</button>
                      <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn có chắc muốn xóa tài khoản này?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger btn-delete-user">Delete</button>
      </div>
    </div>
  </div>
</div>
{{ $manager->fragment('foo')->links() }}
@endsection