<?php include_once('public_header.php'); ?>
<br>
<div class="container">
	<h2>Username : <?=$this->session->userdata['uname']?></h2>
	<div>
			
	</div><br>
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
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php if( count($articles) ):
			$count = $this->uri->segment(3, 0);
			foreach($articles as $article ): ?>
			<tr>
				<td><?= ++$count ?></td>
				<td>
					<?= $article->title ?>
				</td>
				<td>
				<div class="row">
				<div class="col-lg-2">
					<?= anchor("blog/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
				</div>
				<div class="col-lg-2">
				<?=
				form_open('blog/delete_article'),
				form_hidden('article_id', $article->id),
				form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
				form_close();
				?>
				</div>
				</div>					
					<!-- <a href="" class="btn btn-danger">Delete</a> -->
				</td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
			
	<?php endif; ?>

		</tbody>
	</table>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
		<?= anchor('blog/store_article','Add Article',['class'=>'btn btn-primary btn-lg btn-block']) ?>
		</div>
	</div>
<?= $this->pagination->create_links(); ?>
</div>
<?php include_once('public_footer.php'); ?>