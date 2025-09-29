<?php get_header(); ?>
<main>
    <div class="main-visual">
        <section class="mv">
            <div class="mv__bg"></div>
            <div class="new-inner">
                <div class="mv__img"></div>
            </div>
        </section>

        <section id="needs" class="section needs">
            <img class="needs-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg04.png" alt="">
            <div class="new-inner">
                <h3 class="center">福岡市の建設企業の皆さん、こんなお悩みありませんか？</h3>
                <div class="needs-items">
                    <div class="needs-item">安全管理を徹底したい</div>
                    <div class="needs-item">写真管理を効率化したい</div>
                    <div class="needs-item">受発注業務を効率化したい</div>
                    <div class="needs-item">施工管理を効率化したい</div>
                    <div class="needs-item">現場人材を獲得したい</div>
                    <div class="needs-item">社内情報の管理を効率化したい</div>
                </div>
            </div>
        </section>
        <section class="program" id="program">
            <div class="program__container">
                <h3 class="center">スタートアップ企業との<span class="break">協業マッチングで解決を図る</span><br><span class="break">支援プログラムを</span>今年も開催します！</h3>
                <p class="program__container__text">福岡市の地場建設企業等とスタートアップ企業<span class="break">との協業マッチングを通じ、</span><br>
                    地場建設企業等における業務負担の軽減や作業<span class="break">の効率化等を図ることで、</span><br>
                    生産性向上に繋げるとともに、スタートアップ企業の事業領域の拡大等の成長促進を図ります。
                </p>
                <p class="program__program__title">プログラム内容</p>
                <ul>
                    <li>
                        <a href="<?php echo home_url('/#new-event1'); ?>">
                            <div class="program__container__box">
                                <p class="title">Matching Event</p>
                                <div style="position: relative; z-index: 1;">
                                    <p class="date">2025年 <span>6月26日(木)</span></p>
                                </div>
                                <div>
                                    <p class="category">第3回</p>
                                    <p class="name">協業マッチングイベント<br><span class="name-b">「建設DX」</span></p>
                                </div>
                                <p class="detail">詳細を見る<img src="<?php echo get_template_directory_uri(); ?>/assets/images/link-white.png?<?php echo date('YmdH'); ?>" alt=""></p>
                            </div>
                        </a>
                    </li>
                    <li id="program-au">
                        <div class="program__container__box">
                            <p class="title">Discussion</p>
                            <div style="position: relative; z-index: 1;">
                                <p class="date">2025年 <span>8月頃</span></p>
                            </div>
                            <div class="add-space">
                                <p class="name-b">現場見学会</p>
                                <p class="name-s">※現場見学会の機会に合わせて意見交換を行います</p>
                            </div>
                            <p class="detail inactive">COMMING SOON</p>
                        </div>
                    </li>
                    <li id="program-04">
                        <div class="program__container__box">
                            <p class="title">Matching Event</p>
                            <div style="position: relative; z-index: 1;">
                                <p class="date">2025年 <span>11月下旬</span></p>
                            </div>
                            <div>
                                <p class="category">第4回</p>
                                <p class="name">協業マッチングイベント<br><span class="name-b">「建設DX」</span></p>
                            </div>
                            <p class="detail inactive">COMMING SOON</p>
                        </div>
                    </li>
                    <li id="program-de">
                        <div class="program__container__box">
                            <p class="title">Discussion</p>
                            <div style="position: relative; z-index: 1;">
                                <p class="date">2025年 <span>12月頃</span></p>
                            </div>
                            <div class="between-space">
                                <p class="name-b">意見交換会<br class="name">&nbsp;</p>
                            </div>
                            <p class="detail inactive">COMMING SOON</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="news" class="section news">
            <img class="news-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg05.png" alt="">
            <div class="new-inner">
                <div class="new-sec-title">
                    <h2 class="center">お知らせ</h2>
                </div>
                <ul class="news-lists">

                    <?php
                    $newarrival = get_posts(array(
                        'posts_per_page' => 3, // 表示件数指定
                    ));

                    if ($newarrival):
                    ?>

                        <?php
                        foreach ($newarrival as $post):
                            setup_postdata($newarrival);
                        ?>
                            <li><a href="<?php the_permalink(); ?>">
                                    <p class="news-lists__date"><?php the_time('Y.n.j') ?></p>
                                    <p class="news-lists__title"><?php the_title(); ?></p>
                                </a></li>

                        <?php endforeach; ?>

                    <?php else: ?>
                        <p>記事がありません</p>

                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>

                </ul>
                <a class="news__archive-btn" href="<?php echo home_url('/news'); ?>">
                    <p>お知らせ一覧を見る</p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png?<?php echo date('YmdH'); ?>" alt="">
                </a>
            </div>
        </section>

        <section id="new-event1" class="section new-seminar-event event">
            <div class="new-sec-title">
                <h2 class="center">プログラム</h2>
            </div>
            <img class="event-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg06.png" alt="">
            <div class="new-inner">
                <div class="new-seminar-event__wrapper">
                    <div class="program-end-message">
                        <p>こちらのプログラムは終了しました</p>
                    </div>
                    <div class="new-seminar-event__content">
                        <p class="event-title">Matching Event</p>
                        <div class="new-seminar-event__content__thema__title">
                            <p class="new-seminar-event__content__thema">第3回&ensp;<br class="pc-none">協業マッチングイベント<br>「建設DX」</p>
                        </div>
                        <div class="new-seminar-event__content__flex mb_86">
                            <img class="new-seminar-event__content__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_img-02.png?<?php echo date('YmdH'); ?>" alt="">
                            <h3>地場建設企業とスタートアップ企業との連携により、地場企業が抱える課題を解決し、企業の生産性向上を目指すことを目的としたマッチングイベント「建設DX」。同イベントでは、地場建設企業及びスタートアップ企業等によるプレゼンを実施し、協業マッチングの機会を創出します。</h3>
                        </div>
                    </div>
                    <!-- アーカイブ動画エリア -->
                    <div class="archive-video-section">
                        <h3 class="archive-video-title">アーカイブ動画</h3>
                        <p class="archive-video-description">各登壇企業の登場時間は動画の概要欄からご確認ください。</p>

                        <div class="archive-video-grid">
                            <div class="archive-video-card">
                                <div class="archive-video-thumb">
                                    <iframe class="video" src="https://www.youtube.com/embed/ITe7Ws8W-mc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <ul class="archive-video-time">
                                    <li><span class="time">00:00</span><span class="label">基調講演</span></li>
                                    <li><span class="time">21:06</span><span class="label">事業説明</span></li>
                                </ul>
                            </div>

                            <div class="archive-video-card">
                                <div class="archive-video-thumb">
                                    <iframe class="video" src="https://www.youtube.com/embed/aoIj7VH5PTE" title="建設企業の説明" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <ul class="archive-video-time">
                                    <li><span class="time">00:00</span><span class="label">岩本工業株式会社 & <span class="archive-text-break-01">九電ドローンサービス株式会社</span></span></li>
                                    <li><span class="time">17:19</span><span class="label">株式会社福岡日野組</span></li>
                                    <li><span class="time">30:10</span><span class="label">株式会社小田島組</span></li>
                                    <li><span class="time">38:22</span><span class="label">株式会社福山コンサルタント</span></li>
                                </ul>
                            </div>

                            <div class="archive-video-card">
                                <div class="archive-video-thumb">
                                    <iframe class="video" src="https://www.youtube.com/embed/jyyN3fgEVIU" title="スタートアップ企業の発表" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <ul class="archive-video-time">
                                    <li><span class="time">00:00</span><span class="label">株式会社Fusic & <span class="archive-text-break-02">株式会社ソラコム</span></span></li>
                                    <li><span class="time">11:41</span><span class="label">SORABITO株式会社</span></li>
                                    <li><span class="time">25:58</span><span class="label">株式会社ルクレ</span></li>
                                    <li><span class="time">36:14</span><span class="label">株式会社Stayway</span></li>
                                </ul>
                            </div>

                            <div class="archive-video-card">
                                <div class="archive-video-thumb">
                                    <iframe class="video" src="https://www.youtube.com/embed/4tUXzqzdPLU" title="福岡市による支援制度" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <ul class="archive-video-time">
                                    <li><span class="time">00:00</span><span class="label">令和7年度のデジタル化支援について</span></li>
                                    <li><span class="time">07:12</span><span class="label">人材の確保・<span class="archive-text-break-02">定着を支援する制度について</span></span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- 2025年度 -->
                    <div class="event__2025__box">
                        <button class="open-past-event-modal detail-2025-btn" data-year="2025">
                            詳細を見る
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="section related">
            <div class="past__event__container">
                <div class="new-sec-title past-event-title">
                    <h2 class="center">過去のイベント</h2>
                </div>
                <!-- 2024年度 -->
                <div class="past__event__box">
                    <h3 class="past__event__title BeVietnamPro">2024年度開催</h3>
                    <button class="open-past-event-modal detail-btn" data-year="2024">
                        詳細を見る
                    </button>
                </div>
            </div>
        </section>
    </div>
</main>


<?php get_footer(); ?>