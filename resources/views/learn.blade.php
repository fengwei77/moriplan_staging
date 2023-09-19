@extends('layouts.template')

@section('content')
    <div sto class="mo_bg _learn">
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
            <span>開課洽詢</span>
        </div>
        <div class="book_ctn">
            <div class="book_box _2">
                <div class="book_label">Name 姓名</div>
                <input type="text" name="username" id="username">
                <div class="book_label">Mobile 手機號碼</div>
                <input type="text" name="mobile" id="mobile">
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
@endsection

@section('custom_js')
    <script src="./js/vendor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/vueperslides/dist/vueperslides.umd.js"></script>
    <link href="./js/vueperslides/dist/vueperslides.css" rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .swal2-content {
            font-size: 2em;
            FONT-WEIGHT: 400;
        }
    </style>
    <script>
        $(function () {
            let hash = window.location.hash;
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

                })
                .catch(error => {
                    this.errored = true
                })
                .finally(() => this.loading = false);

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

                    sto();
                    window.addEventListener("scroll", sto, false);
                    Array.prototype.slice.call(DOM(".mo_title")).forEach(function (el) {
                        var _line = document.createElement("div");
                        _line.className = "_line";
                        el.appendChild(_line);
                    });
                })
                .catch(error => {
                    this.errored = true
                })
                .finally(() => this.loading = false);
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

                })
                .catch(error => {
                    this.errored = true
                })
                .finally(() => this.loading = false);

            //送出表單
            $('#sned_btn').click(function () {
                let _username = $('#username').val();
                let _mobile = $('#mobile').val();
                let _email = $('#email').val();
                let _title = $('#title').val();
                let _message = $('#message').val();
                let post_data = {
                    username: _username,
                    mobile: _mobile,
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
                axios.post('{{ url('') }}/api/consultation', post_data)
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
                            $('#mobile').val('');
                            $('#email').val('');
                            $('#title').val('');
                            $('#message').val('');
                        }, 1000);

                    })
                    .catch(error => {
                        this.errored = true
                        $(".book_ctn").LoadingOverlay("hide", true);

                    })
                    .finally(() => this.loading = false);
            });


        });


    </script>
    <script src="./js/index.js"></script>
@endsection
