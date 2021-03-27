@extends('layout.main')

@section('page_name','Toko Spare Part | Kategori')
@section('content')

    <!-- Main content -->
    <div class="content-header">
    <a href="{{url('admin/kategori/index')}}" class="btn btn-danger">
    Kembali</a>  
    </div>
  
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Kategori Sparepart</h3>
              <form action="{{url('admin/kategori/save')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama</label>
                <input type="text" id="inputName" class="form-control" name="name" value="{{ isset($mcategories) ? $mcategories->name : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/kategori/index')}}" class="btn btn-secondary">Cancel</a>
          
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