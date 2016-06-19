<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Master</li>
        <li class="active">Data Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Product Master Website Karawang</h3>
              <a class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-plus"></i> Add Product</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name of Product</th>
                  <th>Price</th>
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
                  <td><?php echo $u->nama_produk; ?>
                  </td>
                  <td><?php echo $u->harga; ?></td>
                  <td>
                  <a href="<?php echo base_url('product/edit') ?>/<?php echo $u->id_produk; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                  <a href="<?php echo base_url('product/hapus') ?>/<?php echo $u->id_produk; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delet</a>
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
        <h4 class="modal-title" id="myModalLabel">Add Product</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php echo base_url('product/tambah') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name of Product</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nama" type="text" placeholder="Name of Product">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="harga" type="text" placeholder="Price">
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