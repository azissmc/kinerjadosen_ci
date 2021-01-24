<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets1/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if($menu == "admin"):?>
        <li class="active">
          <a href="<?= base_url('admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('data-admin')?>">
            <i class="fa fa-files-o"></i>
            <span>Data Admin</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Data Mahasiswa</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Dosen</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Data Informasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Data Informasi</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data Rektorat</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data Aduan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Data Mata Kuliah</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>