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
              <h3 class="box-title">Edit Data Product Master Website Karawang</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($produk as $row){ ?>
            <form class="form-horizontal" action="<?php echo base_url('product/update_product') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row->id_produk ?>" class="form-control" readonly>
             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name Of Product</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="nama" type="text" value="<?php echo $row->nama ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="harga" type="text" value="<?php echo $row->harga ?>">
                  </div>
                </div>
                <button type="reset" class="btn btn-danger pull-left">Reset</button>
        <button type="submit" class="btn btn-primary pull-right" name="save">Save changes</button>
            </form>
            <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->