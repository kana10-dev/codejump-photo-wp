<?php get_header(); ?>
<main>
  <div id='mainvisual' class='wrapper'>
    <img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')); ?>" alt="">
  </div>
  <section id="index" class="wrapper">
    <div class="text content">
      <h2 class="sec-title">INDEX</h2>
      <?php
        $page_data = get_page_by_path('index');
        $page = get_post($page_data);
        echo $page->post_content;
      ?>
    </div>
  </section>
  <section id="detail" class="content">
    <h2 class="sec-title">DETAIL</h2>
    <div class="flex">
      <img class="img" src="<?php echo esc_url(get_theme_file_uri('img/detail.jpg')); ?>" alt="">
      <div class="text">
        <p class="title">タイトルタイトルタイトル</p>
        <dl>
          <dt>著者</dt>
          <dd>タイトルタイトルタイトル</dd>
          <dt>出版社</dt>
          <dd>タイトルタイトルタイトル</dd>
          <dt>発行年</dt>
          <dd>タイトルタイトルタイトル</dd>
        </dl>
        <p>
          テキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキスト
        </p>
        <a class="link" href="" target="_blank">オンラインストアで見る</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>