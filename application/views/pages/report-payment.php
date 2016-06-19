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
        <li class="active">Report</li>
        <li class="active">Payment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Payment Master Website Karawang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Code Project</th>
                  <th>Pay</th>
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
                  <td>Rp. <?php echo number_format($u->pay,0, '.',',') ?></td>
                  <td><?php echo tgl_indo($u->tanggal); ?></td>
                  <td>
                  <a href="<?php echo base_url('addproject/invoice') ?>/<?php echo $u->kode_project; ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Invoice</a>
                  <a href="<?php echo base_url('addproject/invoice') ?>/<?php echo $u->kode_project; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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