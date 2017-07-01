@extends('home.base2')
@section('title', "")
@section('css-link')
    <link rel="stylesheet" href="/css/weui.css"/>
    <link rel="stylesheet" href="/css/weui2.css"/>
    <link rel="stylesheet" href="/css/weui3.css"/>
    <link rel="stylesheet" type="text/css" href="/css/buy/normalize.css" />
    {{--<link rel="stylesheet" type="text/css" href="/css/buy/demo.css" />--}}
    <link rel="stylesheet" type="text/css" href="/css/buy/component.css" />
    <link rel="stylesheet" type="text/css" href="/css/buy/fxtransparent.css" />
    <script src="/js/buy/modernizr.custom.js"></script>
    @endsection
@section('css')
    <style type="text/css">
        body {
            background: url(/images/hbg.jpg);
        }
        .top_banner {
            /*width: 100%;*/
        }
        .container {
            /*margin: 10px;*/
            height: 220px;
            border-bottom: 5px solid black;
        }
        .top_banner img {
            width: 100%;
        }
        nav {
            display: block !important;
        }
        .component-transparent {
            height: 220px;
        }
        .component-transparent > ul {
            width: 280px;
        }
        .component {
            margin-bottom: 0;
            padding-top: 40px;
            background: #ffffff;
        }
        .buy-container {
            position: fixed;
            bottom: 0;
            background: #ffffff;
            width: 100%;
        }
        .weui_btn_area.weui_btn_area_inline {
            margin: 10px;
        }
        h3 {
            color: orangered;
        }
    </style>
    @endsection
@section('content')
    <div class="container top_banner">
        <div class="custom-select" style="display: none">
            <select id="fxselect" name="fxselect">
                <option value="-1" selected>选择一种效果...</option>
                <option value="fxSlideForward">Slide forward</option>
                <option value="fxTableDrop">Table Drop</option>
                <option value="fxSlideIt" selected>Slide it</option>
                <option value="fxBottleKick">Bottle kick</option>
                <option value="fxShelf">Off the Shelf</option>
            </select>
        </div>
        <div id="component" class="component component-transparent">
            <ul class="itemwrap">
                <li class="current"><img src="/images/13.png" alt="img09"/></li>
                <li><img src="/images/13.png" alt="img10"/></li>
                <li><img src="/images/13.png" alt="img11"/></li>
                <li><img src="/images/13.png" alt="img12"/></li>
            </ul>
            <nav>
                <a class="prev" href="#"></a>
                <a class="next" href="#">Next item</a>
            </nav>
        </div>
    </div>
    <h3>久久似懂非懂啥刚飒飒的发第三方支付</h3>
    <div class="buy-container">
        <div class="weui_btn_area weui_btn_area_inline">
            <a href="javascript:;" class="weui_btn weui_btn_primary">加入购物车</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary">结算</a>
        </div>
    </div>
    <!-- /container -->
    <script src="/js/buy/classie.js"></script>
    <script src="/js/buy/main.js"></script>
    @endsection