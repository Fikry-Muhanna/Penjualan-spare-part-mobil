@extends('layout.main')

@section('page_name','Toko Spare Part | Sparepart')
@section('content')

    <!-- Main content -->
    <a class="btn btn-danger btn-sm" href="{{url('admin/sparepart/index')}}">
    Kembali
    </a>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <form action="{{url('admin/sparepart/save')}}" method="POST">
              {!! csrf_field() !!}
              <input type='hidden' name='id' value='{{ isset($id) ? $id:null }}'/>
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Data Sparepart</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Nama</label>
                    <input type="text" id="inputName" class="form-control" name="name" value="{{ isset($msparepart) ? $msparepart->name : null }}" required>
                  </div>
                  <div class="form-group">
                    <label> Kategori </label>
                    <select name="m_categories_id" class="form-control" value='{{ isset($mcategories) ? $mcategories:null }}'>
                      <option value="">- Pilih -</option>
                      @foreach ($mcategories as $kategori)
                      <option {{ isset($msparepart) && $msparepart->m_categories_id == $kategori->id ? "selected":"" }} value="{{$kategori->id}}">{{$kategori->name}}</option>
                      @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="inputPrice">Harga</label>
                    <input type="number" id="inputPrice" class="form-control" name="price" value="{{ isset($msparepart) ? $msparepart->price : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Deskripsi</label>
                    <input type="text" id="inputDescription" class="form-control" name="description" value="{{ isset($msparepart) ? $msparepart->description : null }}" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="row">
                    <div class="col-12">
                    <a href="{{url('admin/sparepart/index')}}" class="btn btn-secondary">Cancel</a>
              
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