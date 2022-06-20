@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Antrian Obat</h3>

      </div>
      <div class="card card-primary card-outline">
        <div class="card-body">
            <form action="{{route('createAntrianObat')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:160px>
                    </div></div></div>  

                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">ID Poli</label>
                            <div class="col-sm-10">
                                <select class="form-control" style=width:500px name="id_poli">
                                    @foreach($poli as $pl)
                                    <option value="{{$pl->id}}">{{$pl->nama_poli}}</option>
                                    @endforeach
                                </select>
                            </div></div></div>

                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">ID Rekam Medis</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" style="width: 500px;" name="id_rm">
                                            @foreach($rekam_medis as $rm)
                                            <option value="{{$rm->id_rm}}">{{$rm->id_rm}}</option>
                                            @endforeach
                                        </select>
                                    </div></div></div>

                                    <div class="card-footer" style="float-right">
                                        <a class="btn btn-danger" href="{{url('antrianObatIndex')}}" role="button">Batal</a>
                                        <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endsection
