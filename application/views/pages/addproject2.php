<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project
        <small>Master Website Karawang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Project</li>
        <li class="active">Shoppig Cart</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Shopping Cart Master Website Karawang</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($product as $row){ ?>
            <form class="form-horizontal" action="<?php echo base_url('addproject/tambah') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row->id_produk ?>" class="form-control" readonly>
             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name Of Product</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="nama" type="text" value="<?php echo $row->nama_produk ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="harga" type="text" value="<?php echo $row->harga ?>" readonly id="txt1" onkeyup="sum();">
                  </div>
                </div>
                <?php } ?>
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Marketing</label>
                  <div class="col-sm-10">
                   <select name="karyawan" class="form-control">
                    <option> === Select Marketing ===</option>
                    <?php foreach($baris as $s){ ?>
                    <option value="<?php echo $s->id_karyawan ?>"><?php echo $s->nama ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Down Payment</label>
                  <div class="col-sm-10">
                   <input class="form-control" name="dp" type="text" id="txt2" onkeyup="sum();">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Rest</label>
                  <div class="col-sm-10">
                   <input class="form-control" name="sisa" type="text" id="txt3" readonly="readonly">
                  </div>
                </div>
                <button type="reset" class="btn btn-danger pull-left">Reset</button>
        <button type="submit" class="btn btn-primary pull-right" name="save">Save changes</button>
            </form>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>