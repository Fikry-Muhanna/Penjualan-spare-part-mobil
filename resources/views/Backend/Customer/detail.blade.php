@extends('layout.main')

@section('page_name','Toko Spare Part | Customer')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Customer</h3>
              <form action="{{url('admin/customer/detail')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <strong><i class="fas fa-user mr-1"></i> Nama </strong>

            <p class="text-muted"> {{ $name }} </p>

            <hr>

            <strong><i class="fas fa-th mr-1"></i> No. Telepon </strong>

            <p class="text-muted">{{ $phone }}</p>


            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/customer/index')}}" class="btn btn-secondary">Kembali</a>
          
            
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