@extends('layout.main')

@section('page_name','Toko Spare Part | Kategori')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Kategori</h3>
              <form action="{{url('admin/kategori/detail')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Nama </strong>

            <p class="text-muted"> {{ $name }} </p>


            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/kategori/index')}}" class="btn btn-secondary">Kembali</a>
          
            
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