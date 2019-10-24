<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles List</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
  <img style="height: 50px; width: 100; display: block;" src="<?=base_url("images/blog-11.jpg")?>">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
         <h5> <?= anchor('home', '   ', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
         <h5> <?= anchor('home', ' Home', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Article">
         <h5> <?= anchor('login', ' Add Article', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Scope of Innovation">
          <h5> <?= anchor('scope_ino', 'Scope of Innovation', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <h5> <?= anchor('about_controller', 'About us', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <?php if($this->session->userdata('user_id'))
      {$name=$this->session->userdata['uname'];?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <h5><?= anchor('login/logout', '('.$name.')Logout', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
          <h5><?= anchor('blog/dashboard', 'User Profile', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
    <?php }
    else{ ?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registration">
          <h5><?= anchor('register_control', 'Registration', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Login">
         <h5> <?= anchor('login', 'Login', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
    <?php }?>

     <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') =='admin')
      {?>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Activity">
         <h5> <?= anchor('admin', 'User Activity', 'class="nav-link"')?></h5>
            <span class="nav-link-text"></span>
      </li>
    <?php }?>
  </ul>
    <?= form_open('home/search',['class'=>'form-inline my-2 my-lg-0','role'=>'serach']) ?>
        <div class="form-group">
          <input type="text" name="query" class="form-control mr-sm-2" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-info my-2 my-sm-0">Searcht</button>
      <?= form_close(); ?>
      <?= form_error('query',"<p class='navbar-text'>",'</p>') ?>
    </div>
</nav>
<!-- <img style="height: 300px; width: 100%; display: block;" src="<?=base_url("images/blogg1.jpg")?>"> -->