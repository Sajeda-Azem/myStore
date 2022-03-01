  <footer id="colophon" role="contentinfo">
        <div class="site-info">
            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
            <?php } ?>
      </div>
</footer>
<?php wp_footer();?>



</body>
</html>