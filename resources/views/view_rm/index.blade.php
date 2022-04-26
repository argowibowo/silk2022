@extends('umum_template')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header with-border">
          <a href="{{ url('rekam_medis/tambah') }}" class="btn btn-primary">Tambah Rekam Medis</a>
        </div>

        <div class="box-header with-border">
          <form action="/rekam_medis/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari No RM .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
          </form>
        </div>

        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>No RM</th>
                    <th>Nama Pasien</th>
                    <th>Tindakan</th>
                    <th>Poli</th>
                    <th>Dokter</th>
                    <th>Tanggal Priksa</th>
                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection