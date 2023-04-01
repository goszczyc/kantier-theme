<footer>
	<div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 container mx-auto px-[15px] mt-12 gap-[1.875rem]">
		<?php //Logo, address 
		?>
		<div class="col-span-1 lg:col-span-1 observe faded-out">
			<?php if ($logo = get_field('logo', 'options')) : ?>

				<a href="<?= get_home_url(); ?>" class="block mb-12">
					<?= wp_get_attachment_image($logo, 'full', '', ['class' => 'w-full h-auto max-w-[250px] ']); ?>
				</a>

			<?php endif; ?>
			<?php if ($footer_contact = get_field('footer_contact', 'options')) : ?>

				<p class="text-xl font-bold mb-2"><?= $footer_contact['company'] ?></p>
				<address class="text-base leading-tight not-italic">
					<?= $footer_contact['address']; ?>
				</address>
				<p class="text-base leading-tight">
					tel. <a href="tel: <?= $footer_contact['phone']; ?>"><?= $footer_contact['phone']; ?></a>
				</p>
				<p class="text-base leading-tight mb-6">
					e-mail: <a href="mailto: <?= $footer_contact['email']; ?>" class="text-primary hover:text-black">
						<?= $footer_contact['email']; ?>
					</a>
				</p>
				<p class="text-base leading-tight">
					<?= $footer_contact['person']; ?>
				</p>
				<?php if ($footer_contact['person_email']) : ?>
					<p class="text-base leading-tight mb-6">
						e-mail: <a href="mailto: <?= $footer_contact['person_email']; ?>" class="text-primary hover:text-black">
							<?= $footer_contact['person_email']; ?>
						</a>
					</p>
				<?php endif; ?>

				<?php if ($fb_link = $footer_contact['fb_link']) : ?>

					<a href="<?= $fb_link['url']; ?>" class="flex items-center text-[#3f67ab] text-sm font-bold" target="_blank">
						<img src="<?= get_template_directory_uri(); ?>/dist/images/fb-logo.svg" alt="" class="w-3 mr-2">
						<?= $fb_link['title']; ?>
					</a>

				<?php endif; ?>
			<?php endif; ?>
		</div>

		<?php //Menu 
		?>

		<div class="col-span-1 lg:col-span-1 mt-6 sm:pt-[20.6%] sm:mt-12 observe faded-out">
			<?php get_template_part('/components/footer-menu', '', ['menu' => 'footer-menu']); ?>
		</div>

		<div class="sm:col-span-2 lg:col-span-1 max-lg:row-start-1 observe faded-out">
			<?php
			$form_class_list = 'grid-cols-1 xs:grid-cols-2 gap-[30px] xs:col-span-2 relative pb-11 text-base leading-none mb-0.5 font-bold w-full border-b-2 border-solid border-gray p-1 text-sm focus-border-primary outline-none resize-none mt-3 mb-6 mb-[78px] leading-none mb-0.5 gap-[15px] text-2xs border-form-gray font-light text-[#787878]';
			?>
			<h3 class="text-xl font-bold mb-6">Formularz kontaktowy</h3>
			<?= do_shortcode('[contact-form-7 id="116" title="Formularz - stopka"]'); ?>

		</div>
	</div>
	<div class="container px-[15px] mx-auto flex flex-col sm:flex-row items-center justify-between mt-8 py-2 border-t border-solid border-l-gray observe faded-out">
		<div class=" border-b-primary">

		</div>
		<p class="my-6 text-sm text-gray">
			&copy; <?= date('Y'); ?> Wszelkie prawa zastrzeżone - Kantier Żurawie Wieżowe Sp. z.o.o.
		</p>
		<a href="https://everywhere.pl" class="">
			<img src="<?= get_template_directory_uri(); ?>/dist/images/everywhere-logo.svg" alt="" class="w-14">
		</a>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>