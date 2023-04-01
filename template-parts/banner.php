	<section class="banner container mx-auto px-[15px] mb-16 observe faded-out">
		<div class="isolate">
			<?php if ($banner_image = get_field('banner_image')) : ?>

				<div class="md:min-h-fit">

					<?= wp_get_attachment_image($banner_image, 'banner-image', '', ['class' => 'w-full h-full object-cover rounded-b-2xl']); ?>

				<?php endif; ?>

				</div>
	</section> 