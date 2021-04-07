@extends('layout.main')

@section('page_name','Toko Spare Part | User Admin')
@section('content')

    <!-- Main content -->
    <a class="btn btn-danger btn-sm" href="{{url('admin/transaksi/index')}}">
  Kembali
  </a>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <form action="{{url('admin/useradmin/save')}}" method="POST">
          {!! csrf_field() !!}
          <input type='hidden' name='id' value='{{ isset($id) ? $id:null }}'/>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data User</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputUserName">Nama</label>
                <input type="text" id="inputUserName" class="form-control" name="name" value="{{ isset($useradmin) ? $useradmin->name : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" id="inputEmail" class="form-control" name="email" value="{{ isset($useradmin) ? $useradmin->email : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="text" id="inputPassword" class="form-control" name="password" value="{{ isset($useradmin) ? $useradmin->password : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/useradmin/index')}}" class="btn btn-secondary">Cancel</a>
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