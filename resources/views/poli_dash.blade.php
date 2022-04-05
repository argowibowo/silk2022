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
                <a class="btn btn-primary" href="poli_tambah" role="button">Tambah Data Poli</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover" >
                  <thead align="center">
                  <tr>
                    <th>ID Poli</th>
                    <th>Nama Poli</th>
                    <th>Action</th>
                    </tr>
                  @foreach($poli as $po)
		<tr>
			<td>{{ $po->id}}</td>
			<td>{{ $po->nama_poli}}</td>
			<td>
				<a href="/poli_edit/{{ $po->id }}">Edit</a>
				|
				<a href="/poli_delete/{{ $po->id}}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection