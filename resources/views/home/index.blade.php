@extends('home.base')
@section('title', '微小酒')
@section('css-link')
    <link rel="stylesheet" href="/css/swiper.min.css"/>
    <link rel="stylesheet" href="/css/marquee.css">
@endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <!--头部-->
    <header id="top-title" class="text-center">
        {{--<img src="/images/logo.png">--}}
        <div id="searcher">
            <input name="search" placeholder="商品搜索：输入商品关键词">
            <img id="searchBtn" src="/images/icon-search.png">
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
    <div class="gcontainer">
        <div class="frame">
            <div class="fcontainer">
                <div style="position:relative;">
                    <img src="/images/g1.jpg">
                    <p>微小酒全场包邮微小酒全场包邮</p>
                </div>
                <img class="hot" src="/images/hot.png">
                <p>价格：￥888</p>
                <p>月销量：99</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <img class="hot" src="/images/push.png">
                <p>1</p>
                <p>价格：￥888</p>
                <p>月销量：99</p>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <img src="/images/g1.jpg">
                <p>微小酒全场包邮微小酒全场包邮</p>
                <p>价格：￥888</p>
                <p>月销量：99</p>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="/js/marquee.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //改变菜单图标
            $("#a-home").attr("href", "javascript:;");
            $("#home-img").attr("src", "/images/home-active.png");
            //实例化轮播
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true
            });
            //启动跑马灯
            createMarquee();
            var winHeight = $(document).scrollTop();
            console.log(winHeight);
            $(window).scroll(function () {
                var scrollY = $(document).scrollTop();// 获取垂直滚动的距离，即滚动了多少
                console.log(scrollY);
                if (scrollY > 200) { //如果滚动距离大于550px则隐藏，否则删除隐藏类
                    $('#top-title').addClass('hiddened');
                }
                else {
                    $('#top-title').removeClass('hiddened');
                }

                if (scrollY > winHeight) { //如果没滚动到顶部，删除显示类，否则添加显示类
                    $('#top-title').removeClass('hshowed');
                }
                else {
                    $('#top-title').addClass('hshowed');
                }

            });
        });

    </script>
@endsection
