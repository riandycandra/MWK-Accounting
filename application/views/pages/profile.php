<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>images/<?php echo $this->session->userdata('foto'); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo ucfirst($this->session->userdata('nama')); ?></h3>

              <p class="text-muted text-center"><?php echo ucfirst($this->session->userdata('level')); ?></p>
              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Edit Profile</a></li>
              <li><a href="#timeline" data-toggle="tab">Change Pasword</a></li>
              <li><a href="#settings" data-toggle="tab">Change Picture</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               <form class="form-horizontal" action="<?php echo base_url('profile/update_profile') ?>" method="post">
             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
            <input class="form-control" name="nama" type="text" value="<?php echo ucfirst($this->session->userdata('nama')); ?>">
                  </div>
                </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                  </div>
                </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <form class="form-horizontal" action="<?php echo base_url('profile/change_password') ?>" method="post">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Old Password</label>
                  <div class="col-sm-10">
            <input class="form-control" name="old_password" type="password">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                  <div class="col-sm-10">
            <input class="form-control" name="new_password" type="password" >
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">New Password Again</label>
                  <div class="col-sm-10">
            <input class="form-control" name="new_password_again" type="password" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                  </div>
                </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal" enctype="multipart/form-data" action="<?=base_url('profile/change_photo')?>" method="post">
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label">File</label>
                    <div class="col-sm-10">
                      <input type="file" name="berkas" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" name="submit" value="Update" class="btn btn-success">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->