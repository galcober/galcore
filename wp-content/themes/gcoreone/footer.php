	<div class="col-md-12 col-sm-12 col-xs-12" id="widgets-footer">
		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left')) {} ?>
		</div>

		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Center')) {} ?>
		</div>

		<div class="col-md-4 col-sm-4 col-xs-4">
			<?php if ( ! function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right')) {} ?>
		</div>
	</div>
	<?php wp_footer() ?>
	</div>

	<div class="fixedBar">
		<div class="boxfloat">
			<ul id="tips">
				<li><a href="http://www.wpbeginner.com/">WPBeginner Link is the First Item</a></li>
				<li><a href="http://www.wordpress.org/">WordPress.org is the Second Item</a></li>
			</ul>
		</div>
	</div>

</body>
</html>