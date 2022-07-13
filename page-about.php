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
Template Name: 小縣塾とは
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
<div id="service" class="pg-content">
  <div class="bg-white">
    <h2 class="ttl-blk s-txt-center">圧倒的人間力を身につけ人生のステージを上げる<br class="s-pc">超実践型ビジネス道場です</h2>
  </div>
  <!-- ./ bg-white -->
  <div class="sec-problem">
    <div class="problem-inner w-1077">
      <h2 class="white-ttl">こんなお悩みを解決に導きます</h2>
      <div class="problem-list">
        <div class="s-txt-center problem-txt">人心掌握を身につけたい</div>
        <div class="s-txt-center problem-txt">経営者としての<br class="s-pc">影響力や魅力をあげたい</div>
        <div class="s-txt-center problem-txt">人生をかけてやりたい<br class="s-pc">事を見つけたい</div>
        <div class="s-txt-center problem-txt">社員・部下の心をつかみたい</div>
        <div class="s-txt-center problem-txt">家族・パートナーとの絆を<br class="s-pc">深めたい</div>
        <div class="s-txt-center problem-txt">馬力をつけたい</div>
        <div class="s-txt-center problem-txt">あなたから買いたい！<br class="s-pc">と言われたい</div>
        <div class="s-txt-center problem-txt">信頼できる<br class="s-pc">アドバイザーがほしい</div>
        <div class="s-txt-center problem-txt">自分軸を身につけたい</div>
      </div>
      <a href="<?php bloginfo('url'); ?>/voice/" class="white-btn-big hover-effect btn-center"><span>受講者の声を見る</span></a>
    </div>
  </div>
  <!-- ./ sec-problem -->
  <div class="sec-power">
    <div class="power-inner w-880">
      <h2 class="white-ttl">なぜ圧倒的人間力が身につくのか</h2>
      <div class="power-txt">小縣塾（おがたじゅく）では次の５つの要素を、繰り返し実践し、磨き、捨て続け、本質を探究する中で人生、ビジネスのステージを上げていきます。</div>
      <div class="power-img">
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/service/img_power.png" alt="成長の過程">
      </div>
      <div class="power-list">
        <div class="power-item">
          <div class="item-ttl">言葉<span> - 超伝達能力 -</span></div>
          <div class="item-txt">人を根本的に理解して、言葉を相手の心にダイレクトに響かせていきます。影響力とは話し方ではなくは、在り方その物です。貴方の言霊が相手の行動を人生を変えます。</div>
        </div>
        <div class="power-item">
          <div class="item-ttl">愛情<span> - 常勝思考 -</span></div>
          <div class="item-txt">お金、愛情、人脈、チャンスを物にしていきます。貴方の影響力で少しずつチャンスの輪をスケールアップしていきます！</div>
        </div>
        <div class="power-item">
          <div class="item-ttl">行動<span> - ラッシュ -</span></div>
          <div class="item-txt">運は動より生ず。小縣塾は「ビジネス道場」兎に角、何度も動き何度も挑戦して、身につけていきます。行動がないから失敗の数も少ない、失敗が少ないから成功もしない、行動力を磨きます。</div>
        </div>
        <div class="power-item">
          <div class="item-ttl">知性<span> - 自己変革 -</span></div>
          <div class="item-txt">一生懸命行動した末に、必ず上手く行かない事や自分の課題の本質が見えてきます。その課題を小縣と一緒に探していきましょう。ここを乗り越えることが人の根本的な成長につながります。目の前の現実が変わらないのはこの部分を明確に捉えていないからです。</div>
        </div>
        <div class="power-item">
          <div class="item-ttl">王者の心得<span> - 帝王学 -</span></div>
          <div class="item-txt">行動し、課題を乗り越え、一段上のステージの魅力を出していきます。貴方の魅力はまるでボクサーがベルトを取った後に「見える世界」のように、全く違う次元に到達していきます。</div>
        </div>
      </div>
      <a href="<?php bloginfo('url'); ?>/profile/" class="white-btn-big hover-effect btn-center"><span>小縣新プロフィールはこちら</span></a>
      <a href="<?php bloginfo('url'); ?>/entry/" class="red-btn hover-effect btn-center"><span>体験会の日程・参加のお申し込みはこちらから</span></a>
    </div>
  </div>
  <!-- ./ sec-power -->
  <div id="visionmap" class="sec-vision">
    <div class="vision-inner w-880">
      <h2>小縣塾のビジョンマップ</h2>
      <div class="vision-txt">
        次に実際のカリキュラムをご紹介します。<br>
        １ヶ月を以下のサイクルとし、繰り返し回していきます。<br><br>
        月に1度の講義（対面）と1対1のコンサル（Zoom）を、その間にセルフカウンセリングを行います。小縣塾独自のセルフカウンセリングの方法は、脳のデトックスを促し、自分の中にある答えを導き出します。何度も回すことで平坦な円ではなく、少しずつ高みに登っていくサイクルとなり、圧倒的人間力を身につけるためのトレーニングを行います。
      </div>
    </div>
  </div>
  <!-- ./ sec-vision -->
  <div class="message-coach">
    <div class="left-steam-box">
      <div class="steam steam-01"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
      <div class="steam steam-04"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
      <div class="steam steam-05"><img src="<?php print get_template_directory_uri(); ?>/assets/svg/smoke_right.svg" alt=""></div>
    </div>
    <div class="inner w-1077">
      <div class="message-coach-ttl">
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/mess_coach.png" alt="小縣の言霊 メンタルコーチ">
      </div>
      <div class="message-coach-blk">
        <div class="message">
          <div class="message-inner">
            <div class="inner-ttl">各Roundにわけた講義を、3年間のカリキュラムでお伝えします</div>
            <p>
              結果を出すための本質について講義致します。人生に本当に勝って行くには、あなたの人生をどうより良く生きていくか？小縣の全力の講義で魂を揺さぶり、貴方の実を変えて行きます。<br>
              人生を変えるきっかけになって頂ける事間違いありません。
            </p>
          </div>
        </div>
        <div class="coach">
          <div class="coach-inner">
            <div class="inner-ttl">小縣が人生のセコンドを努めます</div>
            <p>
              Zoomを使ったコンサルティングでは、悩みや疑問を解消します。<br>
              メンタル、ビジネス、人間関係の相談、自分軸の確立方法や、心の見抜き方、一人ひとりに寄り添ったコーチング、ティーチングを行います。
            </p>
          </div>
        </div>
      </div>
      <div class="cmn-ttl01 s-txt-center"><span>小縣塾実践会の一部をご紹介します</span></div>
      <?php while( have_posts() ): the_post() ;?>
        <?php $youtube_url = get_field('youtube_url');
        if($youtube_url){ ?>
          <div class="message-coach-video">
            <iframe src="<?php echo $youtube_url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php } ?>
      <?php endwhile;?>
      <a href="<?php bloginfo('url'); ?>/entry/" class="red-btn hover-effect btn-center"><span>体験会の日程・参加のお申し込みはこちらから</span></a>
    </div>
  </div>
  <!-- ./ message-coach -->
  <div id="instructor" class="lecturer-intro">
    <div class="lecturer-inner w-880">
      <h2>講師紹介</h2>
      <div class="lecturer-txt">
        小縣塾実践会では、代表の小縣新以外に、2名のサポート講師がグループディスカッションに参加します。<br><br>
        脳は入力と出力で出来ており、グループディスカッションの時間で、あなたの脳の仕組みを理解し今日学んだ事をしっかり落とし込んでいってもらいます。<br>
        前半はインプット、後半はアウトプットの場として実践会だけで多くの物を持ち帰って頂けるように構成されており、アウトプットの時間にもプロの講師が入ることで、より効果のあるアウトプットを促します。（その日により、内容は変化します）
      </div>
      <div class="lecturer-blk">
        <div class="support-ttl">サポート講師</div>
        <div class="lecturer-list">
          <div class="lecturer-item">
            <div class="item-bg">
              <div class="lecturer-img">
                <img src="<?php print get_template_directory_uri(); ?>/assets/img/service/img_lecturer01.jpg" alt="">
              </div>
              <h4>横山裕之</h4>
            </div>
            <div class="item-txt">
              株式会社多聞　認定講師・鑑定師<br>
              バクデザイン株式会社　代表取締役<br>
              日本・外資の大手企業勤務経験を経て独立<br>
              主にIT/Web開発、コンサルを得意とし、帝王学を学びその素晴らしさを伝える活動も実施
            </div>
          </div>
          <div class="lecturer-item">
            <div class="item-bg">
              <div class="lecturer-img">
                <img src="<?php print get_template_directory_uri(); ?>/assets/img/service/img_lecturer02.jpg" alt="">
              </div>
              <h4>おがた まゆみ</h4>
            </div>
            <div class="item-txt">
              This Is Me代表<br>
              Kindle出版プロデューサー<br>
              Kindle出版講座/起業塾主催<br>
              出身校：ボストン大学<br>
              元女優でスピリチュアルカウンセラー<br>
              （米国公認）としても活躍中。<br>
            </div>
          </div>
        </div>
      </div>
      <a href="<?php bloginfo('url'); ?>/profile/" class="white-btn-big hover-effect btn-center"><span>小縣新プロフィールはこちら</span></a>
    </div>
  </div> 
  <!-- ./ lecturer-intro -->
  <div id="company" class="company-profile">
    <h2 class="white-ttl">会社概要</h2>
    <div class="clearfix table-blk">
      <div class="tbl-inner">
        <table class="cmp-table">
          <tbody>
            <tr>
              <td>会社名</td>
              <td>株式会社Step Up</td>
            </tr>
            <tr>
              <td>住所</td>
              <td>愛知県名古屋市東区芳野1-17-22</td>
            </tr>
            <tr>
              <td>代表取締役</td>
              <td>小縣 新（おがた しん）</td>
            </tr>
            <tr>
              <td>設立</td>
              <td>2015年</td>
            </tr>
            <tr>
              <td>事業内容</td>
              <td>教育事業・セミナー事業・コンサルティング業務</td>
            </tr>
          </tbody>  
        </table>
      </div>
    </div>
  </div>
  <!-- ./ company-profile -->
</div>
<!-- ./ pg-content -->

<?php
get_footer();
