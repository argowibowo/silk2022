@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Check Up Pasien SILK 2022</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="checkup_tambah" role="button">Tambah Data Check Up Pasien</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover">
                  <thead align="center">
                  <tr>
                    <th >No RM</th>
                    <th>Nama</th>
                    <th>Poli</th>
                    <th>Antrian</th>
                    <th>Aksi</th>
                  </tr>
                  @foreach($getAlldata as $p)
                  <tr>
            <td>{{ $p->no_rm}}</td>
            <td>{{ $p->nama}}</td>
            <td>{{ $p->nama_poli}}</td>
            <td>{{ $p->id_antrian_poli}}</td>
			<td>
				<a href="{{ url('/checkup_edit/'.$p->id_antrian_poli) }}">Edit</a>
				|
				<a href="/checkup_hapus/{{ $p->id_antrian_poli }}>Hapus</a>
			</td>
		</tr>
		@endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection
