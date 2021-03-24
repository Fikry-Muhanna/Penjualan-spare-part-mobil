@extends('layout.main')

@section('page_name','Toko Spare Part | Detail Transaksi')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Detail Transaksi</h3>
              <form action="{{url('admin/transdetail/detail')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Id Transaksi </strong>

            <p class="text-muted"> {{ $transactions_id }} </p>

            <hr>

            <strong><i class="fas fa-th mr-1"></i> Id Sparepart </strong>

            <p class="text-muted">{{ $m_sparepart_id }}</p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Nama Sparepart </strong>

            <p class="text-muted"> {{ $sparepart_name }} </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Harga Sparepart </strong>

            <p class="text-muted"> {{ $sparepart_price }} </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Jumlah </strong>

            <p class="text-muted"> {{ $quantity }} </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Total </strong>

            <p class="text-muted"> {{ $total }} </p>

            <hr>


            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/transdetail/index')}}" class="btn btn-secondary">Kembali</a>
          
            
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