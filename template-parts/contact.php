<section class="container mx-auto px-[15px]">

	<?php if (have_rows('departments')) : ?>

		<div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 justify-center place-items-center mb-16 gap-[1.875rem] max-w-[930px] mx-auto">
			<?php while (have_rows('departments')) : the_row(); ?>
				<?php
				$size = (get_sub_field('size')) ? 'full' : 1;
				$department = get_sub_field('department');
				?>

				<?php if ($size == 'full') : ?>
					<?php if ($department = get_sub_field('department')) : ?>
						<h3 class="text-xl text-center font-bold mb-2.5 col-span-<?= $size; ?> observe faded-out min-h-[3.5rem]">
							<?= $department; ?>
						</h3>
					<?php endif; ?>
				<?php endif; ?>
				<?php if (have_rows('staff')) : ?>

					<?php while (have_rows('staff')) : the_row(); ?>
						<div class="flex flex-col items-center observe faded-out mb-4">
							<?php if ($size == 1) : ?>
								<?php if ($department) : ?>
									<h3 class="text-xl text-center font-bold mb-10 min-h-[3.5rem]">
										<?= $department; ?>
									</h3>
								<?php endif; ?>
							<?php endif; ?>
							<?php if ($photo = get_sub_field('photo')) : ?>
								<div class=" w-full max-w-[136px] rounded-full border-2 border-primary border-solid overflow-hidden mb-4">
									<?= wp_get_attachment_image($photo, 'team-member', '', ['class' => 'w-full h-auto object-contain']); ?>
								</div>
							<?php endif; ?>
							<?php if ($name = get_sub_field('name')) : ?>
								<p class="text-lg font-bold mb-4">
									<?= $name; ?>
								</p>
							<?php endif; ?>
							<?php if ($phone = get_sub_field('phone')) : ?>
								<a href="tel: <?= trim($phone); ?>" class="text-base transition-colors hover:text-primary mb-2">
									<?= $phone; ?>
								</a>
							<?php endif; ?>
							<?php if ($email = get_sub_field('email')) : ?>
								<a href="mailto: <?= $email; ?>" class="text-base text-primary underline hover:text-black transition-colors">
									<?= $email; ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>

				<?php endif; ?>
			<?php endwhile; ?>
		</div>

	<?php endif; ?>

</section>



<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 container mx-auto px-[15px] gap-[1.875rem] mt-18">
	<div class=" md:col-span-3 observe faded-out">
		<?php if ($contact_info = get_field('contact_info')) : ?>

			<h3 class="text-xl font-bold mb-1">
				<?php _e('Dane kontaktowe', 'kantier'); ?>
			</h3>
			<address class="text-base not-italic">
				<?= $contact_info; ?>
			</address>
		<?php endif; ?>
		<?php if ($contact_email = get_field('contact_email')) : ?>

			<p class="text-base mb-4 ">
				e-mail: <a href="mailto: <?= $contact_email; ?>" class="text-primary hover:text-black">
					<?= $contact_email; ?>
				</a>
			</p>

		<?php endif; ?>


	</div>
	<div class=" md:col-span-3 observe faded-out">
		<?php if ($contact_phone = get_field('contact_phone')) : ?>
			<div class="mb-8">

				<h3 class="text-xl font-bold mb-1">
					<?php _e('Zadzwoń do nas', 'kantier'); ?>
				</h3>
				<a href="tel: <?= $contact_phone; ?>" class="text-base">
					<?= $contact_phone; ?>
				</a>

			</div>
		<?php endif; ?>

		<?php if ($opening_hours = get_field('opening_hours')) : ?>
			<div>
				<h3 class="text-xl font-bold mb-1">
					<?php _e('Godziny pracy', 'kantier'); ?>
				</h3>
				<?= $opening_hours; ?>
			</div>
		<?php endif; ?>

	</div>

	<div class="col-span-full md:col-span-6 lg:col-span-6 lg:col-start-7 observe faded-out">
		<?php if ($location = get_field('location')) : ?>
			<div id="map" class="w-full min-h-[450px] h-full isolate" data-coordinates="<?= $location; ?>">

			</div>
		<?php endif; ?>
	</div>

</section>