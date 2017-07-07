@extends('home.base2')
@section('title', "我的订单")
@section('css-link')
    <script type="text/javascript" src="/js/updown.js"></script>
    <script type="text/javascript" src="/js/lazyimg.js"></script>
@endsection
@section('css')
    <style type="text/css">
        body {
            background: #ffffff !important;
        }

        a:active {
            color: #ffffff !important;
            background: black !important;
        }

        .weui_tab {
            position: fixed;
            top: 0;
            z-index: 999;
            width: 100%;
            background: #ffffff;
            border-bottom: 1px solid #dddddd;
        }

        .weui_tab_nav {
            padding-top: 10px;
            width: 90%;
            margin: 0 auto;
        }

        .weui_tab_nav .weui_nav_red {
            color: black;
            border: 1px solid #6F599C;
            height: 40px;
            line-height: 40px;
            border-right: none;
        }

        .weui_tab_nav .weui_navbar_item:first-child {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .weui_tab_nav .weui_navbar_item:last-child {
            border-right: 1px solid #6F599C;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .active {
            color: #ffffff !important;
            background: #6F599C !important;
        }

        .order-container {
            margin-top: 60px;
        }

        .dropload-down, .dropload-up {
            border: #ffffff !important;
            background: #ffffff !important;
            border-bottom: none !important;
        }
        .weui_panel:after, .weui_panel:before {
            content: none;
        }
        .weui_media_box {
            padding: 10px;
        }
        .title-bar {
            border-bottom: 1px solid #dddddd;
            display: flex;
            display: -webkit-flex;
        }

        .title-name {

        }
    </style>
@endsection
@section('content')
    <div class="weui_tab" style="height:60px;" id="tab6">
        <div class="weui_tab_nav">
            <a href="javascript:" class="weui_navbar_item weui_nav_red active"> 全部(10) </a>
            <a href="javascript:" class="weui_navbar_item weui_nav_red"> 待付款(2) </a>
            <a href="javascript:" class="weui_navbar_item weui_nav_red"> 待发货(6) </a>
            <a href="javascript:" class="weui_navbar_item weui_nav_red"> 签收(2) </a>
        </div>
    </div>
    <div class="order-container">
        <div></div>
        <div class="weui_panel weui_panel_access">

            <div class="weui_panel_bd">


            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
//        $('#tab6 a').bind('click', function () {
//            $(this).addClass('tab-active');
//        });
            //页数
            var page = 0;
            // 每页展示10个
            var size = 10;
            $('.weui_panel').dropload({
                scrollArea: window,
                autoLoad: true,//自动加载
                domDown: {//上拉
                    domClass: 'dropload-down',
                    domRefresh: '<div class="dropload-refresh f15 "><i class="icon icon-20"></i>上拉加载更多</div>',
                    domLoad: '<div class="dropload-load f15"><span class="weui-loading"></span>正在加载中...</div>',
                    domNoData: '<div class="dropload-noData">没有更多数据了</div>'
                },
                domUp: {//下拉
                    domClass: 'dropload-up',
                    domRefresh: '<div class="dropload-refresh"><i class="icon icon-114"></i>上拉加载更多</div>',
                    domUpdate: '<div class="dropload-load f15"><i class="icon icon-20"></i>释放更新...</div>',
                    domLoad: '<div class="dropload-load f15"><span class="weui-loading"></span>正在加载中...</div>'
                },
                loadUpFn: function (me) {//刷新
                    $.ajax({
                        type: 'GET',
                        url: 'more.json',
                        dataType: 'json',
                        success: function (data) {
                            var result = '';
                            for (var i = 0; i < data.lists.length; i++) {
                                result += '  <a href="cell4_.html" class="weui_media_box weui_media_appmsg">'
                                    + '<div class="weui_media_hd weui-updown">'
                                    + '<img class="weui_media_appmsg_thumb lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAAFACAYAAADNkKWqAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAwNi8wNS8xNrqrthwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAAEMElEQVR4nO3UQQEAEADAQPRvqIESxPDYXYK9Nvc+dwAErd8BAL8YIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBA1gPYJgYfB4WzDQAAAABJRU5ErkJggg==" alt="" data-img="' + data.lists[i].pic + '">'
                                    + '</div>'
                                    + '<div class="weui_media_bd">'
                                    + '<h4 class="weui_media_title">' + i + ' ' + data.lists[i].title + '</h4>'
                                    + '<p class="weui_media_desc">' + data.lists[i].date + '</p>'
                                    + '</div>'
                                    + '</a>';
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                $('.weui_panel_bd').html(result);
                                var lazyloadImg = new LazyloadImg({
                                    el: '.weui-updown [data-img]', //匹配元素
                                    top: 50, //元素在顶部伸出长度触发加载机制
                                    right: 50, //元素在右边伸出长度触发加载机制
                                    bottom: 50, //元素在底部伸出长度触发加载机制
                                    left: 50, //元素在左边伸出长度触发加载机制
                                    qriginal: false, // true，自动将图片剪切成默认图片的宽高；false显示图片真实宽高
                                    load: function (el) {
                                        el.style.cssText += '-webkit-animation: fadeIn 01s ease 0.2s 1 both;animation: fadeIn 1s ease 0.2s 1 both;';
                                    },
                                    error: function (el) {

                                    }
                                });
                                // 每次数据加载完，必须重置
                                me.resetload();
                                // 重置索引值，重新拼接more.json数据
                                page = 0;
                                // 解锁
                                me.unlock();
                                me.noData(false);
                            }, 1000);
                        },
                        error: function (xhr, type) {
                            alert('Ajax error!');
                            // 即使加载出错，也得重置
                            me.resetload();
                        }
                    });
                },
                loadDownFn: function (me) {//加载更多
                    page++;
                    window.history.pushState(null, document.title, window.location.href);
                    var result = '';
                    $.ajax({
                        type: 'GET',
                        url: 'http://ons.me/tools/dropload/json.php?page=' + page + '&size=' + size,
                        dataType: 'json',
                        success: function (data) {
                            var arrLen = data.length;
                            if (arrLen > 0) {


                                for (var i = 0; i < arrLen; i++) {
                                    result += '  <a href="cell4_.html" class="weui_media_box weui_media_appmsg">'
                                        + '<div class="weui_media_hd weui-updown">'
                                        + '<img class="weui_media_appmsg_thumb lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAAFACAYAAADNkKWqAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAwNi8wNS8xNrqrthwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAAEMElEQVR4nO3UQQEAEADAQPRvqIESxPDYXYK9Nvc+dwAErd8BAL8YIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBAlgECWQYIZBkgkGWAQJYBAlkGCGQZIJBlgECWAQJZBghkGSCQZYBA1gPYJgYfB4WzDQAAAABJRU5ErkJggg==" alt="" data-img="' + data[i].pic + '">'
                                        + '</div>'
                                        + '<div class="weui_media_bd">'
                                        + '<h4 class="weui_media_title">' + data[i].id + ' ' + data[i].title + '</h4>'
                                        + '<p class="weui_media_desc">' + data[i].date + '</p>'
                                        + '</div>'
                                        + '</a>';
                                }
                                // 如果没有数据
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                            }

                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                $('.weui_panel_bd').append(result);
                                var lazyloadImg = new LazyloadImg({
                                    el: '.weui-updown [data-img]', //匹配元素
                                    top: 50, //元素在顶部伸出长度触发加载机制
                                    right: 50, //元素在右边伸出长度触发加载机制
                                    bottom: 50, //元素在底部伸出长度触发加载机制
                                    left: 50, //元素在左边伸出长度触发加载机制
                                    qriginal: false, // true，自动将图片剪切成默认图片的宽高；false显示图片真实宽高
                                    load: function (el) {
                                        el.style.cssText += '-webkit-animation: fadeIn 01s ease 0.2s 1 both;animation: fadeIn 1s ease 0.2s 1 both;';
                                    },
                                    error: function (el) {

                                    }
                                });
                                //
                                // 每次数据加载完，必须重置
                                me.resetload();
                            }, 1000);
                        },
                        error: function (xhr, type) {
                            alert('Ajax error!');
                            // 即使加载出错，也得重置
                            me.resetload();
                        }
                    });
                }
            });
        });
    </script>
@endsection