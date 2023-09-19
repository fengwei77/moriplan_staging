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
            <div class="address_frame">
                <div class="address_ctn">
                    <p class="an_fadeUp t1">森SPACE新竹市經國路二段100號10-11樓
                    </p>
                    <p class="an_fadeUp p1">
                        「森SPACE」位於新竹市區30多年的舊商業大樓內，原本是閒置空間的兩層樓共280坪的空間，經過森計畫團隊的規劃、改造後，重新賦予這兩層新的價值與生命。</p>
                </div>
            </div>
            <div id="bf_frame">
                <div id="bf_ctn">
                    <div class="bf_frame">
                        <div class="bf_ctn" id="works_pictures">
                            <!--datas-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
    @include('layouts.footer')
    <!-- base -->
    </div>
    <!-- vue  -->
@endsection

@section('custom_js')
    <script src="./js/vendor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script>
        var mo_banner;
        $(function () {
            let hash = window.location.hash;

            axios.get('{{ url('') }}/api/inner_banners').then(response => {
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

                setTimeout(function () {
                    $('#app').fadeIn();
                }, 800);
            });


            axios.get('{{ url('') }}/api/works')
                .then(response => {
                    // console.log(this.items)
                    let works_items = Object.keys(response.data.items).map(function (_) {
                        return response.data.items[_];
                    });
                    // console.log(this.data_items);

                    let w_html = '';
                    works_items.forEach(function (item) {
                        let title = item.title;
                        let b_img = "{{url('upload').'/'}}" + item.before_file_name;
                        let a_img = "{{url('upload').'/'}}" + item.after_file_name;

                        w_html +=
                            `<div class="bf_box">
                                <div sto class="bf_item">
                                    <p class="_title">BEFORE</p>
                                    <div class="mo_img"><img src="${b_img}"></div>
                                    <div class="_line"></div>
                                    <div class="_name">${title}</div>
                                </div>
                                <div sto class="_arrow">
                                    <img class="md2_hide" src="./img/work/arrow.png">
                                        <img class="up_md2_hide" src="./img/work/arrow2.png">
                                </div>
                                <div sto class="bf_item">
                                    <p class="_title">AFTER</p>
                                    <div class="mo_img"><img src="${a_img}"></div>
                                    <div class="_line"></div>
                                    <div class="_name">${title}</div>
                                </div>
                            </div>`;
                    });
                    $('#works_pictures').html(w_html);

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


        function toBF(index) {
            index += 1;
            var bf_box = document.querySelector(".bf_box:nth-child(" + index + ")");
            if (bf_box) {
                moveTo(bf_box);
            }
        }

        var cardList = Array.prototype.slice.call(DOM(".card"));
        for (var i = 0; i < cardList.length; i++) {
            cardList[i].setAttribute("onclick", "toBF(" + i + ")");
        }
    </script>
    <script src="./js/work.js"></script>
@endsection

