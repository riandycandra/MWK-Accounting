<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>images/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst($this->session->userdata('nama')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="<?php echo base_url('dhasboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Data Master</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('client') ?>"><i class="fa fa-users"></i> Data Client</a></li>
            <li><a href="<?php echo base_url('employe') ?>"><i class="fa fa-user"></i> Data Employe</a></li>
            <li><a href="<?php echo base_url('product') ?>"><i class="fa fa-barcode"></i> Data Product</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('addproject') ?>">
            <i class="fa fa-shopping-cart"></i> <span>Add Project</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Finance</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('payment') ?>"><i class="fa fa-dollar"></i> Payment</a></li>
            <li><a href="<?php echo base_url('inclusion') ?>"><i class="fa fa-dollar"></i> Inclusion</a></li>
            <li><a href="<?php echo base_url('spending') ?>"><i class="fa fa-dollar"></i> Spanding</a></li>
          </ul>
        </li>
        <?php
          if($this->session->userdata('level') == "Administrator")
          {
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Report</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('report/project') ?>"><i class="fa fa-shopping-cart"></i> Project</a></li>
            <li><a href="<?php echo base_url('report/payment') ?>"><i class="fa fa-money"></i> Payment</a></li>
           <li><a href="<?php echo base_url('report/inclusion') ?>"><i class="fa fa-dollar"></i> Inclusion</a></li>
            <li><a href="<?php echo base_url('report/spending') ?>"><i class="fa fa-dollar"></i> Spanding</a></li>
          </ul>
        </li>
        <?php
          }
        ?>
        <li class="treeview">
          <a href="<?php echo base_url('login/logout') ?>">
            <i class="fa fa-power-off"></i> <span>Logout</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>