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
            <div class="card-body">
            @foreach($pasien as $p)
      <form action="{{ url('checkup_edit',$p->no_rm) }}" method="post">
                        {{ csrf_field() }}

                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Rekam Medis</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="no_rm" value="{{ $p->no_rm}}" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" value="{{ $p->nama}}" style=width:500px>
                        </div></div></div>
                        <div class="form-group">
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                            <select name="gol_darah" class="form-control select2bs4"  style="width: 30%;">
                                <option selected="selected">{{ $p->gol_darah }}</option>
                                <option>Poli Ibu dan Anak</option>
                                <option>Poli Kandungan</option>
                                <option>Poli Jantung</option>
                            </select>
                        </div></div></div>
                       
                <div class="card-footer" style="float-right">
                <a class="btn btn-danger" href="{{url('pasienindex')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
            @endforeach
    </div>
</div>
@endsection