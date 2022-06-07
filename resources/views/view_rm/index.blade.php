@extends('umum_template')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-header with-border">
          <a href="{{ url('rekam_medis/tambah') }}" class="btn btn-primary">Tambah Rekam Medis</a>
          <a href="javascript:window.print();" class="btn btn-info">Print</a>
        </div>

        <div class="box-header with-border">
          <form action="{{ url('rekam_medis/cari') }}" method="GET">
            <input type="text" name="cari" placeholder="Cari No RM .." value="{{ old('cari') }}">
            <input type="submit" value="cari">
          </form>
        </div>

        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                  <th>id</th>
                    <th>No RM</th>
                    <th>Nama Pasien</th>
                    <th>Tindakan</th>
                    <th>Dokter</th>
                    <th>Poli</th>
                    <th>Tanggal Priksa</th>
                    <th>Aksi</th>
                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  
                @foreach($RekamMedis as $r)
		            <tr>
                  <td>{{ $r->id}}</td>
                  <td>{{ $r->no_rm}}</td>
                  <td>{{ $r->nama}}</td>
                  <td>{{ $r->tindakan}}</td>
                  <td>{{ $r->nama_dokter}}</td>
                  <td>{{ $r->nama_poli}}</td>
                  <td>{{ $r->tanggal}}</td>
                  
           
                  <td>
                    <a href="{{ url('/rekam_medis/detail/'.$r->id) }}">Details</a>
                    <a href="hapus_rm/{{ $r->id }}">Hapus</a>
                  </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection