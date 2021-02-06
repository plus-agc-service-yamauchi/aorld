<?php get_header(); ?>
<!-- contents start -->

    <div class="mb-5 text-gray p-2">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <!-- 以下で、投稿がカテゴリー3に属しているかテスト -->
     <!-- もし属している場合、"post-cat-three"というCSSクラスのdivボックスを表示 -->
     <!-- それ以外の場合、"post"というCSSクラスのdivボックスを表示 -->
     <?php if ( in_category( '3' ) ) : ?>
        <div class="post-cat-three">
         <?php else : ?>
            <div class="post">
            <?php endif; ?>

            <!-- 投稿のタイトルとパーマリンクを表示 -->
            <p class="display-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

            <!-- 日時を表示 -->
            <small><?php the_time('Y年n月j日 l'); ?></small>

            <!-- 投稿の本文をdiv内に表示 -->
            <div class="entry">
              <?php the_content(); ?>
          </div>

          <!-- 投稿のカテゴリーをコンマ区切りで表示 -->
          <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
      </div> <!-- 最初の div ボックスを閉じる -->
      <hr class="mb-5">
      <!-- “else”部分を除いたループ終了 -->
  <?php endwhile; else: ?>

  <!-- 最初の“if”にて表示する投稿があるかどうかをテストしたため、“else”では投稿がない場合に実行 -->
  <!-- つまり、投稿がなければ以下を表示 -->
  <p>Sorry, no posts matched your criteria.</p>

  <!-- ループを「完全に」終了 -->
<?php endif; ?>
</div>
<!-- /.container -->
</div>
<!-- ループ開始 -->

<?php get_footer(); ?>