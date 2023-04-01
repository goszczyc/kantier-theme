<?php
$args = wp_parse_args($args, array(
	'menu' => null,
	'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'bg-primary text-white' : '';
?>
<ul class="flex">
	<?php foreach ($menu['menus'] as $item) : ?>
		<li class="relative mr-3 last:mr-0">
			<a href="<?php echo $item['url'] ?>" class="inline-block text-sm text-primary hover:text-black transition-colors">
				<?php echo $item['title'] ?>
			</a>

		</li>
	<?php endforeach; ?>
</ul>