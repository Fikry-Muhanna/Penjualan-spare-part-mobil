@extends('layout.main')

@section('page_name','Toko Spare Part | User Admin')

@section('content')
 <!-- Main content -->
 <section class="content">
 @if(session('message'))
<div class="alert alert-warning{{session('type')}}">{{session('message')}}</div>
@endif
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">User Admin</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body p-0">
  <a class="btn btn-primary btn-sm" href="{{url('admin/useradmin/add')}}">
  Create
  </a>
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
                <th>
                    Password
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($useradmin as $u)
        <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->password }}</td>
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
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
@endsection