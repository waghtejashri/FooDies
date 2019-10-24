<?php include_once('public_header.php');?>
<br>
<div class="container">			
	<?php if( $feedback = $this->session->flashdata('feedback')): 
		$feedback_class = $this->session->flashdata('feedback_class');
	?>
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="alert alert-dismissible <?= $feedback_class ?>">
          <?= $feedback ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
	<table class="table">
		<thead>
			<th>Sr. No.</th>
			<th>User Name</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php if( count($users) ):
			$count = $this->uri->segment(3, 0);
			foreach($users as $user): ?>
			<tr>
				<td><?= ++$count ?></td>
				<td>
					<?= $user['uname'] ?>
				</td>
				<td>
				<div class="row">
				<div class="col-lg-2">
				<?=
				form_open('admin/delete_user'),
				form_hidden('user_id', $user['id']),
				form_submit(['name'=>'submit','value'=>'Block','class'=>'btn btn-danger']),
				form_close();
				?>
				</div>
				</div>					
				</td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
			
	<?php endif; ?>

		</tbody>
	</table>
<!-- <?= $this->pagination->create_links(); ?> -->
</div>
<?php include_once('public_footer.php');?>