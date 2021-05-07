@extends('layout.main')

@section('page_name','Toko Spare Part | User Admin')

@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">User Admin</h1>
    <hr class="my-4">     
    <a href="{{url('admin/useradmin/add')}}" class="btn btn-primary">
    Create</a>  
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
  <!-- /.content-header -->
</div>
 <!-- Main content -->
 <section class="content">
 @if(session('message'))
<div class="alert alert-warning{{session('type')}}">{{session('message')}}</div>
@endif
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data User Admin</h3>

    <div class="card-tools">
    <form action="{{url('admin/useradmin/index')}}" method="GET">
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="search" class="form-control float-right" placeholder="Search"  value="{{request('search')}}">
        <div class="input-group-append">
          <button type="submit" class="btn btn-default">
          <i class="fas fa-search"></i>
          </button>
        </div>
      </div>  
      </form>
    </div>
  </div>
  <div class="card-body p-0">
  
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    Id
                </th>
                <th style="width: 20%">
                    Nama
                </th>
                <th style="width: 30%">
                    Email
                </th>
              
            </tr>
        </thead>
        <tbody>
        @foreach($useradmin as $u)
        <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        
        <td>
        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{url('admin/useradmin/detail/' .$u->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              Detail
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('admin/useradmin/edit/' .$u->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/useradmin/delete/' .$u->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
        </td>
        </tr>
         @endforeach
                </tbody>
          </table>
          {!! $useradmin->links() !!}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
@endsection