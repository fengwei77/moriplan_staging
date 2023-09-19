@extends('layouts.template')

@section('content')
<div class="space_frame">
    <div sto class="mo_bg _plan"></div>
    <div class="change_frame">
        <div class="change_ctn">
            <div class="an_fadeUp change_box _1">
                <img class="_logo" src="./img/common/logo_black.png">
            </div>
            <div class="an_fadeUp change_box _2">
                <p class="p1">改變思考、改變社會。</p>
                <p class="p2">隨著AI和IoT等技術發展，建築與室內設計將改變未來居住者的定義，<br class="md_hide">我們想建造的是讓人們扎根的地方，善待環境與世界，<br class="md_hide">堅信若生活能過得更好，社會也會變好，並改變建築和住宅市場。<br>思考日常生活裡蘊含空間的無限可能，創造讓心靈感到溫暖的產品，<br class="md_hide">這是森計畫成立以來的基本理念，始於在地未來生活中最需要的企業。</p>
            </div>
        </div>
    </div>
    <div id="plan_frame">
        <div id="plan_ctn">
            <div class="plan_frame">
                <div class="plan_ctn">
                    <img class="_circle" src="./img/plan/plan-c-out.png">
                    <div class="plan">
                        <div>
                            森計畫
                            <img src="./img/plan/Logotype.png">
                        </div>
                    </div>
                    <a href="{{ url('work') }}" class="_ball _z">森制所</a>
                    <a href="{{ url('space') }}" class="_ball _s">森 <font>SPACE</font>
                    </a>
                    <a href="https://www.accupass.com/organizer/detail/2011200126296747422120" class="_ball _j">
                        <span>森學</span>
                        <span>講堂</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
@include('layouts.footer')
<!-- base -->
@endsection

@section('custom_js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/plan.js"></script>
@endsection
