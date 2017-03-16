<?php
get_header();
?>
	<div class="col-md-8 col-xs-12 col-sm-12">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
				</div>
				<div class="panel-body">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php the_content(__('Seguir leyendo','galcore')); ?>
					</div>
				</div>
				<div class="panel-footer">
					<p>
						<?php _e('Autor', 'galcore') ?>: <?php the_author_posts_link(); ?>,
						<?php _e('Categorías', 'galcore') ?>: <?php echo get_the_category_list(", ", $post_id) ?>
					</p>
				</div>
			</div>
			<?php
		}
	} else {
		_e('No hay nada que mostrar', 'galcore');
	}
	?>
	</div>
<?php
get_footer();