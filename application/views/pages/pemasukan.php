<?php include 'functions.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inclusion
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Accounting</li>
        <li class="active">Inclusion</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Inclusion Master Website Karawang</h3>
              <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-plus"></i> Add Inclusion</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Description</th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
		$no = 1;
		foreach($data as $u){ 
		?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->keterangan; ?>
                  </td>
                  <td>Rp. <?php echo number_format($u->nominal); ?></td>
                  <td><?php echo tgl_indo($u->date); ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- Modal -->
<div class="modal modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Inclusion</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php echo base_url('inclusion/tambah') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Client</label>
                  <div class="col-sm-10">
                    <select name="client" class="form-control">
                    <option> === Select Client ===</option>
                    <?php foreach($rows as $u){ ?>
                    <option value="<?php echo $u->id_client ?>"><?php echo $u->perusahaan ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nominal</label>

                  <div class="col-sm-10">
                    <div class="input-group">
                <span class="input-group-addon">Rp. </span>
                <input type="text" class="form-control" name="rp" placeholder="50.000">
                <span class="input-group-addon">.00</span>
              </div>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                   <textarea class="form-control"  placeholder="Description" name="ket"></textarea>
                  </div>
                </div>
              </div>
     	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline" name="save">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->