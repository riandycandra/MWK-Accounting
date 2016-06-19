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
        <li class="active">Pay</li>
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
            <?php foreach($view as $row){ ?>
            <form class="form-horizontal" action="<?php echo base_url('payment/tambah') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row->id_project ?>" class="form-control" readonly>
            <input type="hidden" name="bayar" value="<?php echo $row->bayar ?>" class="form-control" readonly>
            <input type="hidden" name="sisa" value="<?php echo $row->sisa ?>" class="form-control" readonly>
            <input type="hidden" name="client" value="<?php echo $row->id_client ?>" class="form-control" readonly>
             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kode Project</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="kode" type="text" value="<?php echo $row->kode_project ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Debt</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="debt" type="text" value="<?php echo $row->sisa ?>" readonly id="txt1" onkeyup="sum();">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pay</label>
                  <div class="col-sm-10">
                   <input class="form-control" name="pay" type="text" id="txt2" onkeyup="sum();">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Rest</label>
                  <div class="col-sm-10">
                   <input class="form-control" name="rest" type="text" id="txt3" readonly>
                  </div>
                </div>
                <button type="reset" class="btn btn-danger pull-left">Reset</button>
        <button type="submit" class="btn btn-primary pull-right" name="save">Save changes</button>
            </form>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <?php } ?>
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