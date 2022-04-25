@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Pasien Rawat Jalan</h3>
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('createrawatjalan')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-2 col-form-label">No Antrian</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_rm" name="no_rm" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-2 col-form-label">No RM</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="alamat" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jk" class="form-control select2bs4" style="width: 30%;">
                                    <option selected="selected">Pilih Jenis Kelamin</option>
                                    <option>PRIA</option>
                                    <option>WANITA</option>
                                </select>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Poli</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nik" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Dokter</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="telp" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword" name="tgl_lahir" style=width:160px>
                        </div></div></div>
                         <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Diagnosa</label>
                            <div class="col-sm-10">
                            <textarea  class="form-control" id="inputPassword" name="telp" style=width:500px> </textarea>
                        </div></div></div>
                         <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Tindakan</label>
                            <div class="col-sm-10">
                            <textarea  class="form-control" id="inputPassword" name="telp" style=width:500px> </textarea>
                        </div></div></div>
                         <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Obat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="telp" style=width:500px>
                        </div></div></div>
                         <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Resep</label>
                            <div class="col-sm-10">
                            <textarea  class="form-control" id="inputPassword" name="telp" style=width:500px> </textarea>
                        </div></div></div>
                        <div class="form-group">
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('dashrawatjalan')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection

