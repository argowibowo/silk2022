@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pasien Baru</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
      <form action="/createpasien" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="alamat" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nik" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="telp" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ibu Kandung</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="ibu_kandung" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="gol_darah" style=width:100px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword" name="tgl_lahir" style=width:160px>
                            
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="jk" style=width:200px>
                        </div></div></div>
                        
                <div class="card-footer" style="float-right">
                    <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection