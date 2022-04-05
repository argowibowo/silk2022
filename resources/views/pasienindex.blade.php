@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pasien SILK 2022</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="tambahpasien" role="button">Tambah Data Pasien</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover">
                  <thead align="center">
                  <tr>
                    <th>No RM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>NIK</th>
                    <th>No Telepon</th>
                    <th>ibu kandung</th>
                    <th>Golongan Darah</th>
                    <th>tanggal lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                  @foreach($pasien as $p)
		<tr>
			<td>{{ $p->no_rm}}</td>
			<td>{{ $p->nama}}</td>
            <td>{{ $p->alamat}}</td>
            <td>{{ $p->nik}}</td>
            <td>{{ $p->telp}}</td>
            <td>{{ $p->ibu_kandung}}</td>
            <td>{{ $p->gol_darah}}</td>
            <td>{{ $p->tgl_lahir}}</td>
            <td>{{ $p->jk}}</td>
			<td>
				<a href="/ubahpasien/{{ $p->no_rm }}">Edit</a>
				|
				<a href="/hapuspasien/{{ $p->no_rm }}">Hapus</a>
			</td>
		</tr>
		@endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection