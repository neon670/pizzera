	<footer>
		<?php
			$args = array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'after' =>'<span class="separator">| </span>'
				);
			wp_nav_menu($args);
		?>
		<div class="location">
			<p>123 Main St San Francisco, CA 94303</p>
			<p>Phone Number: 222-222-2222</p>
		</div>
		<p class="copyright">All Right Resvered <?php echo date(Y)?></p>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
