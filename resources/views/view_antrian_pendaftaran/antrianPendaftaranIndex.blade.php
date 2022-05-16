@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Antrian Pendaftaran</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="tambahAntrianPendaftaran" role="button">Tambah Antrian</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover" >
                  <thead align="center">
                  <tr>
                    <th>ID Antrian</th>
                    <th>Tanggal</th>
                    </tr>
                  @foreach($antrian_pendaftaran as $apd)
		<tr>
			<td>{{ $apd->id_antrian_pendaftaran}}</td>
			<td>{{ $apd->tanggal}}</td>
			<td>
				<a href="/hapusAntrianPendaftaran/{{ $apd->id_antrian_pendaftaran}}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection