@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Dokter Edit</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
            @foreach($dokter as $d)
            <form action="{{url('dokter_update',$d->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <div class="mb-3 row">
                            <div class="col-sm-10">
                            <label>Nama Dokter</label>
                            <input type="text" class="form-control" style=width:500px name="nama_dokter" 
                            placeholder="Nama Dokter" value="{{$d->nama_dokter}}">
                        </div></div></div>  
                                   
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('dokterindex')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
            @endforeach
    </div>
</div>
@endsection                   