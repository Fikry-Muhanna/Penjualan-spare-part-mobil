@extends('layout.main')

@section('page_name','Toko Spare Part | Transaksi')

@section('content')
 <!-- Main content -->
 <section class="content">

 @if(session('message'))
<div class="alert alert-warning{{session('type')}}">{{session('message')}}</div>
@endif
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Transaksi</h3>

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
  <a class="btn btn-primary btn-sm" href="{{url('admin/transaksi/add')}}">
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
                <th style="width: 15%">
                    No. Transaksi
                </th>
                <th style="width: 8%" class="text-center">
                    Id Customer
                </th>
                <th style="width: 15%">
                    Total Harga
                </th>
                <th style="width: 15%">
                    Dibuat oleh
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $t)
        <tr>
        <td>{{ $t->id }}</td>
        <td>{{ $t->trans_no }}</td>
        <td>{{ $t->customers_id }}</td>
        <td>{{ $t->grand_total }}</td>
        <td>{{ $t->created_by }}</td>
        <td>
        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('admin/transaksi/edit/' .$t->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/transaksi/delete/' .$t->id)}}">
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