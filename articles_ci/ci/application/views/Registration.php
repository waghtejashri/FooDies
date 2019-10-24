<?php include('public_header.php'); ?>
<br>
<div class="container text-white bg-secondary" style="max-width:50rem;">
	<div class="container">
	<?php echo form_open('register_control/get_register', ['class'=>'form-horizontal']) ?>

<legend>User Registration</legend>
	<div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      		<label for="inputEmail" class="col-lg-6 control-label">Name</label>
        		<div class="col-lg-12">
          		<?= form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Enter your Name','value'=>set_value('name')]); ?>
        		</div>
     		</div>
    	</div>
    </div>
  	
  <div class="row">
    <div class="col-lg-6">
     <div class="form-group">
      <label for="inputEmail" class="col-lg-6 control-label">Email Address</label>
        <div class="col-lg-12">
          <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter your Email address','value'=>set_value('email')]); ?>
        </div>
     </div>
    </div>
 </div>

   <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      		<label for="inputEmail" class="col-lg-6 control-label">User Name</label>
        		<div class="col-lg-12">
          		<?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Enter Username','value'=>set_value('uname')]); ?>
        		</div>
     		</div>
    	</div>
    </div>

      <div class="col-lg-6">
        <p><span>User Type</span></p>
            <select class="form-control" name="user_type">
            <option value="admin">Admin</option>
            <option value="author">Author</option>
            <option value="user" selected>User</option>
            </select>
        </div>
      <br>

	<div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      		<label for="inputEmail" class="col-lg-6 control-label">Password</label>
        		<div class="col-lg-12">
          		<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']) ?>
        		</div>
     		</div>
    	</div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
           <label for="inputEmail" class="col-lg-6 control-label">Confirm Password</label>
            <div class="col-lg-12">
               <?php echo form_password(['name'=>'confirm_pass','class'=>'form-control','placeholder'=>'Confirm Password']) ?>
            </div>
        </div>
      </div>
    <div class="col-lg-6">
       <?php echo form_error('password'); ?>
    </div>
    </div>
    
    <div class="row">
   	<div class="col-lg-12 col-lg-offset-8">
    <div class="form-group">
        <?php 
        	echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']),
        		form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-success']);
        ?>
      </div>
    </div>
    </div>
</form>
</div>
</div>

<?php include('public_footer.php'); ?>