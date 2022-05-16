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
      <form action="{{url('createcheckup')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Rekam Medis</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="alamat" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                            <select name="gol_darah" class="form-control select2bs4" style="width: 30%;">
                                <option selected="selected">Pilih Poli</option>
                                <option>Poli Ibu dan Anak</option>
                                <option>Poli Kandungan</option>
                                <option>Poli Jantung</option>
                            </select>
                        </div></div></div>
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('checkup')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection