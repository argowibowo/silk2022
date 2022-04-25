@extends('umum_template')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 class="box-title">Transakasi Obat</h3>
        </div>

        <div class="box-header with-border">
          <form action="/id_transaksi/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Id Transaksi .." value=" ">
            <input type="submit" value="CARI">
          </form>
        </div>

        <div class="table-responsive col-lg-11 mb-5">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Id Rekam Medis</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Jumlah</th>              
              </tr>
            </thead>
            <tbody>
        
               
             </tbody>
          </table>
        </div>
        <!-- form start -->
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection