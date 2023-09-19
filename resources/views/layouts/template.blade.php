<!DOCTYPE html>
<html lang="zh-tw" class="no-js">

<head>
    <title>森SPACE</title>
    <link rel="shortcut icon" href="./img/common/moriplan icon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="title" content="森Space with Muji Renovation">
    <meta name="keywords" content="MoriPlan,森計畫,森Space,Muji,空間改造,無印良品,共享辦公室,會議室,森計畫,新竹,彈性辦公,個人辦公,創作,辦公空間,JODIE,boven,"/>
    <meta name="description" content="森Space with Muji Renovation空間改造計畫！全台第一個無印良品的共享辦公室"/>

    <meta property="og:url" content="http://"/>
    <meta property="og:title" content="森Space with Muji Renovation"/>
    <meta property="og:description" content="森Space with Muji Renovation空間改造計畫！全台第一個無印良品的共享辦公室"/>
    <meta property="og:image" content="img/common/fb.jpg"/>
    <meta property="og:type" content="website"/>

    <!-- plugin -->
    <link rel="stylesheet" href="./plugin/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./plugin/owl/owl.theme.default.min.css">
    <!-- init -->
    <link rel="stylesheet" href="./css/layout.css"/>
    <!-- base -->
    <script src="./plugin/jquery-3.5.1.min.js"></script>
</head>
<body>
@include('layouts.header')
@yield('content')
<!-- base -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.12.1/polyfill.min.js" integrity="sha512-uzOpZ74myvXTYZ+mXUsPhDF+/iL/n32GDxdryI2SJronkEyKC8FBFRLiBQ7l7U/PTYebDbgTtbqTa6/vGtU23A==" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js" integrity="sha512-kp7YHLxuJDJcOzStgd6vtpxr4ZU9kjn77e6dBsivSz+pUuAuMlE2UTdKB7jjsWT84qbS8kdCWHPETnP/ctrFsA==" crossorigin="anonymous"></script>--}}
<script src="./plugin/jquery-3.5.1.min.js"></script>
<script src="./plugin/owl/owl.carousel.min.js"></script>
<!-- init -->
<script src="./js/common/init.js"></script>
<script src="./js/common/const.js"></script>
@yield('custom_js')
</body>

</html>
