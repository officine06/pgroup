<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Praxi_Lavoro
 */

$background_section = get_sub_field('background_section');
$title_section = get_sub_field('title_section');
$title_color = get_sub_field('title_color');
$title_alignment = get_sub_field('title_alignment');
$text = get_sub_field('text');
$logo = get_sub_field('logo');
$illustration = get_sub_field('illustration');
?>

<!-- Section Hero -->
<section class="section--content section--content-hero" style="background-color: <?php echo $background_section; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-7 medium-10 small-12 column">
				<div class="title--section title--section-<?php echo $title_alignment; ?>">
					<h1 style="color: <?php echo $title_color; ?>"><?php echo $title_section ?></h1>
					<?php if($text): ?>
						<div class="paragraph">
							<?php echo $text; ?>
						</div>
					<?php endif; ?>
					<?php if($logo): ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
					<?php endif; ?>
				</div>
			</div>
			<?php if($illustration): ?>
				<div class="large-5 medium-2 small-12 column">
					<div class="illustration--block">
						<img class="illustration"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="<?php echo $illustration['url'];?>" alt="<?php echo $illustration['alt']; ?>">
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>