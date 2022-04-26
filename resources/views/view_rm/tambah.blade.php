
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
            <div class="container-fluid">
      <form action="{{url('createpasien')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Pasien</label>
                          <div class="col-sm-10">
                              <select name="gol_darah" class="form-control select2bs4" style="width: 30%;">
                                  <option selected="selected">Plih Pasien</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>O</option>
                                  <option>AB</option>
                              </select>
                          </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tindakan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nik" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Dokter</label>
                          <div class="col-sm-10">
                              <select name="gol_darah" class="form-control select2bs4" style="width: 30%;">
                                  <option selected="selected">Pilih Dokter</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>O</option>
                                  <option>AB</option>
                              </select>
                          </div></div></div>
                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Poli</label>
                          <div class="col-sm-10">
                              <select name="gol_darah" class="form-control select2bs4" style="width: 30%;">
                                  <option selected="selected">Pilih Poli</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>O</option>
                                  <option>AB</option>
                              </select>
                          </div></div></div>

                        

                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword" name="tgl_lahir" style=width:160px>

                        </div></div></div>
                        

                        
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('pasienindex')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>

@endsection