<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{empty(Session::get('avatar'))?asset('/lte/dist/img/user2-160x160.jpg'):Session::get('avatar')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Session::get('name')}}</p>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" {{Request::is('adm/*')? 'style=display:block' : ''}}>
          <li><a href="{{ url('pasienindex') }}"><i class="fa fa-users"></i> <span>Data Pasien</span></a></li>
          <li><a href="{{ url('dokterindex') }}"><i class="fa fa-users"></i> <span>Data Dokter</span></a></li>
          <li><a href="{{ url('obatindex') }}"><i class="fa fa-users"></i> <span>Data Obat</span></a></li>
          <li><a href="{{ url('poli_dash') }}"><i class="fa fa-hospital-o"></i> <span>Data Poli</span></a></li>
        </ul>
      </li>
      
      <li><a href="{{ url('transaksiobatindex') }}"><i class="fa fa-users"></i> <span>Transaksi Obat</span></a></li>
      
      <li><a href="{{ url('rekam_medis') }}"><i class="fa fa-file-text" ></i> <span>Rekam Medis</span></a></li>
      <li><a href="{{ url('dashrawatjalan') }}"><i class="fa fa-heartbeat" ></i> <span>Rawat Jalan</span></a></li>
      <li><a href="{{ url('checkup') }}"><i class="fa fa-heartbeat" ></i> <span>Check Up Pasien </span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
