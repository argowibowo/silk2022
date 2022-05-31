@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title mg-1">Data Pasien SILK 2022</h3>
        </div>
        <div class="box-header with-border">
            {{-- <a class="btn btn-primary" href="tambahrawatjalan" role="button">Pasien Rawat Jalan</a> --}}
             <div class="col-sm-10">
                <select class="form-control" id="position-option" name="position_id">
                    @foreach($data_pasien['DataUser'] as $p)
                        <option value="{{$p['alamat']}}">{{$p['alamat']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <table id="example2" class="table table-bordered table-hover">
            <thead align="center">
                <tr>
                    <th>#</th>
                    <th>NO.RM</th>
                    <th>Nama</th>
                    <th>alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no=1; ?>
            <tbody>
            @foreach ($data_pasien['DataUser'] as $datapasien )
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $datapasien['no_rm']}}</td>
                    <td>{{ $datapasien['nama']}}</td>
                    <td>{{ $datapasien['alamat']}}</td>
                    <td>{{ $datapasien['tgl_lahir']}}</td>
                    <td>{{ $datapasien['jk']}}</td>
                    <td>-</td>
                </tr>
            @endforeach
        </table>
        </div>
    <!-- /.box -->
    </div>
</div>
@endsection
