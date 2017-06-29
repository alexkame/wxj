@extends('home.base')
@section('title', '微小酒')
@section('css-link')
    <link rel="stylesheet" href="/css/swiper.min.css"/>
    <link rel="stylesheet" href="/css/marquee.css">
@endsection
@section('css')
    <style>
        ul {
            padding: 0;
            margin-bottom: 0;
        }

        ul li {
            display: inline-block;
            padding-bottom: 20px;
            width: 30%;
        }

        .sort {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            color: black;
        }
        .sort ul li>img {
            width:100px;height:100px;border-radius:50%;background-color: #FF0033;
        }
        .weui-flex {
            padding-top: 20px;
        }
        .placeholder {
            height: auto;
            padding: 10px;
            background: none;
            color: black;
            padding: 0px;
        }
        .placeholder img {
            width:100px;height:100px;border-radius:50%;
        }
        .weui_btn {
            display: inline-block;
            color: #FF0033 !important;
            border: 1px solid #FF0033;
            margin: 10px;
            font-size: inherit;
        }
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
            {{--<div class="swiper-slide"><img src="/images/b1.jpg"></div>--}}
            <div class="swiper-slide"><img src="/images/b1.jpg"></div>
            <div class="swiper-slide"><img src="/images/b2.jpg"></div>
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
    {{--分类--}}
    <div class="weui-flex">
        <div class="weui-flex-item">
            <div class="placeholder">
                <img src="/images/huoyanjiu.jpg" /><br>
                <span>火焰酒</span>
            </div>
        </div>
        <div class="weui-flex-item">
            <div class="placeholder">
                <img src="/images/hongjiu.jpg" /><br>
                <span>法国红酒</span>
            </div>
        </div>
        <div class="weui-flex-item">
            <div class="placeholder">
                <img src="/images/putaojiu.jpg" /><br>
                <span>葡萄酒</span>
            </div>
        </div>
    </div>
    <div class="sort">
        <img style="width:160px; " src="/images/youxuantuijian.png" />
    </div>
    <div class="gcontainer">
        <div class="frame">
            <div class="fcontainer">
                <div style="position:relative;">
                    <img src="/images/g1.jpg">
                    <p>微小酒全场包邮微小酒全场包邮</p>
                    <img class="hot" src="/images/hot.png">
                </div>
                <p>心动五折</p>
                <a href="javascript:;" class="weui_btn bg-orange-b">查看宝贝</a>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <div style="position:relative;">
                    <img src="/images/g1.jpg">
                    <p>微小酒全场包邮微小酒全场包邮</p>
                    <img class="hot" src="/images/jian.png">
                </div>
                <p>心动五折</p>
                <a href="javascript:;" class="weui_btn bg-orange-b">查看宝贝</a>
            </div>
        </div>
        <div class="frame">
            <div class="fcontainer">
                <div style="position:relative;">
                    <img src="/images/g1.jpg">
                    <p>微小酒全场包邮微小酒全场包邮</p>
                    <img class="hot" src="/images/jiang.png">
                </div>
                <p>心动五折</p>
                <a href="javascript:;" class="weui_btn bg-orange-b">查看宝贝</a>
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
                if (scrollY > 100) { //如果滚动距离大于550px则隐藏，否则删除隐藏类
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
