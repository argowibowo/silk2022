@extends('umum_template')

@section('content')

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Antrian Obat</h3>
        <nav class="navbar-light">
          <a class="btn btn-primary" href="{{route('tambahAntrianObat')}}" role="button">Tambah Antrian</a>
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
            <th>ID Rekam Medis</th>
          </tr>
          <?php $no=1; ?>
          @foreach($antrian_obat as $ap)
          <tr>
           <td>{{ $no}}. </td>
           <td>{{ $ap->tanggal}}</td>
           <td>{{ $ap->id_poli}} - {{$ap->nama_poli}}</td>
           <td>{{ $ap->id_rm}}</td>
           <td>
             <a href="{{route('editAntrianObat',$ap->id_antrian_obat)}}"><i class="fa fa-edit"></i></a>
             <a href="{{ route('hapusAntrianObat',$ap->id_antrian_obat)}}" onclick="return confirm('Lanjut Hapus Data?')"><i class="fa fa-trash"></i></a>
           </td>
         </tr>
         @endforeach
       </table>
     </div>
     <!-- /.box -->
   </div>
 </div>
 @endsection
