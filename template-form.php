<form id="term_password" class="term-password" action="" method="POST">
	<?php $terms = get_the_terms($post_id, 'category');
		if($terms) {
			foreach($terms as $term) {
				$term_meta = get_option( "taxonomy_$term->term_id" );
			}
		} ?>
	<label for="term_password_field">パスワードを入力して下さい</label>
	<input name="term_password_field" id="term_password_field" class="term-password-field" type="password" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required"/><br>
	<?php if(($_SESSION['term_password'] != $term_meta['term_pass']) && ($_POST['term_password_field'] != "")) { ?>
		<div class="error-msg"><?php echo "パスワードが間違っています。もう一度入力してください。"; ?></div>
		<script>
		createDiv( );
		</script>
 	<?php }  ?>
	<input type="submit" value="ログイン" id="term_submit" class="submit-btn"/>
</form>
<div class="w-880">
	<?php
		$your_query = new WP_Query( 'pagename=course' );
		while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
		endwhile;
		wp_reset_postdata();
	?>
</div>