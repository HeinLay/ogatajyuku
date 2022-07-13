<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$btn_text = get_field('btn_text')?: 'テキストが入ります';
$btn_url = get_field('btn_url')?: '#';
$btn_align = get_field('btn_align');
?>
<div class="clearfix">
  <a href="<?php echo $btn_url; ?>"  class="red-btn hover-effect <?php if ($btn_align) : echo $btn_align; endif; ?>" >
    <span><?php echo $btn_text ?></span>
  </a>
</div>
