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
$cmp_name = get_field('cmp_name')?: 'テキストが入ります';
$address = get_field('address')?: 'テキストが入ります';
$ceo = get_field('ceo')?: 'テキストが入ります';
$establish_year = get_field('establish_year')?: 'テキストが入ります';
$bussiness_content = get_field('bussiness_content')?: 'テキストが入ります';
?>
<div class="clearfix table-blk">
  <div class="tbl-inner">
    <table class="cmp-table">
      <tbody>
        <?php if ($cmp_name) {?>
          <tr>
            <td>会社名</td>
            <td><?php echo $cmp_name ?></td>
          </tr>
        <?php } ?>
        <?php if ($address) {?>
          <tr>
            <td>住所</td>
            <td><?php echo $address ?></td>
          </tr>
        <?php } ?>
        <?php if ($ceo) {?>
          <tr>
            <td>代表取締役</td>
            <td><?php echo $ceo ?></td>
          </tr>
        <?php } ?>
        <?php if ($establish_year) {?>
          <tr>
            <td>設立</td>
            <td><?php echo $establish_year ?></td>
          </tr>
        <?php } ?>
        <?php if ($bussiness_content) {?>
          <tr>
            <td>事業内容</td>
            <td><?php echo $bussiness_content ?></td>
          </tr>
        <?php } ?>
      </tbody>  
    </table>
  </div>
</div>
