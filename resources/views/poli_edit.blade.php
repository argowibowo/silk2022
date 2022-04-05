@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Poli Edit</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('poli_update',$p->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Poli</label>
                        <input type="text" class="form-control" style=width:500px name="nama_poli" 
                        placeholder="Nama Poli" value="{{$p->id}}">
                      </div>
                    </div>                   
                <div class="card-footer" style="float-right">
                    <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection