<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>

<div class="shutter"></div>

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
      <h3 class="core_g">世界一やさしいWeb開発会社へ。　</h3>

      <p class=" catch core_g">
        デジタル領域に力を入れたいすべての会社の力になります。<br>
        コーレは、現代最高峰のプログラミング・デザイン教育の現場で講師を歴任し、<br class="sp_br">
        卓越したデジタル翻訳力※を持ったWebエンジニアとデザイナーで構成されたチームです。<br>
        アナログなクライアントに寄り添い、丁寧なコミュニケーションでプロジェクトを進めていき、<br class="sp_br">
        あなたのチームにデジタルな変革を促します。<br>
        世界で一番やさしいWeb開発会社を目指し続け、<br class="sp_br">
        あなたのチームの経営課題をクリエイティブに継続的にサポートします。<br>
        ※デジタル領域の専門的な言葉をわかりやすく伝える力のこと</p>
      <div class="bg_img"></div>
  </div>
  </section>
  </div>

  <div class="bg_wh_1">
    <section id="solution">
      <h2>SOLUTION</h2>
      <h3 class="core_g">
        自社サービス/Web制作/Web開発</h3>
      <p class="products_txt catch core_g">
        費用はいくらなんだろう？<br>
        期間はどれくらいなんだろう？<br>
        どうやって進めていくんだろう？<br>
        わからないことだらけで不安....<br>
        私たちは、そんなモヤっとした状態からでもご要望をお受けし、<br class="sp_br">
        スピードと品質にこだわり、柔軟な対応で開発をしていきます。</p>

      <ul class="products_wrapper ">
        <li class="products_item effect_bg">
          <p class="item_num effect">01</p>

          <h4>ビジネス文章チェックツール<br>
            「ロジクル」</h4>
          <p class="item_txt">
            文章の「わかりやすさ」と「説得力」の向上に貢献して、
            仕事の生産性を高めるビジネス文章チェックツール</p>
        </li>
        <li class="products_item effect_bg">
          <p class="item_num">02</p>

          <h4>サンクスツール<br>
            「アリレター」</h4>
          <p class="item_txt">
            組織内で”ありがとう”を毎月1回届けあう、サンクスコミュニケーションツール</p>
        </li>
        <li class="products_item effect_bg">
          <p class="item_num">03</p>

          <h4>提案管理ツール<br>
            「KIANhub」</h4>
          <p class="item_txt">
            組織内の提案を記録に残す、提案管理ツール</p>
        </li>

        <li class="products_item effect_bg">
          <p class="item_num">04</p>

          <h4>「Web制作事業」</h4>
          <p class="item_txt">
            様々な業種のクリエイティブ制作に対応</p>
        </li>

        <li class="products_item effect_bg">
          <p class="item_num">05</p>

          <h4>「Web開発事業」</h4>
          <p class="item_txt">
            Webサービス、アプリの開発に対応（Ruby on Railsでの開発がメインとなります）</p>
        </li>

        <li class="products_item effect_bg">
          <p class="item_num">06</p>

          <h4>「IT戦略コンサルティング」</h4>
          <p class="item_txt">
            10〜200名の組織運営において、アナログな課題をデジタルに解決するコンサルティング
          </p>
        </li>

      </ul>
    </section>
  </div>
  <div class="bg_gry">
    <section id="company">
      <h2>COMPANY</h2>
      <dl class="company_info">
        <dt>会社名</dt>
        <dd>コーレ合同会社</dd>
        <dt>設立</dt>
        <dd>2017年5月</dd>
        <dt>代表者</dt>
        <dd>奥脇 真人</dd>
        <dt>従業員数</dt>
        <dd>6名</dd>
        <dt>所在地</dt>
        <dd>東京都世田谷区太子堂2-28-2</dd>
        <dt>事業内容</dt>
        <dd>Web制作事業<br>
          Web開発事業<br>
          コンサルティング事業</dd>
      </dl>
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


<section id="contact">
  <h2>CONTACT</h2>
  <div class="contact_wrapper effect_bg " id="contactform">
    <?php echo do_shortcode('[contact-form-7 id="15" title="お問い合わせフォーム"]'); ?>
  </div>
</section>
</div>
</main>

<?php get_footer(); ?>