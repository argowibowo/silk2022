@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Obat SILK 2022</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="obat_tambah" role="button">Tambah Data Obat</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover" >
                  <thead align="center">
                  <tr>
                    <th>Nama Obat</th>
                    <th>Id Obat</th>
                    <th>Jenis Obat</th>
                    </tr>
                  @foreach($obat as $o)
		<tr>
      <td>{{ $o->nama_obat}}</td>
			<td>{{ $o->id}}</td>
			<td>{{ $o->jenis_obat}}</td>
			<td>
				<a href="/obat_edit/{{ $d->id }}">Edit</a>
				|
				<a href="/obat_delete/{{ $d->id}}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection