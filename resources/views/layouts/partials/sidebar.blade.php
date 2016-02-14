<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">SIM</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>DIKLAT</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> DIKLAT TA <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="diklatta"><i class="fa fa-circle-o"></i>Daftar Diklat TA</a></li>
                    <li><a href="panduan"><i class="fa fa-circle-o"></i>Panduan Diklat</a></li>
                    <li><a href="kurikulumta"><i class="fa fa-circle-o"></i>Kurikulum Diklat</a></li>
                    <li><a href="jadwalta"><i class="fa fa-circle-o"></i>Jadwal Diklat</a></li>
                    <li><a href="pengajar"><i class="fa fa-circle-o"></i>Daftar Pengajar</a></li>
                    <li><a href="bahan"><i class="fa fa-circle-o"></i>Bahan Ajar</a></li>
                    <li><a href="sertifikatta"><i class="fa fa-circle-o"></i>Sertifikat</a></li>
                    <li><a href="peserta"><i class="fa fa-circle-o"></i>Peserta</a></li>
                  </ul>
                </li>
                <li>
                <a href="#"><i class="fa fa-circle-o"></i> Diklat TT<i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="diklattt"><i class="fa fa-circle-o"></i>Daftar Diklat TT</a></li>
                    <li><a href="panduantt"><i class="fa fa-circle-o"></i>Panduan Diklat</a></li>
                    <li><a href="kurikulumtt"><i class="fa fa-circle-o"></i>Kurikulum Diklat</a></li>
                    <li><a href="jadwaltt"><i class="fa fa-circle-o"></i>Jadwal Diklat</a></li>
                    <li><a href="pengajartt"><i class="fa fa-circle-o"></i>Daftar Pengajar</a></li>
                    <li><a href="bahantt"><i class="fa fa-circle-o"></i>Bahan Ajar</a></li>
                    <li><a href="sertifikattt"><i class="fa fa-circle-o"></i>Sertifikat</a></li>
                    <li><a href="pesertatt"><i class="fa fa-circle-o"></i>Peserta</a></li>
                </ul>
            </li>
        </ul>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Surat-Surat</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('surat') }}"><i class="fa fa-circle-o"></i> Surat Diklat TA</a></li>
                <li><a href="{{ url('surattt') }}"><i class="fa fa-circle-o"></i> Surat Diklat TT</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>TOR</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('tor') }}"><i class="fa fa-circle-o"></i> TOR Diklat TA</a></li>
                <li><a href="{{ url('tortt') }}"><i class="fa fa-circle-o"></i> TOR Diklat TT</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Tata Usaha</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> SIMPEG </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Asrama dan Ruang</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('asrama') }}"><i class="fa fa-circle-o"></i> Asrama</a></li>
                <li><a href="{{ url('kamar') }}"><i class="fa fa-circle-o"></i> Kamar Asrama</a></li>
                <li><a href="{{ url('kondisikm') }}"><i class="fa fa-circle-o"></i> Kondisi Kamar</a></li>
                <li><a href="{{ url('ruang') }}"><i class="fa fa-circle-o"></i> Data Ruang Kelas</a></li>
                <li><a href="{{ url('kondisiruang') }}"><i class="fa fa-circle-o"></i> Kondisi Ruang Kelas</a></li>
              </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
