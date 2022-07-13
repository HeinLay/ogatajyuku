<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ogatajyuku
 */

get_header();
?>

<!-- ===============  main visual ============== -->
<div class="mainvisual<?php query_posts('post_type=news'); ?>
  <?php if (have_posts()) : ?> mv-height<?php endif; ?>
  <?php wp_reset_query(); ?>">
  <div class="w-1077 mv-inner">
    <div class="visual-img01">
      <img src="<?php print get_template_directory_uri(); ?>/assets/img/visual_img01.png" alt="小縣塾（おがたじゅく）">
    </div>
    <div class="visual-img02">
      <img src="<?php print get_template_directory_uri(); ?>/assets/img/visual_img02.png" alt="人を制する者は人生を制す 人心掌握の本質を身につける！">
    </div>
  </div>
  <a href="#sec01" class="scroll-btn s-pc">
    <span>scroll</span>
  </a>
  <?php require get_template_directory() . '/mv_smoke.php'; ?>
</div>
<!-- ./main visual -->

<?php query_posts('posts_per_page=1&post_type=news&order=DESC&paged=' . $paged); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="news">
      <div class="inner w-1077">
        <div class="news-txt-img">
          <img src="<?php print get_template_directory_uri(); ?>/assets/img/news_txt.png" alt="NEWS">
        </div>
        <div class="news-btn s-pc">お知らせ</div>
        <div class="news-info">
          <div class="news-date"><?php the_time('Y.m.d'); ?></div>
          <div class="news-txt">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
        <a href="<?php bloginfo('url'); ?>/news/" class="more-btn">
          <span>もっと見る</span>
        </a>
      </div>
    </div>
    <!-- ./news -->
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<!-- =============== content ============== -->
<div class="content">
  <div class="bg-black lazy" id="sec01">
    <div class="business-boxing lazy">
      <div class="w-1077">
        <h3 class="cmn-ttl">人を制する者は人生を制する</h3>
        <p class="txt">
        お金、人脈、愛情、チャンス人生に必要な物は全て”人”が運んでくる。<br>小縣塾では”人を制する者は、人生を制する”を<br class="s-pc">ビジョンに掲げ、人心掌握の本質を身につけていきます。<br>人の内面を見抜き、自らの魅力を最大化し影響力を持っていく（超伝達能力）自分の本当にやるべき使命を見つけ人生に大きなエンジンを積む（自分軸の確立）という人間の本質的な事を磨き、人生のステージを最大化する事を目的としています。
        </p>
      </div>
      <div class="left-steam-box">
        <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_left.svg" alt=""></div>
        <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_left.svg" alt=""></div>
        <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_left.svg" alt=""></div>
        
      </div>
      <div class="right-steam-box">
        <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
        <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
        <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
      </div>
    </div>
  </div>
  <!-- ./business-boxing -->

  <div class="sec-strength lazy">
    <div class="bg-strength lazy">
      <div class="inner w-1077">
        <h3 class="cmn-ttl">人を惚れさせる、<br class="s-pc">人を骨抜きにする人心掌握</h3>
        <div class="strength-list">
          <div class="strength-item">
            <h3>
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/strength_ttl01.png" alt="私、小縣新は 13年のボクシング人生で70戦を戦いました。">
            </h3>
            <p>私は、ボクシングに13年間打ち込んで来ました。<br>世界ランカー、日本王者を獲得するキャリアの中で計17万ラウンドを経験、人と人とのギリギリの駆引は相手の本音をどう読むか？<br>”人の心の見抜き方”を徹底的に磨きました。その後、経営者として15年間で10万人を接客して”人心掌握の本質”身につけました。<br>この経験で人の心の根本的なポイントと、物事自体が上手くいく根本的なポイントを掴むことができました。この自らの経験を生かし、貴方を魅力ある真の帝王（リーダー）に導きます。</p>
          </div>
          <div class="strength-item">
            <h3>
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/strength_ttl02.png" alt="強さの本質とは何か？">
            </h3>
            <p>自分のやるべき使命を生きる。<br>
            私は、13年間のボクシング人生を通して沢山の成功と挫折を繰り返してきました。<br>その経験が私の基礎を作ってくれ、今でも本気で一つの事に打ち込むと言う”断固たる決意”と”継続する力”を作ってくれたと確信しています。<br>
            しかし、私が根性があったからなのか？私は、本当に自らがやるべき事に出会えたなら、誰もが、計り知れない力と馬力を発揮すると確信しています。その、本当の使命と自分軸に出会えるのが小縣塾です。<br>貴方のブレない心、泰然自若とした在り方。<br>そして、やるべき使命は真の帝王（リーダー）の在り方ではないでしょうか。
            </p>
          </div>
        </div>
        <a href="<?php bloginfo('url'); ?>/profile/" class="cmn-btn01"><span>小縣新プロフィール</span></a>
      </div>
    </div>
  </div>
  <!-- ./sec-strength -->

  <div class="sec-benefit lazy">
    <div class="bg-benefit lazy">
      <div class="inner w-1077">
        <h3 class="cmn-ttl">小縣新が人生のセコンドを努める<br>6つの利益</h3>
        <ul class="benefit-list">
          <li>
            <div class="num-img number">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num01.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num01.png" alt="1" />
            </div>
            <div class="benefit-data">
              <h5 class="pr-first"><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl01.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl01.png" alt="影響力 人の心に響く「言霊」を放ち影響力を持つ" /></h5>
              <p>心にダイレクトに響く言霊を発する事で、人を大きく動かす圧倒的影響力を身につけて行きます。
              </p>
            </div>
          </li>
          <li>
            <div class="num-img">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num02.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num02.png" alt="2" />
            </div>
            <div class="benefit-data">
              <h5 class="pr-second"><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl02.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl02.png" alt="指導力 トップ指導者の人の能力を引き出す技術" /></h5>
              <p>人の課題や本当に大切な部分を見抜き、その人にあったアドバイスが出来る様になります。正にトップトレーナーの千里眼を身につけて行きます。
              </p>
            </div>
          </li>
          <li>
            <div class="num-img">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num03.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num03.png" alt="3" />
            </div>
            <div class="benefit-data">
              <h5 class="m-top"><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl03.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl03.png" alt="人心掌握 人の心の見抜き方を身につける" /></h5>
              <p>ボクシング７０戦を戦い、生死をかけた経験で、人が何を感じて、どう行動して行くのかを身を持って体験してきました。<br>エネルギーの読み方、本音の見抜き方を徹底的に磨いて行きます。
              </p>
            </div>
          </li>
          <li>
            <div class="num-img">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num04.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num04.png" alt="4" />
            </div>
            <div class="benefit-data">
              <h5 class="pr-fourth"><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl04.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl04.png" alt="自己変革 人生の殻を破り突き抜ける事が出来る" /></h5>
              <p>人生のエンジンを積み替えます。<br>本当のやるべき使命に出えた時に、貴方は人生の景色が変わるでしょう。
              </p>
            </div>
          </li>
          <li>
            <div class="num-img">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num05.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num05.png" alt="5" />
            </div>
            <div class="benefit-data">
              <h5 class="m-top"><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl05.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl05.png" alt="人の理解 人間関係が根底から改善される" /></h5>
              <p>職場の人間関係、夫婦の関係、人は同じ問題、スパイラルから抜け出せません。<br>今の真の課題に触れ、人間関係を根底から改善して行きます。
              </p>
            </div>
          </li>
          <li>
            <div class="num-img">
              <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_num06.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_num06.png" alt="6" />
            </div>
            <div class="benefit-data">
              <h5><img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl06.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/benefit_ttl06.png" alt="馬力 生きる馬力やり切るエンジンを積み替える" /></h5>
              <p>人生のエンジンを積み替えます。<br>本当のやるべき使命に出えた時に、貴方は人生の景色が変わるでしょう。
              </p>
            </div>
          </li>
        </ul>
        <a href="<?php bloginfo('url'); ?>/voice/" class="cmn-btn01"><span>受講者の声を見る</span></a>
        <a href="<?php bloginfo('url'); ?>/entry/" class="cmn-btn02 benefit-btn"><span>体験会の日程・参加のお申し込みはこちらから</span></a>
      </div>
    </div>
  </div>
  <!-- ./sec-benefit -->

  <div class="practice-sec lazy">
    <div class="practice-inner w-1077 lazy">
      <h3 class="cmn-ttl">小縣塾で実践すること</h3>
      <div class="practice-sub-ttl">
      学ぶではなく捨てると磨くにフォーカス<br>常に実践で現実を変えていく
      </div>
      <p class="practice-txt">
      繰り返し繰り返しセンターリングをしていく。<br>「小さいことを重ねることが、とんでもないところへ行くただひとつの道」イチロー選手の名言ですね。<br>
      月に1度の講義（対面）と1対1の対面（Zoom）そして実社会で実践。<br>人は間を置いた反復で物事を吸収していきます。<br>貴方が、本当に成長するのは一瞬ですが、それも間を置いた反復の末にいきなり訪れます。小縣塾のオリジナルメソッドに取り組んで行く過程で、何度も何度も反復して人生のステージが少しずつ高みに登っていきます。<br>気がついた時には、全く違うステージへ到達している事でしょう。
      </p>
    </div>
  </div>
  <!-- ./practice-sec -->

  <div class="message-coach lazy">
    <div class="left-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
      <div class="steam steam-04"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
      <div class="steam steam-05"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
    </div>
    <div class="inner w-1077">
      <div class="message-coach-ttl">
        <img class="lazyload" data-src="<?php print get_template_directory_uri(); ?>/assets/img/mess_coach.png" alt="小縣の言霊 メンタルコーチ">
      </div>
      <div class="message-coach-blk">
        <div class="message lazy">
          <div class="message-inner">
            <h4 class="inner-ttl">各Roundにわけた講義を、3年間のカリキュラムでお伝えします</h4>
            <p>
              結果を出すための本質について講義致します。人生に本当に勝って行くには、あなたの人生をどうより良く生きていくか？小縣の全力の講義で魂を揺さぶり、貴方の実を変えて行きます。<br>
              人生を変えるきっかけになって頂ける事間違いありません。
            </p>
          </div>
        </div>
        <div class="coach lazy">
          <div class="coach-inner">
            <h4 class="inner-ttl">小縣が人生のセコンドを努めます</h4>
            <p>
              Zoomを使ったコンサルティングでは、悩みや疑問を解消します。<br>
              メンタル、ビジネス、人間関係の相談、自分軸の確立方法や、心の見抜き方、一人ひとりに寄り添ったコーチング、ティーチングを行います。
            </p>
          </div>
        </div>
      </div>
      <div class="message-coach-btn">
        <a href="/about/" class="cmn-btn01"><span>小縣塾実践会について詳しく知る</span></a>
        <a href="<?php bloginfo('url'); ?>/about/#instructor" class="cmn-btn01"><span>講師紹介</span></a>
      </div>
      <a href="<?php bloginfo('url'); ?>/entry/" class="cmn-btn02"><span>体験会の日程・参加申込はこちらから</span></a>
    </div>
  </div>
  <!-- ./message-coach -->

  <div class="sec-voice lazy">
    <div class="inner w-1077">
      <h3 class="cmn-ttl">受講者の声</h3>
      <ul class="txt-gp">
        <li>
          <img class="lazyload"  data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt01.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt01.png" alt="従業員に思いが伝わる様になった" />
        </li>
        <li>
          <img class="lazyload"  data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt02.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt02.png" alt="自分の殻を破りステージが変わった" />
        </li>
        <li>
          <img class="lazyload"  data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt03.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt03.png" alt="本当にやりたい事が明確になった" />
        </li>
        <li>
          <img class="lazyload"  data-src="<?php print get_template_directory_uri(); ?>/assets/img/img_txt04.png" srcset="<?php print get_template_directory_uri(); ?>/assets/img/img_txt04.png" alt="商品が売れるようになった" />
        </li>
      </ul>
      <p class="txt w-800">
        小縣塾（おがたじゅく）では、それぞれの分野で活躍するリーダー・また挑戦する方々が受講され、共に学びを深めております。これまでにお寄せいただいた、受講者の声を紹介します。
      </p>
      <?php
      $i = 0;
      $page = get_page_by_path('topcontent', null, 'top_content');
      $custom = get_post_meta($page->ID, 'custom', true);
      $page_id = $page->ID;
      if (have_rows('url_blk', $page_id)) : ?>
        <?php while (have_rows('url_blk', $page_id)) : the_row();
          $i++; ?>
          <div class="voice-video">
            <iframe src="<?php the_sub_field('youtube_url'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if (have_rows('top_cus_voice_blk', $page_id)) : ?>
        <ul class="link-gp">
          <?php while (have_rows('top_cus_voice_blk', $page_id)) : the_row();
            $i++; ?>
            <li>
              <a href="<?php the_sub_field('cus_url'); ?>">
                <?php the_sub_field('cus_ttl'); ?><br><?php the_sub_field('cus_name'); ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      <a href="<?php bloginfo('url'); ?>/voice/" class="cmn-btn01"><span>受講者の声一覧</span></a>
    </div>
    <div class="left-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_left_svg.svg" alt=""></div>
      <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_left_svg.svg" alt=""></div>
      <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_left_svg.svg" alt=""></div>
    </div>
    <div class="right-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_right_svg.svg" alt=""></div>
      <div class="steam steam-02"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_right_svg.svg" alt=""></div>
      <div class="steam steam-03"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/voice_right_svg.svg" alt=""></div>
    </div>
  </div>
  <!-- ./sec-voice -->
</div>
<!-- ./content -->
<?php
get_footer();
