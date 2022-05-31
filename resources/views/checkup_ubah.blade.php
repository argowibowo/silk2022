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
            @foreach($antrian_poli as $a)     
      <form action="{{ url('checkup_update',$a->id) }}" method="post">
      @endforeach
                        {{ csrf_field() }}
                        @foreach($antrian_poli as $a)
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">No RM</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="no_rm" value="{{ $a->no_rm}}" style=width:500px disabled>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama" value="{{ $a->nama}}" style=width:500px disabled>
                        </div></div></div>
                        @endforeach
                        <div class="form-group">
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                            <select name="id_poli" class="form-control select2bs4"  style="width: 30%;">
                            @foreach($antrian_poli as $an)
                            <option value="{{$an->id}}" selected="selected">{{$an->nama_poli}}</option>
                            @endforeach
                            @foreach($poli as $p)
                            <option value="{{$p->id}}">{{$p->nama_poli}}</option>
                            @endforeach
                            </select>
                        </div></div></div>
                <div class="card-footer" style="float-right">
                <a class="btn btn-danger" href="{{url('checkup')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection
