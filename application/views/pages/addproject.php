
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Project
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Add Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <?php 
		foreach($data as $u){ 
		?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Rp. <?php echo number_format($u->harga,0, '.',',') ?></h3>

              <p><?php echo $u->nama_produk; ?></p>
            </div>
            <a href="<?php echo base_url('addproject/shoopingcart') ?>/<?php echo $u->id_produk; ?>" class="small-box-footer">Order This Product <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->