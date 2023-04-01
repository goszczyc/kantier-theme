<?php if (have_rows('logo_slider', 'options')) : ?>

	<section class="bg-l-gray px-[15px] py-12 max-w-[1920px] mx-auto">
		<h2 class="container text-2xl text-center md:text-left xs:text-3xl font-bold px-[15px] mb-10 mx-auto observe faded-out">Zaufali nam</h2>
		<div class="logo-slider swiper max-w-[1740px] mx-auto observe faded-out">
			<div class="swiper-wrapper items-center">
				<?php while (have_rows('logo_slider', 'options')) : the_row(); ?>
					<?php if ($logo = get_sub_field('logo')) : ?>


						<?= wp_get_attachment_image($logo, 'firm-logo', '', ['class' => 'w-full h-auto swiper-slide']); ?>


					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</section>

<?php endif; ?>