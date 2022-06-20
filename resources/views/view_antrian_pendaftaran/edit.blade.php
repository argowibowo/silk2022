@extends('umum_template')

@section('content')
@foreach($antrian_pendaftaran as $apd)
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Ubah Antrian Pendaftaran Rawat Jalan</h3>

      </div>
      <div class="card card-primary card-outline">
        <div class="card-body">
          <form action="{{route('proseseditAntrianRawatJalan',$apd->id_antrian_pendaftaran)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">No Antrian</label>
                <div class="col-sm-10">
                  <input type="input" class="form-control" value="{{$apd->no_antrian}}" disabled="" id="inputPassword" name="" style=width:160px>
                </div></div></div>
                <div class="form-group">
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" value="{{$apd->tanggal}}" id="inputPassword" name="tanggal" style=width:160px>
                    </div></div></div>  

                    <div class="form-group">
                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">ID Poli</label>
                        <div class="col-sm-10">
                          <select class="form-control" style=width:500px name="id_poli">
                            @foreach($poli as $pl)
                            <option <?php if($pl->id==$apd->id_poli){echo "selected";} ?> value="{{$pl->id}}">{{$pl->nama_poli}}</option>
                            @endforeach
                          </select>
                        </div></div></div>

                        <div class="form-group">
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pasien</label>
                            <div class="col-sm-10">
                              <select class="form-control" style="width: 500px;" name="no_rm">
                                @foreach($pasien as $rm)
                                <option <?php if($rm->no_rm==$apd->no_rm){echo "selected";} ?> value="{{$rm->no_rm}}">{{$rm->nama}}</option>
                                @endforeach
                              </select>
                            </div></div></div>

                            <div class="card-footer" style="float-right">
                              <a class="btn btn-danger" href="{{url('antrianRawatJalanIndex')}}" role="button">Batal</a>
                              <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      @endforeach
                      @endsection