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
              <h3 class="box-title">Edit Data Client Master Website Karawang</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($client as $row){ ?>
            <form class="form-horizontal" action="<?php echo base_url('client/update_client') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row->id_client ?>" class="form-control" readonly="readonly">
             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Contact Person</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="cp" type="text" value="<?php echo $row->nama_client ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Coorporate</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="perusahaan" type="text" value="<?php echo $row->perusahaan ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telephone</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="tlp" type="text" value="<?php echo $row->telepon ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                   <textarea name="alamat" class="form-control" placeholder="<?php echo $row->alamat ?>"></textarea>
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