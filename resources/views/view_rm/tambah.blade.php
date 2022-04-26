
@extends('umum_template')

@section('content')
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=rekam-medis" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<div class="container-fluid">
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Rekam Medis</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/rekam-medis/proses/create.php" method="post">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Pasien</label>
                      </div>
                      <div class="col-md-8">
                        <select name="cars" id="cars">
                          <option value="volvo">Edi</option>
                          <option value="saab">Riki</option>
                          <option value="mercedes">Kurni</option>
                          <option value="audi">Aldi</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tindakan</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="keluhan" name="keluhan" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Poli</label>
                      </div>
                      <div class="col-md-8">
                        <select name="cars" id="cars">
                          <option value="volvo">Poli 1</option>
                          <option value="saab">Poli 2</option>
                          <option value="mercedes">Poli 3</option>
                          <option value="audi">Poli 4</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Dokter</label>
                      </div>
                      <div class="col-md-8">
                          <select name="cars" id="cars">
                            <option value="volvo">Riko </option>
                            <option value="saab">Darwin</option>
                            <option value="mercedes">Thomas</option>
                          </select>                    
                      </div>
                    </div>
                  </div>

              

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Periksa</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="tanggal" value="<?= date('Y-m-d'); ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection