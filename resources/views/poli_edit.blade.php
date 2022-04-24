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
            @foreach($poli as $p)
            <form action="{{url('poli_update',$p->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <div class="mb-3 row">
                            <div class="col-sm-10">
                            <label>Nama Poli</label>
                            <input type="text" class="form-control" style=width:500px name="nama_poli" 
                            placeholder="Nama Poli" value="{{$p->nama_poli}}">
                        </div></div></div>  
                                   
                <div class="card-footer" style="float-right">
                    <a class="btn btn-danger" href="{{url('poli_dash')}}" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
            @endforeach
    </div>
</div>
@endsection                   