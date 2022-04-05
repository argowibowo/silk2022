@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Pasien Rawat Jalan</h3>
            </div>
            <!-- form start -->
            <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Pilih Pasien Sesuai dengan antrian</h5>
                    <div class="table-responsive">
                        <table class="mb-0 table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NO.RM</th>
                                    <th>Nama</th>
                                    <th>Kunjungan</th>
                                    <th>Dokter</th>
                                    <th>Tindakan</th>
                                    <th>Resep Obat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no=1; ?>
                            <tbody>
                                @foreach ($data as $pasien )
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $pasien->id_rm }}</td>
                                    <td>{{ $pasien->nama }}</td>
                                    <td>-</td>
                                    <td>{{ $pasien->nama_dokter}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.box -->
    </div>
</div>
@endsection
