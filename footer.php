<footer class="footer">
    <div class="inner">
        <div class="footer__wrapper">
            <div class="footer__sitemap">
                <ul>
                    <li>
                        <a href="<?php echo home_url('/news'); ?>">
                            <p>お知らせ</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/#program'); ?>">
                            <p>プログラム</p>
                        </a>
                        <ul class="footer-submenu">
                            <li>
                                <a href="<?php echo home_url('/#new-event1'); ?>">第3回 協業マッチングイベント「建設DX」</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-au'); ?>">8月 現場見学会</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-04'); ?>">第4回 協業マッチングイベント「建設DX」</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-de'); ?>">12月 意見交換会</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" role="button" class="open-past-event-modal">
                            <p>過去のイベント</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://forms.office.com/e/SPYqBPiedx" target="_blank" rel="noopener noreferrer">
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                    <li id="footer__privacy">
                        <a href="<?php echo home_url('/privacy'); ?>">
                            <p>PRIVACY POLICY</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer__info">
                <h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png?<?php echo date('YmdH'); ?>" alt="">
                    <span>地場建設企業等と<br>スタートアップ企業との協業マッチング支援</span>
                </h3>
                <p class="footer__info__organizer">主催：<a style="text-decoration:underline" href="https://www.city.fukuoka.lg.jp/doro-gesuido/s-tyousei/hp/ibe.html" target="_blank" rel="noopener noreferrer">福岡市道路下水道局</a></p>
                <div class="footer__info__operator">
                    <p>運営：有限責任監査法人トーマツ 福岡事務所</p>
                    <p class="contact">MAIL：akihisa.iwasaki@tohmatsu.co.jp(担当：岩﨑)<br>
                        TEL：070-3326-7085</p>
                </div>
                <hr>
                <div>
                    <p class="note">※この事業は有限責任監査法人トーマツが福岡市道路下水道局より受託し、実施しています。</p>
                    <p class="copyright">&copy; Copyright 2025 地場建設企業等とスタートアップ企業との協業マッチング支援</p>
                </div>
            </div>

        </div>

    </div>
</footer>
<!-- 2024年度イベントモーダル用の空コンテナ -->
<div id="theme-path" data-theme-url="<?php echo get_template_directory_uri(); ?>"></div>
<div id="past-event-modal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:#fff; overflow:auto; z-index:9999;">
    <div class="modal-header">
        <div class="past-modal-title">過去のイベント: 2024</div>
        <div id="close-past-event-modal">
            <span class="close-icon">×</span>
            <span class="close-label">閉じる</span>
        </div>
    </div>
    <div class="event-intro-section">
        <div class="event-intro-title BeVietnamPro">2024</div>
        <div class="event-intro-description">2024年度に開催したイベントを<span class="break">掲載します。</span></div>
    </div>
    <div id="past-event-modal-content"></div>
</div>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<!-- slick.js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- common.js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js?ver=20241030"></script>

<?php wp_footer(); ?>
</body>

</html>