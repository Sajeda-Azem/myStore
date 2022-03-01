<!DOCTYPE html>
<html>
    <head>
      
            <meta charset="<?php bloginfo('charset')?>"/>
          <title>
            <?php bloginfo('name');?>
        </title>
       <?php wp_head();?>   
    </head>
<body <?php body_class('test');?>>
   
 <header>

  

<nav class="navbar navbar-expand-md bg-light navbar-light">
  <a class="navbar-brand" href="#">MyStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
      <li class="nav-item">
   <?php bootstrap_header_menu();?>
      </li>    
    </ul>


  </div>  
</nav>
</header>
