<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Client
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Master</li>
        <li class="active">Data Client</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Client Master Website Karawang</h3>
              <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-plus"></i> Add Client</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Contact Person</th>
                  <th>Company</th>
                  <th>Address</th>
                  <th>Telephone</th>
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
                  <td><?php echo $u->nama_client; ?>
                  </td>
                  <td><?php echo $u->perusahaan; ?></td>
                  <td><?php echo $u->alamat; ?></td>
                  <td><?php echo $u->telepon; ?></td>
                  <td>
                  <a href="<?php echo base_url('client/edit') ?>/<?php echo $u->id_client; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                  <a href="<?php echo base_url('client/hapus') ?>/<?php echo $u->id_client; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delet</a>
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- Modal -->
<div class="modal modal-success" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Client</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php echo base_url('client/tambah') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Contact Person</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="cp" type="text" placeholder="Contact Person">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Company</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="perusahaan" type="text" placeholder="Company">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telepone</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="tlp" type="text" placeholder="Telepone">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                   <textarea class="form-control"  placeholder="Address" name="alamat"></textarea>
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