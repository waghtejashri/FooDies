<?php include_once('public_header.php'); ?>
<div class="container">
<div class="card-header">
<div class="row">
	<div class="col-lg-6">
		<h1 class="text-primary">
			<?= $article->title ?>
		</h1>
	</div>
	<div class="col-lg-6">
		<span class="pull-right">
			<?= date('d M y H:i', strtotime($article->created_at) ); ?>
		</span>
	</div>
</div>
</div>
	<div class="card-body">
	<div class="d-flex w-100 justify-content-between">
	<p>
		<?= $article->body ?>
	</p><br></div>
	<?php if( ! is_null($article->image_path ) ): ?><center>
	<img style="height: 400px; width: 50%; display: block; position: relative;" src="<?= $article->image_path ?>" alt=""></center>
	<?php endif; ?>
</div>           
</div>

<?php include_once('public_footer.php'); ?>