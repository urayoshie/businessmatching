<?php get_header(); ?>
<main class="post">
    <div class="post__head">
        <div class="inner">
            <div class="sec-title">
                <h2>お知らせ</h2>
            </div>
        </div>
    </div>
    <div class="page__content post__content">
        <div class="inner">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <!-- 投稿日表示 -->
                    <p class="post__content__date"> <?php echo the_time('Y.n.j'); ?></p>
                    <!-- 投稿タイトル表示 -->
                    <h1 class="post__content__title"><?php the_title(); ?></h1>
                    <!-- サムネイル表示 -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post__content__thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post__content__body">
                        <div class="blog-content"><?php echo the_content(); ?></div>
                    </div>

            <?php endwhile;
            endif; ?>

            <a class="post__back-btn" href="<?php echo home_url('/news'); ?>">
                <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.png?<?php echo date('YmdH'); ?>" alt="">ニュース一覧に戻る</p>
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>