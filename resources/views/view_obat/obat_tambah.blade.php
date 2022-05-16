@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Obat</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
      <form action="{{url('createcheckup')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Obat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode Obat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="kode" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-2 col-form-label">Jenis Obat</label>
                        <div class="col-sm-10">
                            <select name="gol_darah" class="form-control select2bs4" style="width: 30%;">
                                <option selected="selected">Pilih Jenis Obat</option>
                                <option>Obat Cair</option>
                                <option>Obat Tablet</option>
                            </select>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Stok Obat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="stok" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="tanggal" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Expired Date</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="exp" style=width:500px>
                        </div></div></div>
                <div class="card-footer" style="float-right">
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                    <a class="btn btn-danger" href="{{url('tambahobat')}}" role="button">Batal</a>
                </div>
            </form>
    </div>
</div>
@endsection