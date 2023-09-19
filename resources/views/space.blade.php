
@extends('layouts.template')

@section('content')
    <div class="space_frame">
        <div sto class="mo_bg _space">
            <img src="./img/common/title-kv.png">
        </div>
        <div class="share_frame">
            <div class="share_ctn">
                <div class="share_box _1">
                    <img class="an_fadeUp" src="./img/common/logo_black.png">
                </div>
                <div class="share_box _2">
                    <p class="an_fadeUp title">「MUJI RENOVATION空間改造企劃」<br class="sm_hide">打造全台第一間共享辦公室</p>
                    <p class="an_fadeUp context">在2020年，當疫情改變工作型態後，家與辦公室的界線不再明確，在家工作以及彈性辦公空間成為企業與個人創業者的考量，「MUJI
                        RENOVATION空間改造企劃」嘗試融合對好感生活的實踐，於科技重鎮新竹打造全台第一間共享辦公室。</p>
                    <p class="an_fadeUp context">
                        「森SPACE」位於新竹市區商業大樓內，以兩層樓共計約280坪進行設計，一層以「單元的辦公空間」為主，利用實木框架以可變動性的隔間方式，提供彈性的多人辦公室及會議室。</p>
                    <p class="an_fadeUp context">
                        另一層則為「開放共享層」，以「口袋」概念來做空間的圍塑，提供軟性隔間窗簾，全部拉上就是獨立空間，若是打開則可開放多人共享，創造出各種不同的工作樣貌，改變共用空間，將新竹地方文化注入深厚的人文藝術DNA。</p>
                    <div class="icon_ctn">
                        <div class="an_fadeRight icon_box">
                            <img src="./img/space/icon-1.png">
                            <p class="p1">創<span></span>作</p>
                            <p class="p2">WORK</p>
                        </div>
                        <div class="an_fadeRight icon_box">
                            <img src="./img/space/icon-2.png">
                            <p class="p1">空<span></span>間</p>
                            <p class="p2">SPACE</p>
                        </div>
                        <div class="an_fadeRight icon_box">
                            <img src="./img/space/icon-3.png">
                            <p class="p1">森<span></span>學</p>
                            <p class="p2">LEARN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp_frame">
            <div class="mo_title"><span>SPACE</span></div>
            <div id="sp_ctn1" class="sp_ctn ctn22 lg_hide">
                <div class="an_fadeRight sp_box"><img src="./img/space/place1_p.jpg"></div>
                <div class="an_fadeRight sp_box"><img src="./img/space/place2_p.jpg"></div>
                <div class="an_fadeRight sp_box"><img src="./img/space/place3_p.jpg"></div>
                <div class="an_fadeRight sp_box"><img src="./img/space/place4_p.jpg"></div>
                <div class="an_fadeRight sp_box"><img src="./img/space/place5_p.jpg"></div>
                <div class="an_fadeRight sp_box"><img src="./img/space/place6_p.jpg"></div>
            </div>
            <div class="sp-wol up_lg_hide">
                <div id="sp_ctn2" class="owl-carousel">
                    <!-- carousel -->
                </div>
                <div class="owl-button prev" onclick="SPACE.trigger('prev.owl.carousel')"><img
                        src="./img/space/left.jpg"></div>
                <div class="owl-button next" onclick="SPACE.trigger('next.owl.carousel')"><img
                        src="./img/space/right.jpg">
                </div>
            </div>
        </div>
        <div class="think_frame">
            <div class="think_ctn">
                <p class="an_fadeUp title">改變思考的工作方式</p>
                <p class="an_fadeUp context">就像地球上的各種生物一樣，通過適當地控制彼此之間的距離和關係，我們創造了一個傳達各種、各樣人們的思考環境。</p>
                <p class="an_fadeUp context">享受「共用工作空間」的一切優點無論是與夥伴們之間合作、與不同領域人才交流激發出創意靈感、或一個可以完全專注沉思的空間。</p>
            </div>
        </div>
        <div class="room_frame">
            <div class="title">
                <span><img src="./img/space/icon-2.png">ROOM TYPE</span>
            </div>
            <div id="room_ctn1">
                <div id="room_ctn2">
                    <div class="room_ctn">
                        <div class="room_box">
                            <div class="_floor">
                                <div class="_ball">11F</div>
                            </div>
                            <div class="an_fadeUp _card">
                                <div class="mo_img"><img src="./img/space/type-1.jpg"></div>
                                <div class="_text">
                                    <div>
                                        <div class="p1">個人自由座</div>
                                        <div class="p2"><br>一日券、半日券、月租
                                            <div class="p3">
                                                <div class="_label">適合:</div>
                                                初期創業者、自由工作者、獨立接案者、遠端工作、兼差工作者​
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room_box">
                            <div class="_floor">
                                <div class="_ball">11F</div>
                            </div>
                            <div class="an_fadeUp _card">
                                <div class="mo_img"><img src="./img/space/type-2.jpg"></div>
                                <div class="_text">
                                    <div>
                                        <div class="p1">個人固定座</div>
                                        <div class="p2"><br>最短租期 1個月
                                            <div class="p3">
                                                <div class="_label">適合:</div>
                                                初期創業者、自由工作者、獨立接案者、遠端工作、兼差工作者​
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room_box">
                            <div class="_floor">
                                <div class="_ball">10F</div>
                            </div>
                            <div class="an_fadeUp _card">
                                <div class="mo_img"><img src="./img/space/type-3.jpg"></div>
                                <div class="_text">
                                    <div>
                                        <div class="p1">個人固定座</div>
                                        <div class="p2"><br>最短租期 1個月
                                            <div class="p3">
                                                <div class="_label">適合:</div>
                                                初期創業者、自由工作者、獨立接案者、遠端工作、兼差工作者​
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room_box">
                            <div class="_floor">
                                <div class="_ball">10F</div>
                                <img class="_arrow" src="./img/space/arrow.png">
                            </div>
                            <div class="an_fadeUp _card">
                                <div class="mo_img"><img src="./img/space/type-4.jpg"></div>
                                <div class="_text">
                                    <div>
                                        <div class="p1">獨立辦公室</div>
                                        <div class="p2"><br>最短租期 6個月 可做營業登記<br>營業登記優惠 NT$ 2,500/月<br>
                                            <div class="p3">
                                                <div class="_label">適合:</div>
                                                中小型企業、外商園區企業在台據點、業務在新竹市中心的辦公基地
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mo_title"><span>場地空間租借</span></div>
        <div id="info_frame1">
            <div id="info_ctn1">
                <div class="info_frame">
                    <div class="info_ctn">
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/lesson-1.jpg"></div>
                            <div class="info_context">
                                <p class="t1">吧檯區</p>
{{--                                <p class="t2">1小時<span>600<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/lesson-2.jpg"></div>
                            <div class="info_context">
                                <p class="t1">圓球吊燈區</p>
{{--                                <p class="t2">1小時<span>600<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/lesson-3.jpg"></div>
                            <div class="info_context">
                                <p class="t1">餐桌區</p>
{{--                                <p class="t2">1小時<span>800<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/lesson-4.jpg"></div>
                            <div class="info_context">
                                <p class="t1">沙發區</p>
{{--                                <p class="t2">1小時<span>600<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/lesson-5.jpg"></div>
                            <div class="info_context">
                                <p class="t1">懶骨頭區</p>
{{--                                <p class="t2">1小時<span>600<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mo_title"><span>活動教室/洽談室</span></div>
        <div id="info_frame2">
            <div id="info_ctn2">
                <div class="info_frame">
                    <div class="info_ctn">
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/classroom-1.jpg"></div>
                            <div class="info_context">
                                <p class="t1">2-4人教室/洽談室</p>
{{--                                <p class="t2">1小時<span>350<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 09:00—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/classroom-2.jpg"></div>
                            <div class="info_context">
                                <p class="t1">4-6人教室/洽談室</p>
{{--                                <p class="t2">1小時<span>450<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 09:00—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/classroom-3.jpg"></div>
                            <div class="info_context">
                                <p class="t1">12-20人會議室</p>
{{--                                <p class="t2">1小時<span>800<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 08:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數 1小時</li>
                                    <li>現場若追加時數以1小時為計價單位，離場前結清逾時費用</li>
                                </ul>
                            </div>
                        </div>
                        <div class="an_fadeUp info_box">
                            <div class="mo_img"><img src="./img/space/classroom-4.jpg"></div>
                            <div class="info_context">
                                <p class="t1">50-80人展演空間</p>
{{--                                <p class="t2">4小時<span>8000<font>(未稅)</font></span></p>--}}
                                <p class="_g">可租借時段</p>
                                <ul>
                                    <li>平日 (上班日)：一 ~ 五 18:30—21:30</li>
                                    <li>假日：六、日及國定假日全天</li>
                                    <li>最低租借時數四小時</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="focus_frame">
            <div class="mo_title"><span>3種元素創造集中力</span></div>
            <div id="focus_ctn1">
                <div id="focus_ctn2">
                    <div class="focus_ctn">
                        <div class="focus_box">
                            <div class="focus_item">
                                <div class="an_fadeUp focus_context">
                                    <p class="t1">每日一杯</p>
                                    <div class="logo _MUJI">MUJI POCKET</div>
                                    <p class="_text">
                                        隨著工作型態改變，現代人只要帶著一台筆電與平板就能四處辦公，工作者選擇不同的工作環境，偷偷放空，或是想激盪出更多創意的火花，在這裡感覺天天都是咖啡廳的輕鬆環境。</p>
                                </div>
                            </div>
                            <div class="focus-owl">
                                <a id="MUJI" href="https://www.muji.com/tw/" class="owl-carousel">

                                </a>
                                <div class="owl-button prev" id="muji_prev"><img
                                        src="./img/space/left.jpg"></div>
                                <div class="owl-button next" id="muji_next"><img
                                        src="./img/space/right.jpg"></div>
                            </div>
                        </div>
                        <div class="focus_box">
                            <div class="focus_item">
                                <div class="an_fadeUp focus_context">
                                    <p class="t1">應用書本的濃度</p>
                                    <div class="logo _boven"><img src="./img/space/boven_logo.png"></div>
                                    <p class="_text">
                                        您可以隨時閱讀雜誌圖書館的書，因此您不必擔心要集中精力尋找靈感、與想法；有如一種持續進化的練習，更貼近人與人的思考、真正自由地閱讀。</p>
                                </div>
                            </div>
                            <div class="focus-owl">
                                <a href="https://www.facebook.com/boven437" id="boven" class="owl-carousel">
                                </a>
                                <div class="owl-button prev" id="boven_prev"><img
                                        src="./img/space/left.jpg"></div>
                                <div class="owl-button next" id="boven_next"><img
                                        src="./img/space/right.jpg"></div>
                            </div>
                        </div>
                        <div class="focus_box">
                            <div class="focus_item">
                                <div class="an_fadeUp focus_context">
                                    <p class="t1">植物設計</p>
                                    <div class="logo _jodie">
                                        <div class="l1">
                                            <font>JODIE</font> 轉圈圈
                                        </div>
                                        <div class="l2">玩花．玩佈置</div>
                                    </div>
                                    <p class="_text">
                                        隨著人們對生活空間的重視，用植物「設計」出理想的工作空間，綠色植栽不只可以美化環境，同時也具有舒展身心的作用，多種元素共存打造工作者的日光溫室。</p>
                                </div>
                            </div>
                            <div class="focus-owl">
                                <a href="http://jodiecircle.blogspot.com/" id="jodie" class="owl-carousel">
                                </a>
                                <div class="owl-button prev" id="jodie_prev"><img
                                        src="./img/space/left.jpg"></div>
                                <div class="owl-button next" id="jodie_next"><img
                                        src="./img/space/right.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relax_frame">
            <div class="an_fadeDown">「森SPACE」融合花藝與書籍的工作空間，喝一杯咖啡配著溫暖心，放鬆一下。</div>
        </div>
    </div>

    <!-- footer -->
    @include('layouts.footer')
    <!-- base -->
@endsection

@section('custom_js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
    <script>

        var owlInit = {
            items: 1,
            margin: 0,
            dots: false,
            loop: true
        };
        var MUJI = $("#MUJI");
        var boven = $("#boven");
        var jodie = $("#jodie");
        $(function () {
            axios.get('{{ url('') }}/api/banners',
                {
                    params: {
                        position: 'pocket'
                    }
                }
            ).then(response => {
                let banner_items = Object.keys(response.data.items).map(function (_) {
                    return response.data.items[_];
                });
                MUJI_html = '';
                console.log(banner_items);
                banner_items.forEach(function (item) {
                    MUJI_html += ` <img src="{{url('upload').'/'}}${item.file_name}">`;
                    $('#MUJI').html(MUJI_html);
                });

                MUJI.owlCarousel(owlInit);
                $('#muji_prev').click(function () {
                    MUJI.trigger('prev.owl.carousel');
                });
                $('#muji_next').click(function () {
                    MUJI.trigger('next.owl.carousel');
                });
            }).catch(error => {
                this.errored = true
            });

            axios.get('{{ url('') }}/api/banners',
                {
                    params: {
                        position: 'boven'
                    }
                }
            ).then(response => {
                let banner_items = Object.keys(response.data.items).map(function (_) {
                    return response.data.items[_];
                });
                boven_html = '';
                console.log(banner_items);
                banner_items.forEach(function (item) {
                    boven_html += ` <img src="{{url('upload').'/'}}${item.file_name}">`;
                    $('#boven').html(boven_html);
                });

                boven.owlCarousel(owlInit);
                $('#boven_prev').click(function () {
                    boven.trigger('prev.owl.carousel');
                });
                $('#boven_next').click(function () {
                    boven.trigger('next.owl.carousel');
                });
            }).catch(error => {
                this.errored = true
            });

            axios.get('{{ url('') }}/api/banners',
                {
                    params: {
                        position: 'jodie'
                    }
                }
            ).then(response => {
                let banner_items = Object.keys(response.data.items).map(function (_) {
                    return response.data.items[_];
                });
                jodie_html = '';
                console.log(banner_items);
                banner_items.forEach(function (item) {
                    jodie_html += ` <img src="{{url('upload').'/'}}${item.file_name}">`;
                    $('#jodie').html(jodie_html);
                });
                jodie.owlCarousel(owlInit);
                $('#jodie_prev').click(function () {
                    jodie.trigger('prev.owl.carousel');
                });
                $('#jodie_next').click(function () {
                    jodie.trigger('next.owl.carousel');
                });
            });

        })
    </script>
    <script src="./js/space.js"></script>
@endsection
