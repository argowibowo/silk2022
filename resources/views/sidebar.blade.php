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
      <li><a href="{{ url('tambahpasien') }}"><i class="fa fa-users"></i> <span>Tambah Data Pasien</span></a></li>
      <li><a href="#"><i class="fa fa-calendar"></i> <span>Tambah Data Obat</span></a></li>
      <li><a href="#"><i class="fa fa-list-ol"></i> <span>Tambah Data Poli</span></a></li>
      <li><a href="/rekam_medis"><i class="fa fa-list-ol" ></i> <span>Rekam Medis</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>