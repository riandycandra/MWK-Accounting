<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employe
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Master</li>
        <li class="active">Data Employe</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Employe Master Website Karawang</h3>
              <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-plus"></i> Add Employe</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Office</th>
                  <th>Telephone</th>
                  <th>Address</th>
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
                  <td><?php echo $u->nama; ?>
                  </td>
                  <td><?php echo $u->jabatan; ?></td>
                  <td><?php echo $u->alamat; ?></td>
                  <td><?php echo $u->telepon; ?></td>
                  <td>
                  <a href="<?php echo base_url('employe/edit') ?>/<?php echo $u->id_karyawan; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                  <a href="<?php echo base_url('employe/hapus') ?>/<?php echo $u->id_karyawan; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delet</a>
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
        <h4 class="modal-title" id="myModalLabel">Add Employe</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php echo base_url('employe/tambah') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nama" type="text" placeholder="Contact Person">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Office</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="jabatan" type="text" placeholder="Company">
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->