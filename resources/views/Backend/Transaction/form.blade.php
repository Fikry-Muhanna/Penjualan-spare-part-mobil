@extends('layout.main')

@section('page_name','Toko Spare Part | Transaksi')
@section('content')

    <!-- Main content -->
    <a class="btn btn-danger btn-sm" href="{{url('admin/transaksi/index')}}">
  Kembali
  </a>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <form action="{{url('admin/transaksi/save')}}" method="POST">
        {!! csrf_field() !!}
        <input type='hidden' name='id' value='{{ isset($id) ? $id:null }}'/>
          <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Data Transaksi</h3>
              <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputTransNo">No Transaksi</label>
                <input type="number" id="inputTransNo" class="form-control" name="trans_no" value="{{ isset($transactions) ? $transactions->trans_no : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputCustomerId">Id Customer</label>
                <input type="number" id="inputCustomerId" class="form-control" name="customers_id" value="{{ isset($transactions) ? $transactions->customers_id : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputTotalPrice">Total Harga</label>
                <input type="number" id="inputTotalPrice" class="form-control" name="grand_total" value="{{ isset($transactions) ? $transactions->grand_total : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputCreatedBy">Dibuat Oleh</label>
                <input type="text" id="inputCreatedBy" class="form-control" name="created_by" value="{{ isset($transactions) ? $transactions->created_by : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/transaksi/index')}}" class="btn btn-secondary">Cancel</a>
                 <input type="submit" value="Save" class="btn btn-success float-right-mb-3">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </form>
          <!-- /.card -->
        </div>
      </div>
     
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection