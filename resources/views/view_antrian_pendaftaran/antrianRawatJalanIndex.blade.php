@extends('umum_template')

@section('content')

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Antrian Pendaftaran Rawat Jalan</h3>
        <nav class="navbar-light">
          <a class="btn btn-primary" href="{{route('tambahAntrianRawatJalan')}}" role="button">Tambah Antrian</a>
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
            <th>No.</th>
            <th>No Antrian</th>
            <th>ID Poli</th>
            <th>Pasien</th>
            <th>Tanggal</th>
            <th>Action</th>
          </tr>
          <?php $no=1; ?>
          @foreach($antrian_pendaftaran as $apd)
          <tr>
            <td>{{$no}}. </td>
            <td>{{ $apd->no_antrian}}</td>
            <td>{{ $apd->id_poli}} - {{$apd->nama_poli}}</td>
            <td>{{ $apd->nama}}</td>
            <td>{{ $apd->tanggal}}</td>
            <td>
              <a href="{{ route('editAntrianRawatJalan',$apd->id_antrian_pendaftaran)}}"><i class="fa fa-edit"></i></a>
              <a href="{{ route('hapusAntrianRawatJalan',$apd->id_antrian_pendaftaran)}}" onclick="return confirm('Lanjut untuk Hapus Data?')"><i class="fa fa-trash"></i></a>
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