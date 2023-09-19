@extends('layouts.template')

@section('content')
    <div id="app">
        <div class="space_frame">
            <div class="mo_banner">
                                <div class="owl-carousel">
                                    <div class="card" v-for="item in banner_items">
                                        <img class="lg_hide" :src="'{{url('upload').'/'}}' + item.file_name">
                                        <img class="up_lg_hide md_hide" :src="'{{url('upload').'/'}}' + item.file_name_p">
                                        <img class="up_md_hide" :src="'{{url('upload').'/'}}' + item.file_name_m">
                                    </div>
                                </div>
                                <div class="mo_dot"></div>

            </div>
            <div class="to_frame">
                <div class="to_ctn ctn1">
                    <img class="an_fadeUp _logo" src="./img/common/logo2.png">
                    <p class="an_fadeUp title">從「家」到「辦公室」的距離有多遠呢?</p>
                    <p class="an_fadeUp context">在2020年，當疫情改變工作型態後，<br class="sm_hide">家與辦公室的界線不再明確，<br class="sm_hide">在家工作以及彈性辦公空間成為企業與個人創業者的考量，<br
                            class="sm_hide">「森SPACE」嘗試融合對好感生活的實踐。<br class="sm_hide">我們試圖在「森SPACE」裡以家為主題的<br
                            class="up_lg_hide sm_hide">共用工作空間呈現新的工作風格。</p>
                    <a href="./space.html" class="an_fadeUp btn hover1">
                        <img src="./img/index/btn1.png">
                    </a>
                </div>
            </div>
            <div sto class="mo_bg _learn">
                <img src="./img/index/title-learn.png">
            </div>
            <div id="new" class="new_frame">
                <div class="mo_title"><span>NEWS</span></div>
                <div id="new_frame">
                    <div id="new_ctn">
                        <div class="new_ctn ctn1">
                            <div class="an_fadeRight new_box">
                                <div class="_date">12/12</div>
                                <a class="mo_img" href="https://www.accupass.com/event/2011230220221092447181">
                                    <img src="./img/demo/news-2.jpg">
                                </a>
                                <div class="_line"></div>
                                <div class="_text">吳東龍 / TOMIC, DUNG LUNG WU<br>風格Ｘ旅行，發現MY PACE的工作與生活風格</div>
                            </div>
                            <div class="an_fadeRight new_box">
                                <div class="_date">12/15</div>
                                <a class="mo_img"
                                   href="https://www.facebook.com/morispacehsinchu/photos/a.135768178319130/153871709842110/">
                                    <img src="./img/demo/news-1.jpg">
                                </a>
                                <div class="_line"></div>
                                <div class="_text">加入(line)粉絲團，「森SPACE」免費1日體驗券</div>
                            </div>
                            <div class="an_fadeRight new_box">
                                <div class="_date">12/23</div>
                                <a class="mo_img"
                                   href="https://www.wowlavie.com/Article/AE2002100?utm_source=facebook_lavie&utm_medium=referral">
                                    <img src="./img/demo/news-3.jpg">
                                </a>
                                <div class="_line"></div>
                                <div class="_text">森Space with Muji Renovation空間改造計畫！<br>全台第一個無印良品的共享辦公室</div>
                            </div>
                            <div class="an_fadeRight new_box _4">
                                <div class="_date">12/23</div>
                                <a class="mo_img" href="#">
                                    <img src="./img/demo/news-3.jpg">
                                </a>
                                <div class="_line"></div>
                                <div class="_text">森Space with Muji Renovation空間改造計畫！<br>全台第一個無印良品的共享辦公室</div>
                            </div>
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
                        <input type="text">
                        <div class="book_label">E-mail</div>
                        <input type="text">
                        <div class="book_label">Title 標題</div>
                        <input type="text">
                        <div class="book_label">Message 訊息</div>
                        <textarea></textarea>
                        <div class="_send hover1">SEND</div>
                    </div>
                    <div class="book_box _1">
                        <img class="_logo" src="./img/common/title-reservation.png">
                        <div class="_info">
                            <p class="_address">新竹市北區經國路二段100號10-11F</p>
                            <p class="_tel">tel 03 533 2863 fax 03 533 2963</p>
                            <p class="_email">e-mail morispace100@gmail.com</p>
                            <p class="_date">週一～週五 AM09:00-PM18:00
                            </p>
                        </div>
                        <div sto sto-loop class="_map">
                            <img src="./img/index/map.jpg">
                        </div>
                        <div class="book_link">
                            <a class="hover1" href="https://www.facebook.com/morispacehsinchu" target="_blank"><img
                                    src="./img/common/facebook.png"/></a>
                            <a class="hover1" href="https://www.instagram.com/mori.space/" target="_blank"><img
                                    src="./img/common/instagram.png"/></a>
                            <a class="hover1" href="https://lin.ee/d7cNMFy" target="_blank"><img
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
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
            integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
            crossorigin="anonymous"></script>
    <script type="module">

        const vm = Vue.createApp({
            data() {
                return {
                    banner_items: [],
                }
            },
            created() {
                //banner
                axios.get('https://moriplan.dev/api/banners')
                    .then(response => {
                        this.banner_items = Object.keys(response.data.items).map(function (_) {
                            return response.data.items[_];
                        });
                    })
                    .catch(error => {
                        console.log(error)
                        this.errored = true
                    })
                    .finally(() => this.loading = false)


            },
            mounted() {
                console.log(this.banner_items);
                //banner
                console.log(DOM(".mo_banner .owl-carousel").length);
                if (DOM(".mo_banner .owl-carousel").length) {
                    var mo_banner = $(DOM(".mo_banner .owl-carousel"));

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
                    function owl_to(index) {
                        mo_banner.trigger("to.owl.carousel", index);
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
                sto();
                window.addEventListener("scroll", sto, false);

            },
            methods: {},

        }).mount('#app');


    </script>
    <script src="./js/index.js"></script>
@endsection
