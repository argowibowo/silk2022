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
         @if(session('gagal'))
            <div class="alert alert-danger" role="alert">
                {{session('gagal')}}
                <button type="button" class="close" data-dismiss="alert">×</button> 
            </div>
        @endif
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('createcheckup')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-2 col-form-label">No Rekam Medis</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_rm" name="no_rm" style=width:500px required>
                            
                        </div></div></div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" name="tanggal" style=width:180px class="form-control
                                    @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}" required>
                                    @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group">
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                            <select name="id_poli" class="form-control select2bs4" style="width: 30%;" required>
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
            <!-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
            <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
            <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
           <script type="text/javascript"> $("#no_rm").focusout(function(e){
                    // alert($(this).val());
                    var no_rm = $(this).val();
                    // var niuser1 = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: "{{route('autocomplete')}}",
                        data: {'no_rm':no_rm},
                        dataType: 'json',
                        success : function(data) {
                            $('#name').val(data.name);
                            
                        },
                        error: function(response) {
                            alert(response.responseJSON.message);
                        }
                    });

                });
                </script> -->
    </div>
</div>
@endsection
