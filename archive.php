<?php get_header(); ?>
<main class="archive">
    <div class="post__head">
        <div class="inner">
            <div class="sec-title">
                <h2>お知らせ</h2>
            </div>
        </div>
    </div>
    <div class="page__content">
        <div class="inner">
            <h3 class="mb_86">ニュース一覧</h3>
            <ul class="news-lists">

                <!-- <?php
                        if (wp_is_mobile()) {
                            $num = 10;
                        } else {
                            $num = 20;
                        }
                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'posts_per_page' => $num
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>">
                                <p class="news-lists__date"><?php the_time('Y.n.j') ?></p>
                                <p class="news-lists__title"><?php the_title(); ?></p>
                            </a></li>

                    <?php endwhile; ?>

                <?php wp_reset_query();
                        endif; ?>
                <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $my_query)); ?> -->


                <!-- testここから -->
                <?php
                $args = array(
                    'paged' => $paged,
                    'post_type' => 'post',
                );

                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <li><a href="<?php the_permalink(); ?>">
                                <p class="news-lists__date"><?php the_time('Y.n.j') ?></p>
                                <p class="news-lists__title"><?php the_title(); ?></p>
                            </a>
                        </li>

                <?php endwhile;
                endif; ?>
            </ul>

            <!-- ページネーション -->
            <div class="pagenation-wrapper center">
                <?php
                $args = array(
                    'mid_size' => 3, /* 現在のページの左右に表示するページ数 */
                    'prev_text' => ' ', /* 「前へ」にあたるページ用テキスト */
                    'next_text' => ' ', /* 「次へ」にあたるページ用テキスト */
                );

                the_posts_pagination($args);
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>