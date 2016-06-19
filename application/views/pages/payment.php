<?php include 'functions.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payment
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Payment Master Website Karawang</h3>
              <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-plus"></i> Add Client</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Code Project</th>
                  <th>Client</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Marketing</th>
                  <th>Pay</th>
                  <th>Erast</th>
                  
                  <th>Status</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
		$no = 1;
		foreach($data as $u){ 
		?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->kode_project; ?>
                  </td>
                  <td><?php echo $u->perusahaan; ?></td>
                  <td><?php echo $u->nama_produk; ?></td>
                  <td>Rp. <?php echo number_format($u->harga,0, '.',',')?></td>
                  <td><?php echo $u->nama; ?></td>
                  <td>Rp. <?php echo number_format($u->bayar,0, '.',',') ?></td>
                  <td>Rp. <?php echo number_format($u->sisa,0, '.',',') ?></td>
                  
                  <td>
                  <?php if ( $u->sisa == 0){
					  echo '<i style="color:blue;">Paid</i>';}
					  else{
						echo'<i style="color:red;">Unpaid</i>';
					  }
					  ?>
                  </td>
                  <td><?php echo tgl_indo($u->tanggal); ?></td>
                  <td>
                  <a href="<?php echo base_url('payment/bayar') ?>/<?php echo $u->kode_project; ?>" class="btn btn-primary btn-sm"><i class="fa fa-dollar"></i> Pay</a>
                  
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->