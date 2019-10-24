 <?php include('public_header.php'); ?>
 <div class="container" style="max-width: 60rem"><br>
<h2 class="text-primary" style="text-align: center;">Add Techno News Here!</h2>
<h2 class="text-primary" style="text-align: center;">Add Your Ideas Here!</h2>

<?php
    if(count($ideas) > 0)
    {
    	foreach ($ideas as $row)
        {?>
        	<div class="card bg-secondary mb-3" style="max-width: 50rem;">
		  	<div class="card-header text-success"><h4><?=$row['title']?></h4></div>
            <div class="card-body text-dark">
		    <p class="card-text"><?=$row['body']?></p>
		  </div>
		</div>
        <?php   }
        }
        else //when there is nothing
        {
            echo "<p>Currently, there are no comment.</p>";
        }?>

			<div class="container" style="max-width: 50rem;height: 10rem;">
		  	
			</div>
        <?php
        if($this->session->userdata('user_id'))
         {?>
           <?php echo form_open('scope_ino/store_idea', ['class'=>'form-horizontal']) ?>
            <div class="card text-light bg-secondary mb-3" style="max-width: 50rem;max-height: 50rem;">
		  	<div class="card-header"><?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Idea Title','value'=>set_value('title')]); ?></div>
            <div class="card-body">
		    <p class="card-text"><?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>' Explanation','value'=> set_value('body')]) ?></p>
		  	</div>
            <div class="card-footer">
                <?php
                    echo form_submit(['name'=>'submit','value'=>'Save changes','class'=>'btn btn-primary']);
                ?>
            </div>
            </div>
        <?php 
            }
            else {//if no user is loged in, then show the loged in button
           ?>
            <a href="<?=  base_url()?>index.php/login">Login to Add</a>
        <?php 
            }?>
</div>
<?php include('public_footer.php'); ?>