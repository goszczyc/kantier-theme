<?php

get_header();

?>

<main class="main">
	<?php get_template_part('/template-parts/banner'); ?>
	<?php get_template_part('/template-parts/heading-main'); ?>
	<div class="container mx-auto py-10 prose max-w-full">
		<?= get_the_content(); ?>
	</div>
	<?php get_template_part('/template-parts/realizations-slider'); ?>
	<?php get_template_part('/template-parts/logo-slider'); ?>
</main>

<?php get_footer(); ?>