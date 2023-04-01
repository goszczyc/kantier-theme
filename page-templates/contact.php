<?php

/* Template Name: Kontakt */

get_header();
?>


<main class="main">

	<?php get_template_part('/template-parts/banner'); ?>
	<?php if ($main_heading = get_field('main_heading')) : ?>

		<div class="container relative mx-auto mt-10 mb-16 flex flex-col items-center justify-center px-[15px] font-kranto">
			<div class="relative flex justify-center w-full">
				<div class="flex flex-col">
					<span class="flex items-center text-gray text-sm uppercase font-bold  tracking-[.25em] observe faded-out">
						Kontakt
					</span>
					<h1 class="text-3xl xs:text-4xl sm:text-5xl md:text-[54px] font-bold observe faded-out"><?= $main_heading; ?></h1>
				</div>
				<?php if ($heading_decoration = get_field('heading_decoration')) : ?>
					<span class="absolute top-1/2 left-1/2 text-center text-6xl sm:text-7xl lg:text-8xl xl:text-9xl font-bold -z-10 text-l-gray -translate-x-1/2 -translate-y-1/2 tracking-wide w-max max-w-full">
						<?= $heading_decoration; ?>
					</span>
				<?php endif; ?>
			</div>

			<?php if ($heading_text = get_field('heading_text')) : ?>

				<div class="text-center mt-8 observe faded-out">
					<?= $heading_text; ?>
				</div>

			<?php endif; ?>
		</div>

	<?php endif; ?>

	<?php get_template_part('/template-parts/contact'); ?>
	<?php get_template_part('/template-parts/why-our-company'); ?>
	<?php get_template_part('/template-parts/realizations-slider'); ?>
	<?php get_template_part('/template-parts/logo-slider'); ?>

</main>


<?php get_footer(); ?>