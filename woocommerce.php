

<?php get_header();
?><div id="main" class="row"> 
    <div class="col-lg-3">
   <?php dynamic_sidebar('shop-sidebar');?>
        </div>
       
    <div id="content" class="col-lg-9 col-sm-9 ">
        <?php woocommerce_content(); ?>
    </div>
</div>
<?php get_footer(); ?>


























