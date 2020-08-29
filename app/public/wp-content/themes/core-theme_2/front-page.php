<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>

<!-- <div class="shutter"></div> -->

<div class="fv">
  <p class="fv_text core_g"><span>世界一やさしい</span><br><span>WEB開発会社へ。</span></p>
  <div class="circles_wh" id="circles">
    <div class="circle_wh"></div>
    <div class="circle_wh"></div>
    <div class="circle_wh"></div>
    <div class="circle_wh"></div>
  </div>
</div>

<div class="arrowWrap">
  <div class="arrowInner">
    <p>SCROLL</p>
    <div class="arrow"></div>
  </div>
</div>

<main>

  <!-- ↓波波のアニメーション↓ -->
  <div class="bg_gry_1">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(240,251,253,1)"></use>
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(249,241,253,1)"></use>
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(240,241,253,1)"></use>
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f9fbfd"></use>
      </g>
    </svg>
    <!-- ↑波波のアニメーション↑ -->

    <section id="aboutus">
      <h2>ABOUT US</h2>
      <h3 class="core_g">世界一やさしいWeb開発会社へ。</h3>

      <p class=" catch core_g">
        デジタル領域に力を入れたいすべての会社の力になります。<br>
        コーレは、現代最高峰のプログラミング・デザイン教育の現場で講師を歴任し、<br class="sp_br">
        卓越したデジタル翻訳力※を持ったWebエンジニアとデザイナーで構成されたチームです。<br>
        アナログなクライアントに寄り添い、丁寧なコミュニケーションでプロジェクトを進めていき、<br class="sp_br">
        あなたのチームにデジタルな変革を促します。<br>
        世界で一番やさしいWeb開発会社を目指し続け、<br class="sp_br">
        あなたのチームの経営課題をクリエイティブに継続的にサポートします。<br>
        ※デジタル領域の専門的な言葉をわかりやすく伝える力のこと
      </p>
      <button class="details_btn">詳細はこちら</button>
      <div><img src="<?php bloginfo('template_directory'); ?>/img/about_people1.png" alt=""></div>
    </section>
  </div>

  <div class="bg_gry">
    <section id="product">
      <h2>PRODUCT</h2>
      <h3>コーレのプロダクト</h3>
      <p>シンプルでわかりやすいデザインにこだわり、ユーザーの使いやすさを追求したプロダクトを開発します。</p>
      <div class="product_lists">
        <ul>
          <li>
            <div class="product">
              <div class="product_leftBox">
                <div class="product_header">
                  <img src="<?php bloginfo('template_directory'); ?>/img/ariletter_logo.png" alt="">
                  <p class="pruduct_phrase">サンクスコミュニケーションツール</p>
                  <p class="product_name">アリレター</p>
                  <p class="product_details">”ありがとう”が組織内で飛び交う文化を作れるツールです。 感謝を言語化できるようになることで、明るい組織風土を良質なコミュニケーションを生み出します。</p>
                </div>
              </div>
              <div class="product_rightBox">
                <img src="<?php bloginfo('template_directory'); ?>/img/ariletter_fv.png" alt="">
                <button>サービスサイトへ<span></span></button>
              </div>
            </div>
          </li>
          <li>
            <div class="product">
              <div class="product_leftBox">
                <div class="product_header">
                  <img src="<?php bloginfo('template_directory'); ?>/img/KIANhub_logo.png" alt="">
                  <p class="pruduct_phrase">社内のアイデアを資産にする提案管理ツール</p>
                  <p class="product_name">KIANhub</p>
                  <p class="product_details">
                    提案があるたびにストックされていく知識共有ツールで、組織にイノベーションを生み出します。
                    <br>組織内の提案被りも防ぐことができます。
                  </p>
                </div>
              </div>
              <div class="product_rightBox">
                <img src="<?php bloginfo('template_directory'); ?>/img/KIANhub_fv.png" alt="">
                <button>COMING SOON<span></span></button>
              </div>
            </div>
          </li>
          <li>
            <div class="product">
              <div class="product_leftBox">
                <div class="product_header">
                  <img src="<?php bloginfo('template_directory'); ?>/img/tsugikuru_logo.png" alt="">
                  <p class="pruduct_phrase">タレントキャスティング効率化サービス 「ツギクル」</p>
                  <p class="product_name">「ツギクル」</p>
                  <p class="product_details">芸能プロダクションが”次に来る”イチオシのタレントを掲載するサービスです。 キャスティングをご検討する企業は、このサービスを使えば一瞬で”次に来るタレント”がわかります。</p>
                </div>
              </div>
              <div class="product_rightBox">
                <img src="<?php bloginfo('template_directory'); ?>/img/tsugikuru_fv.png" alt="">
                <button>サービスサイトへ<span></span></button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <div class="bg_wh_1">
    <section id="SERVICE&PLAN">
      <h2>SERVICE&PLAN</h2>
      <h3>Web制作/デザイン/Web開発/デジタルトランスフォーメーション推進</h3>
      <h3>月額委託プラン/単発委託プラン</h3>
      <p>
        デザイナーやエンジニアが不足している全てのチームへ。 コーレでは、まるっと色々とおまかせしたい方にも、案件ごとにおまかせしたい方にも柔軟に対応できるように、「月額委託プラン」と「単発委託プラン」をご用意しています。 あなたのチームが抱える課題領域にクリエイティブなサポートを提供します。 ※Web開発はRuby on Railsが主です。
      </p>
      <button class="details_btn">詳細はこちら</button>
      <div><img src="<?php bloginfo('template_directory'); ?>/img/service_people.png" alt=""></div>
    </section>
  </div>

  <div class="bg_wh_1">
    <section id="SERVICE&PLAN">
      <h2>SERVICE&PLAN</h2>
      <h3>Web制作/デザイン/Web開発/デジタルトランスフォーメーション推進</h3>
      <h3>月額委託プラン/単発委託プラン</h3>
      <p>
        デザイナーやエンジニアが不足している全てのチームへ。 コーレでは、まるっと色々とおまかせしたい方にも、案件ごとにおまかせしたい方にも柔軟に対応できるように、「月額委託プラン」と「単発委託プラン」をご用意しています。 あなたのチームが抱える課題領域にクリエイティブなサポートを提供します。 ※Web開発はRuby on Railsが主です。
      </p>
      <button class="details_btn">詳細はこちら</button>
      <div><img src="<?php bloginfo('template_directory'); ?>/img/service_people.png" alt=""></div>
    </section>
  </div>

  <div class="bg_wh_1">
    <section id="case">
      <h2>CASE</h2>
      <h3>
        これまでお受けした案件の事例紹介
      </h3>
      <div class="case_lists">
        <div class="case_list">
          <div class="case_title">
            <h4>CASE 01</h4>
            <p class="title">Web制作</p>
            <p class="sub_title">
              ホームページをスタイリッシュで かっこいい感じにリニューアルしたい
            </p>
            <p class="case_produce">
              今のホームページが古い感じがしていて、スマホ対応もしていない。使っている画像もボヤけている。 時代に取り残されている雰囲気になってしまっているので、スタイリッシュでかっこいいホームページにしてほしい。
            </p>
            <p class="case_details">
              対応内容：マーケティング戦略立案、デザイン、コーディング
            </p>
            <p class="case_schedule">
              所要日数：20日
            </p>
          </div>
          <div class="case_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/case01.png" alt="">
          </div>
        </div>
        <div class="case_list">
          <div class="case_title">
            <h4>CASE 02</h4>
            <p class="title">Web制作/Web開発</p>
            <p class="sub_title">
              Instagramにアップした画像を ホームページに自動反映される ようにしてほしい
            </p>
            <p class="case_produce">
             自社で運営しているメディアのInstagramを開設した。Instagramにアップした画像をホームページに自動で反映されるようにしてほしい。
            </p>
            <p class="case_details">
              対応内容：SNS連携
            </p>
            <p class="case_schedule">
              所要日数：1日
            </p>
          </div>
          <div class="case_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/case02.png" alt="">
          </div>
        </div>
        <div class="case_list">
          <div class="case_title">
            <h4>CASE 03</h4>
            <p class="title">デザイン</p>
            <p class="sub_title">
              信頼感のある感じで 新規事業のロゴと サービスのWeb画面のデザインを 作ってほしい
            </p>
            <p class="case_produce">
              新しく子供向けプログラミング教育サービスを始めるので、親御さんが信頼できるようなロゴを作ってほしい。 サービスの専用サイトも作るので、ロゴに合わせてサイト全体のデザインもしてほしい。 サイトのデザインはポップな感じがいいと考えているけど、そこら辺のアドバイスもほしい。
            </p>
            <p class="case_details">
              対応内容：マーケティング戦略立案、ロゴ作成、UIデザイン作成 
            </p>
            <p class="case_schedule">
              所要日数：14日
            </p>
          </div>
          <div class="case_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/case03.png" alt="">
          </div>
        </div>
        <div class="case_list">
          <div class="case_title">
            <h4>CASE 04</h4>
            <p class="title">デジタルトランスフォーメーション推進</p>
            <p class="sub_title">
              スプレッドシートとかExcelとか 簡易的でいいので 社員のシフト管理を楽にできる 便利な方法があれば導入したい
            </p>
            <p class="case_produce">
              店舗のシフト組みを毎月やっていて、スタッフの勤務時間を入力するのがいちいち手作業で面倒くさい。簡単にシフト入力できて、スタッフごとの勤務時間の計算も自動でやってくれて、スタッフへのシフト確定通知も自動でSlackでやってくれるようにしたい。
            </p>
            <p class="case_details">
              対応内容：GASでシフト管理ツール作成、Slackとの連携 
            </p>
            <p class="case_schedule">
              所要日数：40日
            </p>
          </div>
          <div class="case_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/case04.png" alt="">
          </div>
        </div>
        <div class="case_list">
          <div class="case_title">
            <h4>CASE 05</h4>
            <p class="title">Web開発</p>
            <p class="sub_title">
              お客様と気軽にWeb会議ができる オリジナルのコミュニケーションツールを開発してほしい
            </p>
            <p class="case_produce">
              既存のWeb会議システムではなく、独自のWeb会議システムを作りたい。 ただ単にWeb会議ができるだけでなく、お客様との会議回数を自動で集計して、会議回数の多いお客様をランキングとして見れるようにもしてほしい。スタッフ側はすべてのお客様の内容を見れるようにしたい。
            </p>
            <p class="case_details">
              対応内容：Ruby on Rails でチャット機能、顧客管理機能、Web会議機能を含んだツールを開発 
            </p>
            <p class="case_schedule">
              所要日数：90日
            </p>
          </div>
          <div class="case_image">
            <img src="<?php bloginfo('template_directory'); ?>/img/case05.png" alt="">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="bg_gry">
    <section id="news">
      <h2>NEWS</h2>
      <?php echo do_shortcode('[showwhatsnew]');?> 
    </section>
  </div>
  <div class="bg_gry">
    <section id="contact">
      <h2>CONTACT</h2>
      <h3>お問い合わせ / お役立ち資料ダウンロード</h3>
      <div class="contact_contents">
        <div class="contact_content">
          <p class="contact_title">
            お問い合わせ
          </p>
          <p class="contact_details">
            ご相談や、ご依頼はこちらからお問い合わせください。
          </p>
          <button class="contact_btn">お問い合わせ</button>
        </div>
      </div>
      <div class="contact_contents">
        <div class="contact_content">
          <p class="contact_title">
            お役立ち資料ダウンロード
          </p>
          <p class="contact_details">
            ビジネスのお役立ち資料や、コーレのサービスの詳細説明資料をご用意しています。 ご自由にダウンロードしてください。
          </p>
          <button class="contact_btn">資料を入手する</button>
        </div>
      </div>
    </section>
  </div>
</main>

<style>
  @media screen and (max-width: 768px) {
    .sp_br {
      display: none;
    }
  }
</style>




<?php get_footer(); ?>