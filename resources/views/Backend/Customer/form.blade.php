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
              <form action="{{url('admin/customer/save')}}" method="POST">
              {!! csrf_field() !!}

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Nama</label>
                <input type="text" id="inputClientCompany" class="form-control" name="name" value="{{ isset($customers) ? $customers->name : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">No. Telepon</label>
                <input type="number" id="inputProjectLeader" class="form-control" name="phone" value="{{ isset($customers) ? $customers->phone : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{route('customerIndex')}}" class="btn btn-secondary">Cancel</a>
          
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