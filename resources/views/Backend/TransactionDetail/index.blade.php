@extends('layout.main')

@section('page_name','Toko Spare Part | Detail Transaksi')

@section('content')
 <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Transaksi</h3>

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
  <a class="btn btn-primary btn-sm" href="{{url('admin/transdetail/add')}}">
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
                    Id Transaksi
                </th>
                <th style="width: 30%">
                    Id Sparepart
                </th>
                <th>
                    Nama Sparepart
                </th>
                <th style="width: 8%" class="text-center">
                    Harga Sparepart
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Total Harga
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactiondetail as $d)
        <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->transaction_id }}</td>
        <td>{{ $d->m_sparepart_id }}</td>
        <td>{{ $d->sparepart_name }}</td>
        <td>{{ $d->sparepart_price }}</td>
        <td>{{ $d->quantity }}</td>
        <td>{{ $d->total }}</td>
        <td>
        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{url('admin/transdetail/detail/' .$d->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              Detail
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('admin/transdetail/edit/' .$d->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{url('admin/transdetail/delete/' .$d->id)}}">
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