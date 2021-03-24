@extends('layout.main')

@section('page_name','Toko Spare Part | Kategori')

@section('content')
 <!-- Main content -->
 <section class="content">

 @if(session('message'))
<div class="alert alert-warning{{session('type')}}">{{session('message')}}</div>
@endif
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Kategori</h3>

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
  <a class="btn btn-primary btn-sm" href="{{url('admin/kategori/add')}}">
  Create
  </a>
  
  
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    Id
                </th>
                <th>
                    Nama
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($mcategories as $cat)
        <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
        
        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{url('admin/kategori/detail/'.$cat->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              Detail
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('admin/kategori/edit/'.$cat->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/kategori/delete/' .$cat->id)}}">
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