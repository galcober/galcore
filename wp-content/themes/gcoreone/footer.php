	<?php wp_footer() ?>
	</div>

	<!-- WIDGETS -->
	<footer class="footer">
      	<div class="col-md-12 col-sm-12 col-xs-12" id="widgets-footer">
			<div class="col-md-4 col-sm-4 col-xs-12 footerLeft">
				<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left')) {} ?>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 footerCenter">
				<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Center')) {} ?>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 footerRight">
				<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right')) {} ?>
			</div>
		</div>

		<!-- REDES SOCIALES -->
		<div id="rrss">
			<div class="col-md-12 col-sm-12 col-xs-12 rrss">
				<i class="col-md-3 col-sm-3 col-xs-3 socialNetwork fa fa-twitter fa-2x">
					<a href="http://twitter.com/"><?php _e('Twitter','galcore') ?></a>
				</i>
				<i class="col-md-3 col-sm-3 col-xs-3 socialNetwork fa fa-facebook fa-2x">
					<a href="http://facebook.com/"><?php _e('Facebook','galcore') ?></a>
				</i>
				<i class="col-md-3 col-sm-3 col-xs-3 socialNetwork fa fa-instagram fa-2x">
					<a href="http://instagram.com/"><?php _e('Instagram','galcore') ?></a>
				</i>
				<i class="col-md-3 col-sm-3 col-xs-3 socialNetwork fa fa-youtube fa-2x">
					<a href="http://youtube.com/"><?php _e('Youtube','galcore') ?></a>
				</i>
			</div>
		</div>

		<!-- LEGAL -->
		<div id="legal">
			<div class="col-md-1 col-sm-1 col-xs-12 legal">
				<?php bloginfo('name') ?>
			</div>
			<div class="col-md-11 col-sm-11 col-xs-12 legal">
				<?php _e('© GalCore 2017. GESTOR DE CONTENIDOS PARA TU WEB. CMS OPEN SOURCE.', 'galcore') ?>
			</div>
		</div>
    </footer>
</body>
</html>