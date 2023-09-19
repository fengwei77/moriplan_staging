@extends('layouts.template')

@section('content')
    <div id="app" style="display: none;">
        <div class="space_frame">
            <div class="mo_banner">
                <div class="owl-carousel" id="carousel_object">
                    {{--slides--}}
                </div>
                <div class="mo_dot"></div>
            </div>
            <div class="to_frame">
                <div class="to_ctn ctn1">
                    <img class="an_fadeUp _logo" src="./img/common/logo2.png">
                    <p class="an_fadeUp title" id="info_title"></p>
                    <p class="an_fadeUp context" id="info_content"></p>
                    <a href="./space" class="an_fadeUp btn hover1">
                        <img src="./img/index/btn1.png">
                    </a>
                </div>
            </div>
            <div sto class="mo_bg _learn" id="news_">
                <img src="./img/index/title-learn.png">
            </div>
            <div class="new_frame">
                <div class="mo_title"><span>NEWS</span></div>
                <div id="new_frame">
                    <div id="new_ctn">
                        <div class="new_ctn ctn1" id="news_items">
                            <!--news items-->
                        </div>
                    </div>
                </div>
                <div class="new_link">
                    <a href="https://www.accupass.com/organizer/detail/2011200126296747422120" class="new_btn hover1">
                        <img src="./img/index/btn2.png">
                    </a>
                </div>
            </div>
            <div sto class="mo_bg _book"></div>
            <div id="contact" class="book_frame">
                <div class="mo_title">
                    <span>預約參觀</span>
                </div>
                <div class="book_ctn">
                    <div class="book_box _2">
                        <div class="book_label">Name 姓名</div>
                        <input type="text" name="username" id="username">
                        <div class="book_label">E-mail</div>
                        <input type="text" name="email" id="email">
                        <div class="book_label">Title 標題</div>
                        <input type="text" name="title" id="title">
                        <div class="book_label">Message 訊息</div>
                        <textarea name="message" id="message"></textarea>
                        <div class="_send hover1" id="sned_btn">SEND</div>
                    </div>
                    <div class="book_box _1">
                        <img class="_logo" src="./img/common/title-reservation.png">
                        <div class="_info" id="contact_info">
                            <!--contact info-->
                        </div>
                        <div sto sto-loop class="_map">
                            <img id="info_image">
                        </div>
                        <div class="book_link">
                            <a class="hover1" id="fb_link" target="_blank"><img
                                    src="./img/common/facebook.png"/></a>
                            <a class="hover1" id="ig_link" target="_blank"><img
                                    src="./img/common/instagram.png"/></a>
                            <a class="hover1" id="line_link" target="_blank"><img
                                    src="./img/common/line.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="./js/vendor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
    <style>
        .swal2-content {
            font-size: 2em;
            FONT-WEIGHT: 400;
        }
    </style>
    <script>
        var mo_banner;
        $(function () {
            let hash = window.location.hash;
            let md = new MobileDetect(window.navigator.userAgent);

            axios.get('{{ url('') }}/api/banners',
                {
                    params: {
                        position: 1
                    }
                }
            ).then(response => {
                let banner_items = Object.keys(response.data.items).map(function (_) {
                    return response.data.items[_];
                });
                let b_html = '';
                console.log(banner_items);
                banner_items.forEach(function (item) {
                    b_html += `<div class="card">
                                            <img class="lg_hide"  src="{{url('upload').'/'}}${item.file_name}">
                                            <img class="up_lg_hide md_hide" src="{{url('upload').'/'}}${item.file_name_p}">
                                            <img class="up_md_hide" src="{{url('upload').'/'}}${item.file_name_m}">
                                        </div>`;
                });
                $('#carousel_object').html(b_html);
                //banner
                if (DOM(".mo_banner .owl-carousel").length) {
                    mo_banner = $(DOM(".mo_banner .owl-carousel"));

                    if (DOM(".mo_dot").length) {
                        var _dots = document.createElement("div");
                        _dots.className = "_dots";
                        var _cl = DOM(".mo_banner .card").length;
                        for (var i = 0; i < _cl; i++) {
                            var _dot = document.createElement("div");
                            _dot.className = "_dot";
                            _dot.style.width = "calc( (100% - " + (_cl * 20 + 1) + "px) / " + _cl + " )";
                            _dot.setAttribute("onclick", "owl_to(" + i + ")");
                            _dots.appendChild(_dot);
                        }
                        DOM(".mo_dot")[0].appendChild(_dots);
                    }


                    function dot_width() {
                        var windowW = window.innerWidth;
                        var _margin = 20;
                        if (windowW > 576) {//up_sm
                            _margin = 20;
                        } else {
                            _margin = 10;
                        }
                        Array.prototype.slice.call(DOM(".mo_dot ._dot")).forEach(function (dot) {
                            dot.style.width = "calc( (100% - " + (_cl * _margin + 1) + "px) / " + _cl + " )";
                        })
                    }

                    dot_width();
                    window.addEventListener("resize", dot_width, false);
                    mo_banner.owlCarousel({
                        items: 1,
                        loop: true,
                        dotsContainer: ".mo_dot ._dots"
                    });
                }
                Array.prototype.slice.call(DOM(".mo_title")).forEach(function (el) {
                    var _line = document.createElement("div");
                    _line.className = "_line";
                    el.appendChild(_line);
                });
                window.onload = function () {
                    //sto
                    sto();
                    window.addEventListener("scroll", sto, false);
                }
                $('#app').fadeIn();
            });

            // 介紹內容
            axios.get('{{ url('') }}/api/infos')
                .then(response => {
                    let info_items = Object.keys(response.data.items).map(function (_) {
                        return response.data.items[_];
                    });
                    console.log(info_items);
                    info_items.forEach(function (item) {
                        $('#info_title').html(item.title);
                        $('#info_content').html(item.description.replace(/\n/g, `<br class="sm_hide">`));
                    });

                });

            // 最新消息
            axios.get('{{ url('') }}/api/news')
                .then(response => {
                    let news_items = Object.keys(response.data.items).map(function (_) {
                        return response.data.items[_];
                    });
                    let n_html = '';
                    news_items.forEach(function (item) {
                        let article_date = new Date(item.article_date.replace(/\s/, 'T')).getMonth() + 1 + '/' + new Date(item.article_date.replace(/\s/, 'T')).getDate();
                        n_html += `<div class="an_fadeRight new_box">
                                <div class="_date">${article_date}</div>
                                <a class="mo_img" href="${item.url}" ${item.open_blank ? 'target=_blank' : ''} >
                                    <img src="{{url('upload').'/'}}${item.file_name}" alt="${item.alt_txt}" >
                                </a>
                                <div class="_line"></div>
                                <div class="_text">${item.title.replace(/\n/g, '<br>')}</div>
                            </div>`;
                    });

                    $('#news_items').html(n_html);

                });

            // 聯繫我們敘述
            axios.get('{{ url('') }}/api/contact_infos')
                .then(response => {
                    let contact_info_items = Object.keys(response.data.items).map(function (_) {
                        return response.data.items[_];
                    });
                    let ci_html = '';
                    contact_info_items.forEach(function (item) {
                        ci_html += `<p class="_address">${item.address}</p>
                            <p class="_tel">tel ${item.tel} fax ${item.fax}</p>
                            <p class="_email">e-mail ${item.email}</p>
                            <p class="_date">${item.open_date} ${item.open_time}
                            </p>`;
                        $('#info_image').attr('src', `{{url('upload').'/'}}${item.file_name}`);

                        $('#fb_link').attr('href', `${item.fb_link}`);
                        $('#ig_link').attr('href', `${item.ig_link}`);
                        $('#line_link').attr('href', `${item.line_link}`);
                    });

                    $('#contact_info').html(ci_html);
                    -
                        // console.log(hash);
                        setTimeout(function () {
                            console.log(hash);
                            if (hash == "#news") {
                                let top = $('#news_').offset().top - 80; //Getting Y of target element
                                $("html,body").animate({scrollTop: top}, 800);

                            }
                        }, 100)
                    console.log(md.mobile());          // 'Sony'
                    console.log(md.phone());           // 'Sony'
                    console.log(md.tablet());          // null
                    let add_h = 0;
                    if (md.mobile() != null) {
                        add_h = -20;
                    }
                    if (md.tablet() != null) {
                        add_h = -20;
                    }
                    setTimeout(function () {
                        console.log(hash);
                        if (hash == "#contact") {
                            let top = $('#contact').offset().top + add_h; //Getting Y of target element
                            $("html,body").animate({scrollTop: top}, 800);

                        }
                    }, 1000)
                });

            //送出表單
            $('#sned_btn').click(function () {
                let _username = $('#username').val();
                let _email = $('#email').val();
                let _title = $('#title').val();
                let _message = $('#message').val();
                let post_data = {
                    username: _username,
                    email: _email,
                    title: _title,
                    message: _message
                }
                if (_username == '' || _email == '') {
                    Swal.fire({
                        title: '',
                        text: '請填寫資料',
                        icon: 'warning',
                        confirmButtonText: '確定'
                    });
                    return false;
                }
                $(".book_ctn").LoadingOverlay("show", {
                    image: "{{ url('img/box_loading.svg') }}",
                    imageAnimation: '',
                    text: "",
                    background: "rgba(157,160,155,0.5)"
                });
                setTimeout(function () {
                    $.LoadingOverlay("text", "done");
                }, 2500);
                axios.post('{{ url('') }}/api/contact_us', post_data)
                    .then(response => {
                        console.log(response);
                        setTimeout(function () {
                            $(".book_ctn").LoadingOverlay("hide", true);
                            Swal.fire({
                                title: '',
                                text: '送出完成',
                                icon: '',
                                confirmButtonText: '確定'
                            });
                            $('#username').val('');
                            $('#email').val('');
                            $('#title').val('');
                            $('#message').val('');
                        }, 1000);

                    });
            });


        });

        function owl_to(index) {
            mo_banner.trigger("to.owl.carousel", index);
        }

        window.onload = function () {
            //sto
            sto();
            window.addEventListener("scroll", sto, false);
        }
    </script>
    <script src="./js/index.js"></script>
@endsection
