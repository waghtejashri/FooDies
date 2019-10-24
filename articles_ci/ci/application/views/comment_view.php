
<div class="container">
    <hr><br>
    <h3 style="color: white; font-family: serif;">Comments</h3>
    <?php       //if there is comments then print the comments
         if(count($comments) > 0)
         {
            foreach ($comments as $row)
            {?>
        <p><strong class="text-primary"><?=$row['uname']?></strong> said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
        <?=$row['comment'];?></p><hr>
        <?php   }
        }
        else //when there is no comment
        {
            echo "<p>Currently, there are no comment.</p>";
        }?>
    <?php
        if($this->session->userdata('user_id'))//if user is loged in, display comment box
            {?> 
            <?php echo form_open('comment/add_comment', ['class'=>'form-horizontal']) ?>
                <?= form_hidden('pid',$post_id); ?>
                <div class="col-lg-6">
                <div class="form-group">
                <div class="col-lg-8">
                  <?php echo form_textarea(['name'=>'comment','class'=>'form-control','placeholder'=>'Add your comment here...','value'=> set_value('comment')]); ?>
                </div>
                </div>
                </div>
                <div class="form-group" style="padding-top: 10px;padding-left: 20px">
                    <div class="col-lg-10 col-lg-offset-2">
                        <?php 
                            echo form_submit(['name'=>'submit','value'=>'Add','class'=>'btn btn-primary']);
                        ?>
                    </div>
                </div>
                </form>
                <?php 
                }
                else {//if no user is loged in, then show the loged in button
               ?>
            <a href="<?=  base_url()?>index.php/login">Login to comment</a>
         <?php 
            }?>
</div>