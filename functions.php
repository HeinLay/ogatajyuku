<?php
/**
 * bties functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ogatajyuku
 */

if ( ! function_exists( 'bties_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bties_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bties, use a find and replace
		 * to change 'bties' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bties', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bties' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bties_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bties_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bties_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bties_content_width', 640 );
}
add_action( 'after_setup_theme', 'bties_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bties_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bties' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bties' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bties_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bties_scripts() {
	wp_enqueue_style( 'bties-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'bties_scripts' );

/*
 * [template_uri]
 * Return template directry uri.
 * @return string
 */

function template_uri() {
    return get_template_directory_uri();
}

add_shortcode("template_uri", "template_uri");

/*p tag remove*/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'post_content', 'wpautop' );

/* Remove p tags from category description */
remove_filter('term_description','wpautop');

// breadcrumb
function the_breadcrumb()
{
  $showOnHome       = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter        = '&nbsp;>&nbsp;'; // delimiter between crumbs
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $home = 'トップ';
  $before      = '<span class="current">'; // tag before the current crumb
  $after       = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) :
    if ($showOnHome == 1) :
      echo '<div class="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
    endif;
  else :
    echo '<div class="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if (is_category()) :
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) :
        echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
      endif;
      echo $before . single_cat_title('', false) . $after;

    elseif (is_search()) :
      echo $before . '「' . get_search_query() . '」で検索した結果' . $after;

    elseif (is_day()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('j') . '日' . $after;

    elseif (is_month()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    elseif (is_year()) :
      echo $before . get_the_time('Y') . '年' . $after;

    elseif (is_single() && !is_attachment()) :
      if (get_post_type() != 'post') :
        $post_type = get_post_type_object(get_post_type());
        $slug      = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) :
          echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        endif;
      else :
        $cat  = get_the_category();
        $cat  = $cat[0];
        $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) :
          $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        endif;
        echo $cats;
        if ($showCurrent == 1) :
          echo $before . get_the_title() . $after;
        endif;
      endif;

    elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) :
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    elseif (is_attachment()) :
      $parent = get_post($post->post_parent);
      $cat    = get_the_category($parent->ID);
      $cat    = $cat[0];
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) :
        echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_page() && !$post->post_parent) :
      if ($showCurrent == 1) :
        echo $before . get_the_title() . $after;
      endif;

    elseif (is_page() && $post->post_parent) :
      $parent_id   = $post->post_parent;
      $breadcrumbs = array();
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) :
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs) - 1) :
          echo ' ';
        endif;

      endfor;
      if ($showCurrent == 1) :
        echo ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_tag()) :
      echo $before . '「' . single_tag_title('', false) . '」タグのついた記事' . $after;

    elseif (is_author()) :
      global $author;
      $userdata = get_userdata($author);
      echo $before . '「' . $userdata->display_name . '」による記事' . $after;

    elseif (is_404()) :
      echo $before . '404エラー' . $after;
    endif;

    // if (get_query_var('paged')) :
    //   if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
    //     echo ' (';
    //   endif;
		//
    //   echo get_query_var('paged') . 'ページ目';
    //   if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
    //     echo ')';
    //   endif;
		//
    // endif;
    echo '</div>';
  endif;
}

/* エディタースタイルの上書き設定 */
add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets' );
function gutenberg_stylesheets() {
	// editor-style.cssの設定
	$editor_style_url = get_theme_file_uri('/assets/css/btheme-editor.css');
	wp_enqueue_style( 'theme-editor-style', $editor_style_url );
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	// JavaScript
	// wp_enqueue_script( 'theme-gutenberg-js', get_theme_file_uri('/js/gutenberg.js'), array( 'jquery' ), false, true );
}
/**
 * Custom post type specific rewrite rules
 * @return wp_rewrite Rewrite rules handled by WordPress
 */
function cpt_rewrite_rules($wp_rewrite)
{
    // Here we're hardcoding the CPT in, article in this case
    $rules = cpt_generate_date_archives('works', $wp_rewrite);
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    return $wp_rewrite;
}
add_action('generate_rewrite_rules', 'cpt_rewrite_rules');

/**
 * Generate date archive rewrite rules for a given custom post type
 * @param  string $cpt slug of the custom post type
 * @return rules       returns a set of rewrite rules for WordPress to handle
 */
function cpt_generate_date_archives($cpt, $wp_rewrite)
{
    $rules = array();

    $post_type = get_post_type_object($cpt);
    $slug_archive = $post_type->has_archive;
    if ($slug_archive === false) {
        return $rules;
    }
    if ($slug_archive === true) {
        // Here's my edit to the original function, let's pick up
        // custom slug from the post type object if user has
        // specified one.
        $slug_archive = $post_type->rewrite['slug'];
    }

    $dates = array(
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum', 'day')
        ),
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum')
        ),
        array(
            'rule' => "([0-9]{4})",
            'vars' => array('year')
        )
    );

    foreach ($dates as $data) {
        $query = 'index.php?post_type='.$cpt;
        $rule = $slug_archive.'/'.$data['rule'];

        $i = 1;
        foreach ($data['vars'] as $var) {
            $query.= '&'.$var.'='.$wp_rewrite->preg_index($i);
            $i++;
        }

        $rules[$rule."/?$"] = $query;
        $rules[$rule."/feed/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/page/([0-9]{1,})/?$"] = $query."&paged=".$wp_rewrite->preg_index($i);
    }
    return $rules;
}

function wpse_62509_current_month_selector( $link_html ) {
    $current_month = date("F Y");
    if ( preg_match('/'.$current_month.'/i', $link_html ) )
        $link_html = preg_replace('/<li>/i', '<li class="current-month">', $link_html );
    return $link_html;
}
add_filter( 'get_archives_link', 'wpse_62509_current_month_selector' );

function home_uri() {
  return home_url();
}

add_shortcode("home_uri", "home_uri");

//register_acf_block_types
function register_acf_block_types() {
  // register button red.
  acf_register_block_type(array(
    'name'              => 'button red',
    'title'             => __('ボタン（赤・説明会用）'),
    'description'       => __('A custom red button'),
    'render_template'   => 'blocks/button-red.php',
    'category'          => 'layout',
    'icon'              => 'book-alt',
    'keywords'          => array( 'button', 'quote' ),
  ));

  // register button white small.
  acf_register_block_type(array(
    'name'              => 'button white small',
    'title'             => __('ボタン（白・小）'),
    'description'       => __('A custom white button small'),
    'render_template'   => 'blocks/button-white-small.php',
    'category'          => 'layout',
    'icon'              => 'book-alt',
    'keywords'          => array( 'button', 'quote' ),
  ));

  // register button white big.
  acf_register_block_type(array(
    'name'              => 'button white big',
    'title'             => __('ボタン（白・大）'),
    'description'       => __('A custom white button big'),
    'render_template'   => 'blocks/button-white-big.php',
    'category'          => 'layout',
    'icon'              => 'book-alt',
    'keywords'          => array( 'button', 'quote' ),
  ));

  // register custom table block.
  acf_register_block_type(array(
    'name'              => 'table block',
    'title'             => __('テーブル'),
    'description'       => __('A custom table block'),
    'render_template'   => 'blocks/table-blk.php',
    'category'          => 'layout',
    'icon'              => 'book-alt',
    'keywords'          => array( 'button', 'quote' ),
  ));

  // register custom text box.
  acf_register_block_type(array(
    'name'              => 'text box',
    'title'             => __('引用'),
    'description'       => __('A custom text box'),
    'render_template'   => 'blocks/text-box.php',
    'category'          => 'layout',
    'icon'              => 'book-alt',
    'keywords'          => array( 'button', 'quote' ),
  ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'register_acf_block_types');
}

/* is_mobile タブレット・PCとSPで分ける */
function is_mobile()
{
	$useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/' . implode('|', $useragents) . '/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/**password */

// Add taxonomy page
function pippin_add_term_password_field( $term ) {
	// Check for existing taxonomy meta for term ID.
	$term_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$term_id" ); ?>
	<div class="form-field">
		<label for="term_pass"><?php _e( 'Password protect this album','pippin' ); ?></label>
		<input type="text" name="term_meta[term_pass]" id="term_meta[term_pass]" value="<?php echo esc_attr( $term_meta['term_pass'] ) ? esc_attr( $term_meta['term_pass'] ) : ''; ?>">
		<p class="description"><?php _e( 'Enter a password to restrict this term','pippin' ); ?></p>
	</div>
<?php
}

add_action( 'category_add_form_fields', 'pippin_add_term_password_field', 10);

// Edit taxonomy page
function pippin_edit_term_password_field($term) {
	// Check for existing taxonomy meta for term ID.
	$term_id = $term->term_id;
	$term_meta = get_option( "taxonomy_$term_id" ); ?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="term_pass"><?php _e( 'Password protect this album','pippin' ); ?></label></th>
		<td>
			<input type="text" name="term_meta[term_pass]" id="term_meta[term_pass]" value="<?php echo esc_attr( $term_meta['term_pass'] ) ? esc_attr( $term_meta['term_pass'] ) : ''; ?>">
			<p class="description"><?php _e( 'Enter a password to restrict this term','pippin' ); ?></p>
		</td>
	</tr>
<?php
}

add_action( 'category_edit_form_fields', 'pippin_edit_term_password_field', 10);

// Save term passwords
function pippin_save_term_password( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$term_meta = get_option( "taxonomy_$term_id" );
		$term_keys = array_keys( $_POST['term_meta'] );
		foreach ( $term_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		// Save the option array.
		update_option( "taxonomy_$term_id", $term_meta );
	}
}

add_action( 'edited_category', 'pippin_save_term_password', 10);
add_action( 'create_category', 'pippin_save_term_password', 10);

function register_my_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'register_my_session');

// checks all of the terms attached to a post/page to see if any of them are password protected
function pippin_in_term_with_password($post_id = NULL) {
	if($post_id == NULL) {
		$post_id = get_the_ID();
	}
	$terms = get_the_terms($post_id, 'category');
	if($terms) {
		foreach($terms as $term) {
			$term_meta = get_option( "taxonomy_$term->term_id" );
			if($term_meta['term_pass'] != '') {
				if(pippin_validate_term_password($term_meta['term_pass'])) {
					// the password is valid so return false
					return false;
				}
				// this term has a password and the password is not valid, or hasn't been entered
				return true;
			}
		}
	}
	// if no terms, then post is not restricted
	return false;
}

// validates the password set in the $_SESSION var with the stored term password
function pippin_validate_term_password($term_pass) {

	// set the password to a SESSION var after entering
	if(isset($_POST['term_password_field'])) {
		$_SESSION['term_password'] = $_POST['term_password_field'];
	}

	// check the SESSION var against the term password
	if($_SESSION['term_password'] == $term_pass) {
		return true;
	}

	// if the password is not valid, return false
	return false;
}

// outputs the term password form
function pippin_term_password_form() {
	ob_start(); ?>
	<?php get_template_part('template-form', get_post_format()); ?>
	<?php
	return ob_get_clean();
}

add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
					$title = single_cat_title( '', false );
			} elseif ( is_tag() ) {
					$title = single_tag_title( '', false );
			} elseif ( is_author() ) {
					$title = '<span class="vcard">' . get_the_author() . '</span>' ;
			} elseif ( is_tax() ) { //for custom post types
					$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
			} elseif (is_post_type_archive()) {
					$title = post_type_archive_title( '', false );
			}
	return $title;
});

//総ページ数の取得 max_show_page_number('');
function max_show_page_number() {
  global $wp_query;
  $max_page = $wp_query->max_num_pages;
  echo $max_page;
}

//全●件中●件を表示 my_result_count();
function my_result_count() {
  global $wp_query;
  $paged = get_query_var( 'paged' ) - 1;
  $ppp   = get_query_var( 'posts_per_page' );
  $count = $total = $wp_query->post_count;
  $from  = 0;
  if ( 0 < $ppp ) {
  $total = $wp_query->found_posts;
  if ( 0 < $paged )
    $from  = $paged * $ppp;
  }
  printf(
  '<span class="page-count">全%1$s件中　%2$s%3$s件を表示</span>',
  $total,
  ( 1 < $count ? ($from + 1 . '〜') : '' ),
  ($from + $count )
  );
}

# ---------------------------------------------------
# REMOVE SCREEN READER TEXT FROM POST PAGINATION
# ---------------------------------------------------
function sanitize_pagination($content) {
    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
    return $content;
}

add_action('navigation_markup_template', 'sanitize_pagination');

# ---------------------------------------------------
# 投稿画面でSEOの表示を非表示
# ---------------------------------------------------
function wp_custom_admin_css() { ?>
  <style type="text/css">
  #aioseo-settings {
    display:none;
  }
  </style>
  <?php }
  add_action('admin_head', 'wp_custom_admin_css', 100);

// hide update notifications
function remove_core_updates(){
  global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
// add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
// add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes

//ダッシュボードにある項目を消す
function remove_dashboard_widget() {
  remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); //サイトヘルスステータス
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); //アクティビティ
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); //クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); //WordPressニュース
  remove_action( 'welcome_panel', 'wp_welcome_panel' ); //ようこそ
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );


/**
 * Login page customize.
 *
 */
function theme_login_style() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
      width: 100%;
      background-size: contain;
      background-repeat: no-repeat;
      padding-bottom: 10px;
    }
  </style>
  <?php }
add_action('login_enqueue_scripts', 'theme_login_style');