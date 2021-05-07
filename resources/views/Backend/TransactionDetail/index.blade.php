@extends('layout.main')

@section('page_name','Toko Spare Part | Detail Transaksi')

@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Detail Transaksi</h1>
    <hr class="my-4">     
    <a href="{{url('admin/transdetail/add')}}" class="btn btn-primary">
    Create</a>  
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
  <!-- /.content-header -->
</div>
 <!-- Main content -->
 <section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Transaksi</h3>

    <div class="card-tools">
    <form action="{{url('admin/transdetail/index')}}" method="GET">
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
                <th>
                    No Transaksi
                </th>
                <th>
                    Nama Sparepart
                </th>
                <th>
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
        <td>{{ $d->transactions_no }}</td>
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
          {!! $transactiondetail->links() !!}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
@endsection