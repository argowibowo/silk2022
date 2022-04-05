@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Poli Baru</h3>
           
      </div>
      <div class="card card-primary card-outline">
            <div class="card-body">
      <form action="/poli_tambah" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Poli</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama_poli" style=width:500px>
                        </div></div></div>                        
                <div class="card-footer" style="float-right">
                    <button type="button" class="btn btn-danger float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
    </div>
</div>
@endsection