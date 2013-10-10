<div class="container">

      <hr>

      <footer>
		<div class="row">
            <?php if ( is_active_sidebar( 'footer' ) ) : ?>
                <?php dynamic_sidebar( 'footer' ); ?>
            <?php endif; ?>
		</div>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri();  ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri();  ?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri();  ?>/js/modern-business.js"></script>
  </body>
</html>