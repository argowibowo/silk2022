
@extends('umum_template')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pasien Baru</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="container-fluid">
      <form action="{{url('rekam_medis/simpan')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Pasien</label>
                          <div class="col-sm-10">

                            <select class="form-select" name="psn_id" >
                                    @foreach ($pasien as $psn)
                                    @if (old('psn_id')==$psn->no_rm)
                                        <option value="{{ $psn->no_rm }}" selected>{{ $psn->psn_id }}</option>
                                        @else
                                        <option value="{{ $psn->no_rm }}">{{ $psn->no_rm }} : {{ $psn->nama }}</option>
                                    @endif
                                    @endforeach
                            </select>

                          </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tindakan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="tindakan" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Dokter</label>
                          <div class="col-sm-10">
                          <select class="form-select" name="dkr_id" >
                                    @foreach ($dokter as $dkr)
                                    @if (old('dkr_id')==$dkr->id)
                                        <option value="{{ $dkr->id }}" selected>{{ $dkr->dkr_id }}</option>
                                        @else
                                        <option value="{{ $dkr->id }}">{{ $dkr->nama_dokter }}</option>
                                    @endif
                                    @endforeach
                            </select>
                          </div></div></div>
                        <div class="form-group">
                          <div class="mb-3 mt-3 row">
                              <label class="col-sm-2 col-form-label">Poli</label>
                          <div class="col-sm-10">
                          <select class="form-select" name="pli_id" >
                                    @foreach ($poli as $pli)
                                    @if (old('pli_id')==$pli->id)
                                        <option value="{{ $pli->id }}" selected>{{ $pli->pli_id }}</option>
                                        @else
                                        <option value="{{ $pli->id }}">{{ $pli->nama_poli }}</option>
                                    @endif
                                    @endforeach
                            </select>
                          </div></div></div>

                        

                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Berobat</label>
                            <div class="col-sm-10">
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="tanggal" style=width:160px>

                        </div></div></div>
                        

                        
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('rekam_medis')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>

@endsection