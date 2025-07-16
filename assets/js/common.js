//　メニューモーダル
$(function () {
    $('#openModal').click(function () {
        $('body').css('overflow-y', 'hidden'); // 本文の縦スクロールを無効
        $('#modalArea').fadeIn(500);
    });
    $('#closeModal , #modalBg , .menu-btn').click(function () {
        $('body').css('overflow-y', 'auto');
        $('#modalArea').fadeOut(500);
    });
});

//　モーダル1(登壇者_企業)
$(function () {
    $('.js-modal-open').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
    });
});

//　モーダル2(登壇者_スタートアップ)
$(function () {
    $('.js-modal-open2').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close2').on('click', function () {
        $('.js-modal2').fadeOut();
        return false;
    });
});

//　モーダル3(課題一覧)_スライド
$(function () {
    $('.js-modal-open3').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target'); // 対象のモーダルIDを取得
            var modal = document.getElementById(target);
            $(modal).addClass('show'); // モーダルをスライドイン
            return false;
        });
    });

    $('.js-modal-close3').on('click', function () {
        $('.js-modal3').removeClass('show'); // モーダルをスライドアウト
        return false;
    });
});

// モーダル開いた時のヘッダー
$(document).ready(function () {
    $('.js-modal-open').on('click', function () {
        $('header').css('display', 'none');
    });

    $('.js-modal-close').on('click', function () {
        $('header').css('display', 'block');
    });
});

$(document).ready(function () {
    $('.js-modal-open2').on('click', function () {
        $('header').css('display', 'none');
    });

    $('.js-modal-close2').on('click', function () {
        $('header').css('display', 'block');
    });
});

$(document).ready(function () {
    $('.js-modal-open3').on('click', function () {
        $('header').css('display', 'none');
    });

    $('.js-modal-close3').on('click', function () {
        $('header').css('display', 'block');
    });
});

/* 2024年の過去イベントモーダル */
$(function () {
    const themeURL = themeData.themeURL;

    // CSSを動的に読み込む関数
    function loadPastStyle() {
        if (!$('#past-style-css').length) {
        $('<link>')
            .attr({
            rel: 'stylesheet',
            id: 'past-style-css',
            href: themeURL + '/assets/css/past-style.css?' + new Date().getTime(),
            })
            .appendTo('head');
        }
    }

    $('.open-past-event-modal').on('click', function (e) {
        e.preventDefault();

        loadPastStyle();

        $.ajax({
        url: '/wp-admin/admin-ajax.php',
        method: 'POST',
        data: {
            action: 'load_past_event',
        },
        success: function (data) {
            $('#past-event-modal-content').html(data);
            $('#past-event-modal').fadeIn();
        },
        error: function () {
            alert('コンテンツの読み込みに失敗しました。');
        },
        });
    });

    $('#close-past-event-modal').on('click', function () {
        $('#past-event-modal').fadeOut(function () {
        $('#past-event-modal-content').empty();
        });
    });
});
