<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo bg-red">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>K</b>DSN</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Kinerja</b>Dosen</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top bg-red">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle bg-red" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= base_url()?>assets1/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-red">
                        <img src="<?= base_url()?>assets1/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                        <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
            </nav>
        </header>   
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
                    <li class="<?php if($menu == 'admin') echo 'active bg-red';?>">
                        <a href="<?= base_url('admin')?>">
                            <i class="fa fa-dashboard"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class="<?php if($menu == 'data admin') echo 'active bg-red';?>">
                        <a href="<?= base_url('data-admin')?>">
                            <i class="fa fa-files-o"></i>
                            <span>Data Admin</span>
                        </a>
                    </li>
                    <li class="<?php if($menu == 'data mahasiswa') echo 'active';?>">
                        <a href="<?= base_url('data-mahasiswa')?>">
                            <i class="fa fa-user"></i> <span>Data Mahasiswa</span>
                        </a>
                    </li>
                    <li class="<?php if($menu == 'data dosen') echo 'active';?>">
                        <a href="<?= base_url('data-dosen')?>">
                            <i class="fa fa-user-secret"></i>
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
                            <li class="<?php if($menu == 'data rektorat') echo 'active';?>"><a href="<?= base_url('data-rektorat')?>"><i class="fa fa-circle-o"></i> Data Rektorat</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Data Aduan</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Data Mata Kuliah</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>