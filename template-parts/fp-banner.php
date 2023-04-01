<?php
if (have_rows('banner_slides')) :

	// offer/services query
	// Args:
	$args = array(
		'post_type' => 'offer',
		'posts_per_page' => -1
	);

	// The Query
	$offer = new WP_Query($args);
?>

	<section class="banner container mx-auto px-[15px] mt-2 mb-16">

		<?php if ($banner_heading = get_field('banner_heading')) : ?>
		<?php endif; ?>

		<div class="banner__slider swiper isolate">
			<div class="swiper-wrapper">

				<?php while (have_rows('banner_slides')) : the_row(); ?>

					<div class="swiper-slide md:min-h-fit">
						<?php if ($slide_img = get_sub_field('slide_img')) : ?>

							<?= wp_get_attachment_image($slide_img, 'banner-image', '', ['class' => 'w-full h-full object-cover rounded-b-2xl']); ?>

						<?php endif; ?>
					</div>

				<?php endwhile; ?>

			</div>
			<div class="swiper-pagination absolute right-10 bottom-5 sm:bottom-10 md:bottom-20 z-50"></div>
		</div>

		<?php if ($offer->have_posts()) : ?>


			<div class="banner__cards grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-[34px] mt-5 sm:-mt-8 relative z-10 justify-center place-content-center">

				<?php while ($offer->have_posts()) : $offer->the_post(); ?>

					<?php $card_bg = get_field('card_bg'); ?>
					<div class="flex flex-col relative text-white px-[15px] py-8 rounded-3xl observe observe--no-delay faded-out isolate group/card overflow-hidden before:absolute before:inset-0 before:bg-black before:opacity-0 hover:before:opacity-30 before:transition-opacity before:duration-1000 before:-z-[1]">
						<img src="<?= wp_get_attachment_image_url($card_bg, 'full') ?>" alt="" class="absolute top-0 left-0 w-full h-full group-hover/card:scale-125 transition-transform duration-[2500ms] -z-[2]">
						<h2 class=" relative text-[1.375rem] font-bold mb-4 leading-tight"><?= get_the_title(); ?></h2>
						<p class=" relative text-sm mb-8"><?= substr(get_the_content(), 0, 120); ?>...</p>
						<a href="<?= esc_url(get_permalink()); ?>" class="flex relative  group/learn items-center text-sm font-bold mt-auto">Dowiedz się więcej <span class="inline-block relative w-3 h-0.5 bg-white ml-2 transition-transform group-hover/learn:translate-x-2 after:absolute after:right-0 after:w-2 after:h-0.5 after:origin-right after:rotate-45 after:bg-white before:absolute before:right-0 before:w-2 before:h-0.5 before:origin-right before:-rotate-45 before:bg-white"></span></a>
					</div>

				<?php endwhile; ?>

			</div>

		<?php wp_reset_query();
		endif; ?>


	</section>

<?php endif; ?>