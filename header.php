<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/dist/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/dist/images/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri(); ?>/dist/images/site.webmanifest">
	<title><?php echo wp_title(); ?></title>
	<?php wp_head(); ?>

</head>


<body <?php body_class('relative'); ?>>


	<header class="fixed top-0 left-0 w-full bg-l-gray z-[1000] font-kranto">
		<div class="header container mx-auto px-[15px] py-4 flex items-center justify-between transition-all duration-300">
			<?php if ($logo = get_field('logo', 'options')) : ?>

				<a href="<?= get_home_url(); ?>">
					<?= wp_get_attachment_image($logo, 'full', '', ['class' => 'logo w-[240px] md:w-[120px] lg:w-[240px] transition-all duration-300']); ?>
				</a>

			<?php endif; ?>
			<button id="burger" class="burger">
				<div class="burger__bar transition"></div>
			</button>
			<nav id="header-nav" class="main-menu">
				<?php get_template_part('/components/main-menu', '', ['menu' => 'main-nav']); ?>

				<?php if ($fb_link = get_field('fb_link', 'options')) : ?>

					<a href="<?= $fb_link['url']; ?>" class="flex items-center text-[#3f67ab] mx-4 my-5 md:my-0 text-base" target="_blank">
						<?php if ($fb_logo = get_field('fb_logo', 'options')) : ?>

							<?= wp_get_attachment_image($fb_logo, '', '', ['class' => 'w-3 mr-[11px]']); ?>

							<span class="max-w-[95px] leading-none font-bold"><?= $fb_link['title']; ?></span>
						<?php endif; ?>
					</a>

				<?php endif; ?>
				<?php if (($other_link = get_field('other_link', 'options')) && ($other_logo = get_field('other_logo', 'options'))) : ?>

					<div class="flex flex-col">
						<span class=" text-xs mb-0.5">Jesteśmy dystrybutorem</span>
						<?= wp_get_attachment_image($other_logo, 'full', '', ['class' => 'saez w-[60px] sm:w-[80px] md:w-[120px] lg:w-[160px] transition-all duration-300']); ?>
					</div>

				<?php endif; ?>
			</nav>
		</div>
	</header>


	<span class="block absolute left-1/4 top-52 bottom-52 w-[1px] bg-l-gray -translate-x-1/2 -z-10"></span>
	<span class="block absolute left-1/2 top-52 bottom-52 w-[1px] bg-l-gray -translate-x-1/2 -z-10"></span>
	<span class="block absolute right-1/4 top-52 bottom-52 w-[1px] bg-l-gray translate-x-1/2 -z-10"></span>