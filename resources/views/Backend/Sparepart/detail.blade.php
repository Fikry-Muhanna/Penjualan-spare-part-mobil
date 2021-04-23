@extends('layout.main')

@section('page_name','Toko Spare Part | Sparepart')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Sparepart</h3>
              <form action="{{url('admin/sparepart/detail')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Nama Sparepart </strong>

            <p class="text-muted"> {{ $name }} </p>

            <hr>

            <strong><i class="fas fa-th mr-1"></i> Kategori </strong>

            <p class="text-muted">{{ $category_name }}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Harga </strong>
            <p class="text-muted">{{ $price }}</p>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Deskripsi </strong> 
            <p class="text-muted">{{ $description }}</p>

            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/sparepart/index')}}" class="btn btn-secondary">Kembali</a>
          
            
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