@extends('home.base')
@section('title', '微小酒')
@section('css-link')
    <link rel="stylesheet" href="/css/swiper.min.css"/>
    <link rel="stylesheet" href="/css/marquee.css">
@endsection
@section('css')
    <style>
        header img {
            width: 60px;
        }

        #searcher {
            position: relative;
            width: 80%;
            display: inline-block;
            line-height: 60px;
        }

        #searcher input {
            height: 44px;
            width: 100%;
            border-radius: 5px;
            outline: none;
            border: none;
            font-size: 18px;
            font-family: 黑体;
            padding-left: 10px;
        }

        #searcher input:focus {
            border: 2px solid black
        }

        #searcher img {
            position: absolute;
            right: 10px;
            width: 30px;
            top: 18px;
        }

        .swiper-container {
            width: 100%;
            height: 240px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: green;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 100%;
            height: 240px;
        }

        .row {
            width: 100%;
            height: auto;
            padding-bottom: 76px;
        }

        .frame { /*border:1px solid #CC0033;*/
            width: 49%;
            height: auto;
            display: inline-block;
            text-align: center
        }

        .fcontainer {
            /*border: 1px solid #f5f5f5;*/
            border: none;
            display: inline-block;
            width: 90%;
            height: auto;
            margin: 10px;
            border-radius: 3px;
            background-color: #FFFFFF;
            box-shadow: #ddd 1px 1px 9px;
            position: relative;
        }
        .fcontainer img {
            width: 100%;
        }
        .hot {
            width:60px !important;
            position: absolute;
            top:0px;
            right: 0px;
        }
    </style>
@endsection
@section('content')
    <!--头部-->
    <header class="text-center">
        {{--<img src="/images/logo.png">--}}
        <div id="searcher">
            <input name="search" placeholder="商品搜索：输入商品关键词">
            <img id="searchBtn" src="/images/search.png">
        </div>
    </header>
    <!-- 轮播 -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/1.jpg"></div>
            <div class="swiper-slide"><img src="/images/2.jpg"></div>
            <div class="swiper-slide"><img src="/images/3.jpg"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- 结束 -->
    {{--跑马灯--}}
    <div class="htmleaf-content bgcolor-3">
        <div class="content">
            <div class="container">
                <div class="marquee">
                    <ul class="marquee-content-items">
                        <li>微小酒全场包邮，快来选购！</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{--结束--}}
    <div class="row">
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <img class="hot" src="/images/hot.png">
                <p>!!!!</p>
                <p>!!!!</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <img class="hot" src="/images/push.png">
                <p>!!!!</p>
                <p>!!!!</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <p>!!!!</p>
                <p>!!!!</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <p>!!!!</p>
                <p>!!!!</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <p>!!!!</p>
                <p>!!!!</p>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="/js/marquee.js"></script>
    <script type="text/javascript">
        $("#a_home").attr("href", "javascript:;");
        $("#home_img").attr("src", "/images/home_active.png");
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true
        });
        createMarquee();
    </script>
@endsection
