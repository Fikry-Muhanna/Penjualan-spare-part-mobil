@extends('layout.main')

@section('page_name','Toko Spare Part | Sparepart')

@section('content')
 <!-- Main content -->
 <section class="content">

 @if(session('message'))
<div class="alert alert-warning{{session('type')}}">{{session('message')}}</div>
@endif
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Sparepart</h3>

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
  <a class="btn btn-primary btn-sm" href="{{url('admin/sparepart/add')}}">
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
                <th style="width: 8%" class="text-center">
                    Kategori
                </th>
                <th>
                    Harga
                </th>
                <th>
                    Deskripsi Produk
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($msparepart as $s)
        <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->m_categories_id }}</td>
        <td>{{ $s->price }}</td>
        <td>{{ $s->description }}</td>
        <td>
        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('admin/sparepart/edit/'.$s->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/sparepart/delete' .$s->id)}}">
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