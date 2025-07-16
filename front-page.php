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
                    <li >
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
                    <div class="new-seminar-event__content">
                        <p class="event-title">Matching Event</p>
                        <div class="new-seminar-event__content__thema__title">
                            <p class="new-seminar-event__content__thema">第3回&ensp;<br class="pc-none">協業マッチングイベント<br>「建設DX」</p>
                        </div>
                        <div class="new-seminar-event__content__flex mb_86">
                            <img class="new-seminar-event__content__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_img-02.png?<?php echo date('YmdH'); ?>" alt="">
                            <h3>地場建設企業とスタートアップ企業との連携により、地場企業が抱える課題を解決し、企業の生産性向上を目指すことを目的としたマッチングイベント「建設DX」。同イベントでは、地場建設企業及びスタートアップ企業等によるプレゼンを実施し、協業マッチングの機会を創出します。</h3>
                        </div>
                        <div class="new-seminar-event__content__wrapper mb_86">
                            <div class="new-seminar-event__content__left">
                                <p class="new-seminar-event__content__item">タイムスケジュール</p>
                                <ul class="new-seminar-event__content__program">
                                    <li><span class="new-seminar-event__content__time">14:00</span>
                                        <p>開会挨拶</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">14:05</span>
                                        <p>事業概要説明</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">14:15</span>
                                        <p>基調講演<br>「下水道等に起因する大規模な道路陥没事故を踏まえた対策検討委員会による提言等」</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">14:30</span>
                                        <p>建設企業による自社取組、課題のプレゼン</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">15:18</span>
                                        <p>休憩</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">15:35</span>
                                        <p>スタートアップ企業によるソリューションプレゼン</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">16:35</span>
                                        <p>福岡市の中小企業支援制度の紹介</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">16:45</span>
                                        <p>企業間の個別マッチングに関する説明</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">17:00</span>
                                        <p>企業間の個別マッチング</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">18:00</span>
                                        <p>閉会</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">18:00</span>
                                        <p>交流会</p>
                                    </li>
                                    <li><span class="new-seminar-event__content__time">20:00</span>
                                        <p>終了</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="new-seminar-event__content__right">
                                <div>
                                    <p class="new-seminar-event__content__item">開催日</p>
                                    <p class="new-seminar-event__content__year">2025年</p>
                                    <p class="new-seminar-event__content__date">6月26日(木)</p>
                                    <p class="new-seminar-event__content__times">14:00-18:00</p>
                                </div>
                                <div>
                                    <p class="new-seminar-event__content__item">実施方法</p>
                                    <p class="new-seminar-event__content__online">オフライン＋オンライン（zoom）</p>
                                </div>
                                <div>
                                    <p class="new-seminar-event__content__item">会場</p>
                                    <p class="new-seminar-event__content__place">Fukuoka Growth Next<br>
                                        1Fイベントスペース<br><span>福岡市中央区大名2-6-11</span></p>
                                    <a class="new-seminar-event__content__gmap" href="https://maps.app.goo.gl/PXzT8Cz7hREid7CQA" target="_blank" rel="noopener noreferrer">マップを見る<img src="<?php echo get_template_directory_uri(); ?>/assets/images/link-external-white.png?<?php echo date('YmdH'); ?>" alt=""></a>
                                </div>
                                <div class="speaker-card">
                                    <div class="speaker-badge">基調講演登壇者</div>
                                    <div class="speaker-header">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-02.png?<?php echo date('YmdH'); ?>" alt="国土交通省ロゴ" class="speaker-logo">
                                        <div>
                                            <div class="speaker-title">国土交通省</div>
                                            <div class="speaker-name">本田 康秀 氏</div>
                                        </div>
                                    </div>

                                    <div class="speaker-history">
                                        <div class="history-heading">略歴</div>
                                        <ul class="history-list">
                                        <li>1995年4月&emsp;建設省入省</li>
                                        <li>2019年7月&emsp;国土交通省 下水道部 <span class="break">下水道企画課</span><br><span class="indent">下水道事業調整官</span></li>
                                        <li>2022年7月&emsp;内閣官房副長官補付 <span class="break">内閣参事官</span></li>
                                        <li>2023年7月&emsp;国土交通省 中国地方整備局 <span class="break">河川部長</span></li>
                                        <li>2025年4月&emsp;国土交通省 大臣官房付<span class="break">（上下水道審議官グループ）</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="new-seminar-event__content__speaker">
                            <p class="new-seminar-event__content__speaker__title">登壇企業等</p>
                            <p class="new-seminar-event__description">当日は、建設企業とスタートアップ企業が登壇し、実例などをお話しします。</p>
                            <!-- 建設企業 -->
                            <p class="new-seminar-event__content__speaker__subtitle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_icon1.png" alt="">建設企業</p>
                            <ul class="new-seminar-event__speaker mb_86">
                                <li class="js-modal-open" data-target="modal06">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-1.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>岩本工業 株式会社<span class="city">［福岡市］</span></h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open" data-target="modal07">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-2.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>九電ドローンサービス 株式会社<span class="city">［福岡市］</span></h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open" data-target="modal08">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-3.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 福岡日野組<span class="city">［福岡市］</span></h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open" data-target="modal09">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-4.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 福山コンサルタント<span class="city">［福岡市］</span></h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open" data-target="modal10">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-5.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 小田島組<span class="city">［岩手県北上市］</span></h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                            </ul>
                            <!-- スタートアップ企業 -->
                            <p class="new-seminar-event__content__speaker__subtitle"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_icon2.png" alt="">スタートアップ企業等</p>
                            <ul class="new-seminar-event__speaker mb_86">
                                <li class="js-modal-open2" data-target="startup-modal06">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-1.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 Fusic</h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open2" data-target="startup-modal07">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-2.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>燈 株式会社</h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open2" data-target="startup-modal08">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-3.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>SORABITO 株式会社</h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open2" data-target="startup-modal09">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-4.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 ルクレ</h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                                <li class="js-modal-open2" data-target="startup-modal10">
                                    <img class="new-seminar-event__speaker__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-5.png?<?php echo date('YmdH'); ?>" alt="">
                                    <h4>株式会社 Stayway</h4>
                                    <p class="new-seminar-event__speaker__more">詳しく見る<img class="new-seminar-event__speaker__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_forward.png?<?php echo date('YmdH'); ?>" alt=""></p>
                                </li>
                            </ul>
                        </div>
                        <a class="apply-btn" href="https://forms.office.com/e/azaU6bJm55" target="_blank" rel="noopener noreferrer">
                            <p>参加申込はこちら<img src="<?php echo get_template_directory_uri(); ?>/assets/images/link-white.png?<?php echo date('YmdH'); ?>" alt=""></p>
                        </a>
                    </div>
                </img>
            </div>
        </section>

        <!-- speaker(建設企業）_モーダルここから -->
        <!-- 岩本工業 株式会社 -->
        <div id="modal06" class="speaker__modal js-modal">
            <div class="speaker__modal__bg js-modal-close"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-1.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">岩本工業 株式会社</p>
                    <p>福岡県福岡市西区愛宕2丁目19-37
                    </p>
                    <p><a href="https://iwamoto-g.co.jp/" target="_blank" rel="noopener noreferrer">https://iwamoto-g.co.jp/</a></p>
                </div>
                <div>
                    <p>福岡市の土木建設会社。土木工事全般のほか、舗装や水道、下水道工事を行う。<br>
                        クラウドの活用や測量におけるドローン技術の活用等、効率化に向けて積極的に取り組む。
                    </p>
                </div>
                <a class="js-modal-close speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- 九電ドローンサービス 株式会社 -->
        <div id="modal07" class="speaker__modal js-modal">
            <div class="speaker__modal__bg js-modal-close"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-2.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">九電ドローンサービス 株式会社</p>
                    <p>福岡県福岡市中央区渡辺通2丁目1-82</p>
                    <p><a href="https://kyuden-drone.co.jp/" target="_blank" rel="noopener noreferrer">https://kyuden-drone.co.jp/</a></p>
                </div>
                <div>
                    <p>最新技術における知見と豊富な機体とオペレータを保有する九電グループ会社。全国の地域課題を解決する手段として、ドローンやロボットの利活用を推進する。</p>
                </div>
                <a class="js-modal-close speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- 株式会社 福岡日野組 -->
        <div id="modal08" class="speaker__modal js-modal">
            <div class="speaker__modal__bg js-modal-close"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-3.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">株式会社 福岡日野組</p>
                    <p>福岡県福岡市早良区大字西2032-6</p>
                    <p><a href="http://f-hino.co.jp/" target="_blank" rel="noopener noreferrer">http://f-hino.co.jp/</a></p>
                </div>
                <div>
                    <p>福岡市の土木建設会社。地域密着型で水道管の改修、更新工事、ガス工事を行う。</p>
                </div>
                <a class="js-modal-close speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        </div>
        <!-- 株式会社 福山コンサルタント -->
        <div id="modal09" class="speaker__modal js-modal">
            <div class="speaker__modal__bg js-modal-close"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-4.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">株式会社 福山コンサルタント</p>
                    <p>福岡県福岡市博多区博多駅東3丁目6-18</p>
                    <p><a href="https://fukuyamaconsul.co.jp/" target="_blank" rel="noopener noreferrer">https://fukuyamaconsul.co.jp/</a></p>
                </div>
                <div>
                    <p>福岡市の建設コンサルタント。都市・地域、環境、交通のマネジメントや道路・鉄道・河川・下水道を含む各種インフラのマネジメント等を核とする。</p>
                </div>
                <a class="js-modal-close speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!--株式会社 小田島組 -->
        <div id="modal10" class="speaker__modal js-modal">
            <div class="speaker__modal__bg js-modal-close"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo1-5.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">株式会社 小田島組</p>
                    <p>岩手県北上市藤沢20地割35</p>
                    <p><a href="http://www.odashima.co.jp/" target="_blank" rel="noopener noreferrer">http://www.odashima.co.jp/</a></p>
                </div>
                <div>
                    <p>岩手の土木建設会社。公共工事を軸に地域価値の向上を目指し、工事写真整理代行サービス等新たな取り組みにも挑戦する。</p>
                </div>
                <a class="js-modal-close speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- speaker(建設企業）_モーダルここまで -->

        <!-- speaker(スタートアップ企業）_モーダルここから -->
        <!-- 株式会社 Fusic -->
        <div id="startup-modal06" class="speaker__modal js-modal2">
            <div class="speaker__modal__bg js-modal-close2"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-1.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">株式会社 Fusic</p>
                    <p>福岡県福岡市中央区天神4-1-7 第3明星ビル6F</p>
                    <p><a href="https://fusic.co.jp/" target="_blank" rel="noopener noreferrer">https://fusic.co.jp/</a></p>
                </div>
                <div>
                    <p>クラウド・AI・IoTなど幅広いテクノロジーを活かしたDX支援が強みの福岡企業。<br>
                        クライアントのDX課題に対して、幅広い技術力と豊富な開発実績に基づき、設計から開発・運用まで一気通貫で対応可能。
                    </p>
                </div>
                <a class="js-modal-close2 speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- 燈 株式会社 -->
        <div id="startup-modal07" class="speaker__modal js-modal2">
            <div class="speaker__modal__bg js-modal-close2"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-2.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">燈 株式会社</p>
                    <p>東京都文京区小石川1丁目28-1 小石川桜ビル4F</p>
                    <p><a href="https://akariinc.co.jp/" target="_blank" rel="noopener noreferrer">https://akariinc.co.jp/</a></p>
                </div>
                <div>
                    <p>建設業特化の生成AIに加え、見積・発注・請求・経費精算などの各種サービスで業務効率化を支援。</p>
                </div>
                <a class="js-modal-close2 speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- SORABITO 株式会社 -->
        <div id="startup-modal08" class="speaker__modal js-modal2">
            <div class="speaker__modal__bg js-modal-close2"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-3.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">SORABITO 株式会社</p>
                    <p>東京都中央区日本橋茅場町1丁目9-2 第一稲村ビル8F</p>
                    <p><a href="https://sorabito.com/" target="_blank" rel="noopener noreferrer">https://sorabito.com/</a></p>
                </div>
                <div>
                    <p>建設機械の調達・点検を効率化する「i-Rentalシリーズ」や、始業前点検や安全点検をペーパーレス化する「GENBAx点検」を提供。</p>
                </div>
                <a class="js-modal-close2 speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- 株式会社 ルクレ -->
        <div id="startup-modal09" class="speaker__modal js-modal2">
            <div class="speaker__modal__bg js-modal-close2"></div>
            <div class="speaker__modal__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-4.png?<?php echo date('YmdH'); ?>" alt="">
                <div class="speaker__modal__content__info">
                    <p class="speaker__modal__content__company">株式会社 ルクレ</p>
                    <p>東京都港区北青山1-2-3 青山ビル3F</p>
                    <p><a href="https://lecre.jp/" target="_blank" rel="noopener noreferrer">https://lecre.jp/</a></p>
                </div>
                <div>
                    <p>建設DXプラットフォーム「蔵衛門」を運営。電子小黒板が使える無料カメラアプリや、どこでも写真・図面が閲覧可能なクラウド等を展開。</p>
                </div>
                <a class="js-modal-close2 speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- 株式会社 Stayway -->
        <div id="startup-modal10" class="speaker__modal js-modal2">
            <div class="speaker__modal__bg js-modal-close2"></div>
            <div class="speaker__modal__content">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seminar_speaker_logo2-5.png?<?php echo date('YmdH'); ?>" alt="">
                    <div class="speaker__modal__content__info">
                        <p class="speaker__modal__content__company">株式会社 Stayway</p>
                        <p>福岡県福岡市中央区大名2丁目6−11 Fukuoka Growth Next</p>
                        <p><a href="https://stayway.co.jp/" target="_blank" rel="noopener noreferrer">https://stayway.co.jp/</a></p>
                    </div>
                    <div>
                        <p>補助金支援の効率化サービス「補助金クラウド」を運営。全国の補助金制度の一括検索や、AIによる申請書類作成も可能。
                        </p>
                    </div>
                </div>
                <a class="js-modal-close2 speaker__modal__content__close" href="">
                    <span>×</span>
                </a>
            </div>
        </div>
        <!-- speaker(スタートアップ企業）_モーダルここまで -->

        <section class="section related">
            <div class="past__event__container">
                <div class="new-sec-title past-event-title">
                    <h2 class="center">過去のイベント</h2>
                </div>
                <div class="past__event__box">
                    <h3 class="past__event__title BeVietnamPro">2024年度開催</h3>
                        <button class="open-past-event-modal detail-btn">
                            詳細を見る
                        </button>
                </div>
            </div>
        </section>
    </div>
</main>


<?php get_footer(); ?>