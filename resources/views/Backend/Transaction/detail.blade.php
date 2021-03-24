@extends('layout.main')

@section('page_name','Toko Spare Part | Transaksi')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Transaksi</h3>
              <form action="{{url('admin/transaksi/detail')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> No. Transaksi </strong>

            <p class="text-muted"> {{ $trans_no }} </p>

            <hr>

            <strong><i class="fas fa-th mr-1"></i> Id Customer </strong>

            <p class="text-muted">{{ $customers_id }}</p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Total </strong>

            <p class="text-muted"> {{ $grand_total }} </p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Dibuat Oleh </strong>

            <p class="text-muted"> {{ $created_by }} </p>



            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/transaksi/index')}}" class="btn btn-secondary">Kembali</a>
          
            
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