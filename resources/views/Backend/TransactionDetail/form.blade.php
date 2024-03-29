@extends('layout.main')

@section('page_name','Toko Spare Part | Detail Transaksi')
@section('content')

    <!-- Main content -->
    <a class="btn btn-danger btn-sm" href="{{url('admin/transdetail/index')}}">
    Kembali
    </a>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <form action="{{url('admin/transdetail/save')}}" method="POST">
        {!! csrf_field() !!}
        <input type='hidden' name='id' value='{{ isset($id) ? $id:null }}'/>
          <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Data Detail Transaksi</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>  No Transaksi </label>
                    <select name="transactions_id" class="form-control" >
                      <option value="">- Pilih -</option>
                      @foreach ($transactions as $transaksi)
                      <option {{ isset($transactiondetail) && $transactiondetail->transactions_id == $transaksi->id ? "selected":"" }} value="{{$transaksi->id}}">{{$transaksi->trans_no}}</option>
                      @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label> Nama Sparepart </label>
                    <select name="m_sparepart_id" onchange="changeSparepart(this)" class="form-control" >
                      <option value="">- Pilih -</option>
                      @foreach ($msparepart as $sparepart)
                      <option {{ isset($transactiondetail) && $transactiondetail->m_sparepart_id == $sparepart->id ? "selected":"" }} data-name="{{$sparepart->name}}" data-price="{{$sparepart->price}}" value="{{$sparepart->id}}">{{$sparepart->name}}</option>
                      @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="inputSparepartPrice">Harga Sparepart</label>
                <input type="number" readonly id="inputSparepartPrice" class="form-control" name="sparepart_price" value="{{ isset($transactiondetail) ? $transactiondetail->sparepart_price : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputQuantity">Jumlah</label>
                <input type="number" id="inputQuantity" class="form-control" onchange="changeJumlah(this)" name="quantity" value="{{ isset($transactiondetail) ? $transactiondetail->quantity : null }}" required>
              </div>
              <div class="form-group">
                <label for="inputTotal">Total</label>
                <input type="number" id="inputTotal" readonly class="form-control" name="total" value="{{ isset($transactiondetail) ? $transactiondetail->total : null }}" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row">
                <div class="col-12">
                <a href="{{url('admin/transdetail/index')}}" class="btn btn-secondary">Cancel</a>
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

  <script>
    function changeSparepart(t) {
      let name = $(t).find("option:selected").data("name");
      let price = $(t).find("option:selected").data("price");
      $("#inputSparepartPrice").val(price);
    }
    function changeJumlah(t) {
      let jumlah = $(t).val();
      let price = $("#inputSparepartPrice").val();
      let total = price * jumlah;
      if(price && total) {
        $("#inputTotal").val(total);
      }
    }
  </script>
  
@endsection