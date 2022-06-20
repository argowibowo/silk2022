@extends('umum_template')

@section('content')

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Antrian Poli</h3>
        <nav class="navbar-light">
          <a class="btn btn-primary" href="{{route('tambahAntrianPoli')}}" role="button">Tambah Antrian</a>
          <br>
          @if(session('add'))
          <h1 class="box-title" style="color: green;"><small><i>Data Antrian berhasil di Tambahkan!</i></small></h1>
          @elseif(session('up'))
          <h1 class="box-title" style="color: green;"><small><i>Data Antrian berhasil di Ubah!</i></small></h1>
          @elseif(session('del'))
          <h1 class="box-title" style="color: red;"><small><i>Data Antrian berhasil di Hapus!</i></small></h1>
          @endif
        </nav>
      </div>
      <table id="example2" class="table table-bordered table-hover" >
        <thead>
          <tr>
            <th>No. </th>
            <th>Tanggal</th>
            <th>ID Poli</th>
            <th>No Rekam Medis</th>
            <th>Action</th>
          </tr>
          <?php $no=1; ?>
          @foreach($antrian_poli as $ap)
          <tr>
           <td>{{ $no}}. </td>
           <td>{{ $ap->tanggal}}</td>
           <td>{{ $ap->id_poli}} - {{ $ap->nama_poli}}</td>
           <td>{{ $ap->no_rm}}</td>
           <td>
            <a href="{{route('editAntrianPoli',$ap->id_antrian_poli)}}"><i class="fa fa-edit"></i></a>
            <a href="{{ route('hapusAntrianPoli',$ap->id_antrian_poli)}}" onclick="return confirm('Lanjut Hapus Data?')"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <?php $no++ ?>
        @endforeach
      </table>
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection