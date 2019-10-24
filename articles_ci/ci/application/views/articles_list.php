<?php include('public_header.php'); ?>
<div class="container">
	<div class="container">
		<div style="max-width: 60rem;">
	<h1 class="text-danger" style="font-family: serif;">All Blogs</h1>
	<hr>
	<center>
	<table class="table table-hover">
		<tbody>
			<tr>
			<? if( count($articles)): ?>
			<?php $count = $this->uri->segment(3, 0);?>
			<?php foreach( $articles as $article ): ?>
				<td class="blockquote table-active">
					<h4 class="text-white"><?= $article->title ?></h4>
					<p class="mb-1 lead"> <?= substr(strip_tags($article->body), 0, 150).'....'; ?> </p>
					<p class="mb-0"> <a href="<?=  base_url()?>home/article/<?= $article->id?>">Read More</a> 
					</p><br>
					<p class="blockquote-footer"> <?= date('d M y  H:i', strtotime($article->created_at) ); ?> </p>
				</td>
			</tr>
			<?php endforeach; ?>
		<? else: ?>
			
		<? endif;?>
		</tbody>
	</table></center>
	<?= $this->pagination->create_links(); ?>
</div></div>
</div>

<?php include('public_footer.php'); ?>