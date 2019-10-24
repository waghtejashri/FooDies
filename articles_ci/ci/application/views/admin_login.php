<?php include('public_header.php'); ?>
<br>
<div class="container text-white bg-secondary" style="max-width:50rem;">
  
  <?php echo form_open('login/admin_login', ['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend>Login Here</legend>
    <?php if( $error = $this->session->flashdata('login_failed')): ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
          <?= $error ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
      <label for="inputEmail" class="col-lg-6 control-label">User Name</label>
        <div class="col-lg-10">
          <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Username','value'=>set_value('uname')]); ?>
        </div>
      </div>
    </div>
    
      <div class="col-lg-6">
        <?php echo form_error('uname'); ?>
      </div>
  </div>
  
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
      <label for="inputEmail" class="col-lg-6 control-label">Password</label>
        <div class="col-lg-10">
          <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'password']) ?>
        </div>
      </div>
    </div>
  
      <div class="col-lg-6">
        <?php echo form_error('password'); ?>
      </div>
  </div>

  <div class="col-md-5">
  <p><span>User Type</span></p>
      <select class="form-control" name="user_type">
      <option value="admin">Admin</option>
      <option value="user" selected>User</option>
  </select>
</div><br><br>

    <div class="col-lg-3 col-lg-offset-2">
      <div class="form-group">
      <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-success']);?>
      <?php 
        echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']);
      ?>
    </div>
  </div>
  </div>
</fieldset>
</form>
</div>

<?php include('public_footer.php'); ?>