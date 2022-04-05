@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Dokter SILK 2022</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="dokter_tambah" role="button">Tambah Data Dokter</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover" >
                  <thead align="center">
                  <tr>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Action</th>
                    </tr>
                  @foreach($dokter as $d)
		<tr>
			<td>{{ $d->id}}</td>
			<td>{{ $d->nama_dokter}}</td>
			<td>
				<a href="/dokter/edit/{{ $d->id }}">Edit</a>
				|
				<a href="/dokter/hapus/{{ $d->id}}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection