@extends('layout.main')

@section('page_name','Toko Spare Part | Detail Transaksi')
@section('content')

    <!-- Main content -->
    <a class="btn btn-danger btn-sm" href="{{url('admin/transaksi/index')}}">
  Kembali
  </a>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Transaksi</h3>
              <form action="{{url('admin/transdetail/save')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputTransId">Id Transaksi</label>
                <input type="number" id="inputTransId" class="form-control" name="transactions_id" value="{{ isset($transactiondetail) ? $transactiondetail->transactions_id : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputSparepartId">Id Sparepart</label>
                <input type="number" id="inputSparepartId" class="form-control" name="m_sparepart_id" value="{{ isset($transactiondetail) ? $transactiondetail->m_sparepart_id : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputSparepartName">Nama Sparepart</label>
                <input type="text" id="inputSparepartName" class="form-control" name="sparepart_name" value="{{ isset($transactiondetail) ? $transactiondetail->sparepart_name : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputSparepartPrice">Harga Sparepart</label>
                <input type="number" id="inputSparepartPrice" class="form-control" name="sparepart_price" value="{{ isset($transactiondetail) ? $transactiondetail->sparepart_price : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputQuantity">Jumlah</label>
                <input type="number" id="inputQuantity" class="form-control" name="quantity" value="{{ isset($transactiondetail) ? $transactiondetail->quantity : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputTotal">Total</label>
                <input type="number" id="inputTotal" class="form-control" name="total" value="{{ isset($transactiondetail) ? $transactiondetail->total : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/transdetail/index')}}" class="btn btn-secondary">Cancel</a>
          
            <input type="submit" value="Save" class="btn btn-success float-right-mb-3">
            </div>
          
            </div>
            </div>
          </div>
          <!-- /.card -->
       
          <!-- /.card -->
        </div>
      </div>
     
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection