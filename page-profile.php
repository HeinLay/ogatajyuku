<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ogatajyuku
 */

get_header();
/*
Template Name: 小縣新プロフィール
*/
?>

<div class="page-ttl">
  <h3 class="ttl-txt"><?php the_title(); ?></h3>
</div>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb clearfix">
  <?php the_breadcrumb(); ?>
</div>

<!-- =============== content ============== -->
<div id="profile" class="pg-content">
  <div class="sec-profile">
    <div class="w-880">
      <h2 class="white-ttl">貴方の人生のセコンドになりたい</h2>
      <div class="profile-info">
        <div class="profile-img">
          <img src="<?php print get_template_directory_uri(); ?>/assets/img/profile/img_profile.jpg" alt="">
        </div>
        <div class="profile-txt">
        私には、元ボクシング全日本王者、世界ランカーといった経歴があります。<br>
        そして、本気で人生を懸けたボクシングで数々の成功体験と挫折の経験をしてきました。<br><br>世界王者だけを夢見て、13歳からボクシングを始め、名古屋の名門ジムに入門。高校生の時は、愛知県で48年ぶりに全国を制覇し、世界王者を期待され13年間ボクシングに没頭しました。<br>
        26歳の時にはタイトルマッチが決定しましたが、その直後に網膜剥離が発覚、視界の4分の3を失い失明寸前でライセンスを剥奪され引退となりました。
        </div>
      </div>
      <div class="txt-blk">人生その物と言えるボクシングを失い失意のどん底を経験した私は、12年間の地獄のバーンアウトを経験致しました。<br>何をしても虚しい、何をしても熱くなれない。<br>
      自分は誰なのか？何がしたいのか？<br>そんな迷いの中、心は荒れ改名、宗教、逮捕、父親の死、倒産、度重なる試練に見舞われました。本気でやって来た事ですから、本気で転びました。本気でやって来たからこそ、本当の喜びと痛みに触れる事ができました。ボクシングに没頭した13年間。生きるとは、人生とは、仕事とはを探究してきた15年間、この全ての経験を生かして貴方が人生で最高に輝ける様、精一杯サポート致します。
      </div>
    </div>
    <div class="left-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_left.svg" alt=""></div>
      <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_left.svg" alt=""></div>
      <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_left.svg" alt=""></div>
      <div class="steam steam-04"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_left.svg" alt=""></div>
    </div>
  </div>
  <!-- ./ sec-profile -->
  <div class="sec-about">
    <div class="about-ttl">
      <h2 class="white-ttl">小縣塾であなたに伝えたい事</h2>
    </div>
    <div class="about-info">
      <div class="w-880">
        <div class="txt01 s-mb-60">小縣塾（おがたじゅく）は、他にあるセミナーや講義とは一線を画します。<br>学ぶではなく【捨てる】【磨く】事にフォーカスするビジネス道場です。<br><br>
        貴方の本音と本質に向き合い人生のステージを大きく上げていきます。<br>言葉を響かせ言霊を放つ、人を惚れさせ人心掌握をしていく、人の心の見抜き方を実践していく【超伝達能力】変化し続ける覚悟、生きる馬力、人生の殻を破り続ける【成果を叩き出す王者のマインド】等どのセミナーや講義にもない正に、本質と向き合い人生を大きく変化させていく、超実践方ビジネス道場です。本気で人生を考える貴方だから私が”人生のセコンド”になります。<br><br>あなたの人生の成功の為に、あなたがステージアップする為に、本当に大切な事を小縣と探求して参りましょう。
        </div>
        <div class="bio-blk">
          <h3 class="white-ttl">小縣 新（おがた しん）略歴</h3>
          <?php while( have_posts() ): the_post() ;?>
            <?php $bio_txt = get_field('bio_txt');
            if($bio_txt){ ?>
              <div class="bio-box">
                <?php echo $bio_txt; ?>
              </div>
            <?php } ?>
          <?php endwhile;?>
        </div>
      </div>
      <div class="right-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
      <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
      <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
      <div class="steam steam-04"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/profile_right.svg" alt=""></div>
    </div>
    </div>
  </div>
  <!-- ./ sec-about -->
  <div class="sec-media">
    <div class="media-ttl w-880">
      <h2>メディア活動</h2>
    </div>
    <div class="media-info">
      <div class="w-880">
        <div class="publishing-blk">
          <h2 class="white-ttl">出版</h2>
          <div class="publishing-info">
            <?php query_posts('posts_per_page=2&post_type=publishing&order=DESC&paged='.$paged); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php if(have_rows('publish_post', $page_id)): ?>
                  <?php while(have_rows('publish_post', $page_id)): the_row(); $i++;
                    $title = get_sub_field('post_ttl');
                    $img = get_sub_field('post_img');
                    $link = get_sub_field('post_link')?: '#';
                    $name = get_sub_field('post_name');
                    $date = get_sub_field('publish_date');
                    ?>
                    <div class="publishing-item">
                      <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="img">
                        <img src="<?php echo $img; ?>" alt="">
                      </a>
                      <div class="txt">
                        <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="ttl"><?php echo $title; ?></a>
                        <div class="name"><?php echo $name; ?></div>
                        <div class="date"><?php echo $date; ?></div>
                      </div>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
        <div class="youtube-blk">
          <h2 class="white-ttl">YouTube 小縣塾TV</h2>
          <div class="youtube-list">
            <?php query_posts('posts_per_page=6&post_type=youtube&order=DESC&paged='.$paged); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php if(have_rows('youtube_row', $page_id)): ?>
                  <?php while(have_rows('youtube_row', $page_id)): the_row(); $i++;
                    $url = get_sub_field('youtube_url') ?: '#';
                    $cname = get_sub_field('video_ttl');
                    $hname = get_sub_field('cus_name');
                    ?>
                    <div class="youtube-item">
                      <div class="video">
                        <?php echo $url; ?>
                      </div>
                      <div class="txt s-txt-center">
                        <div class="link">
                          <p class="c-name"><?php echo $cname; ?></p>
                          <p class="h-name"><?php echo $hname; ?></p>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
          <div class="cmn-ttl01 app-ttl s-txt-center"><span>他、多数出演！</span></div>
          <a href="https://www.youtube.com/channel/UCOy0f_rqO5eQDx9osvHy3GA" target="_blank" rel="noopener noreferrer" class="white-btn-big hover-effect btn-center"><span>小縣新公式チャンネル　モンスターパワーチャンネル</span></a>
        </div>
      </div>
    </div>
    <div class="delivery-blk">
      <div class="deli-inner w-880">
        <div class="cmn-ttl01 black-ttl deli-ttl s-txt-center"><span>毎日、魂のお手紙配信！</span></div>
        <a href="https://monsterpowers.com/fx/ep1G88" target="_blank" rel="noopener noreferrer" class="white-btn-big hover-effect btn-center"><span>メルマガ登録はこちらから</span></a>
      </div>
    </div>
  </div>
  <!-- ./ sec-media -->
</div>
<!-- ./ pg-content -->

<?php
get_footer();
