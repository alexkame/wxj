@extends('home.base2')
@section('title', "$goods->name")
@section('css-link')
    <link rel="stylesheet" type="text/css" href="/css/buy/normalize.css"/>
    {{--<link rel="stylesheet" type="text/css" href="/css/buy/demo.css" />--}}
    <link rel="stylesheet" type="text/css" href="/css/buy/component.css"/>
    <link rel="stylesheet" type="text/css" href="/css/buy/fxtransparent.css"/>
    <script src="/js/buy/modernizr.custom.js"></script>
@endsection
@section('css')
    <style type="text/css">
        body {
            background: url(/images/hbg.jpg);
        }

        a {
            color: gray;
        }

        a:active {
            color: #ffffff !important;
            background: black !important;
        }

        .toptips {
            display: none;
            position: fixed;
            bottom: 80px;
            text-align: center;
            width: 100%;
            z-index: 999;
        }

        .toptips span {
            background: #444444;
            color: #ffffff;
            padding: 15px 15px;
            border-radius: 5px;
            opacity: 0.9;
        }

        .container {
            /*margin: 10px;*/
            height: 220px;
            background: #ffffff;
            border-bottom: 3px solid black;
        }

        img {
            width: 100%;
        }

        nav {
            display: block !important;
        }

        .back {
            width: 2em;
            height: 2em;
            display: inline-block;
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 9999;
        }

        .component-transparent {
            height: 220px;
        }

        .component nav a {
            overflow: auto;
            line-height: 60px;
        }

        .component nav a::before {
            font-size: 0;
        }

        .component-transparent > ul {
            width: 90%;
            z-index: 0;
        }

        .component {
            margin-bottom: 0;
            padding-top: 40px;
        }

        .buy-container {
            position: fixed;
            bottom: 0;
            background: #ffffff;
            width: 100%;
            height: 51px;
        }

        .weui_btn_area.weui_btn_area_inline {
            margin: 10px;
        }

        .attribute-container {
            height: auto;
            position: relative;
        }

        .titel {
            /*border-bottom: 1px solid #eee;*/
            background: #ffffff;
            font-weight: bold;
            padding: 10px 60px 0 10px;
        }

        .attribute-container img {
            width: 30px;
            /*padding-right: 5px;*/
            vertical-align: bottom;
        }

        .c2 {
            color: #8a8a8a;
            background: #ffffff;
            padding-left: 10px;
            line-height: 1.4em;
        }

        .c2 img {
            width: 20px;
            vertical-align: bottom;
        }

        .placeholder {
            border: none;
            background: none;
            color: inherit;
            margin: 0;
            text-align: left;
            line-height: 1.6em;
            height: 1.6em;
            font-size: 0.9em;
            padding: 10px 0 5px 0;
        }

        .share {
            position: absolute;
            top: 10px;
            right: 5px;
            font-size: 12px;
            text-align: center;
        }

        .share img {
            width: 32px;
        }

        .weui_cell {
            padding: 10px;
        }

        .weui_cell:before {
            left: 0;
        }

        .c3 {
            height: 1em;
            line-height: 1em;
            padding-right: 2em;
            color: gray;
        }

        .c3 img {
            vertical-align: bottom;
        }

        .weui_cell {
            background: #ffffff;
        }

        .weui-number {
            color: #6F599C;
        }

        .weui-number-plus {
            margin-right: 0;
        }

        .clear-flex {
            flex: none;
            -webkit-flex: none;
            color: gray;
            font-size: .9em;
        }

        .detail-container {
            padding-bottom: 60px;
            padding-top: 10px;
        }

        .detail-container img {
            padding-bottom: 10px;
            width: 100%;
        }

        .price {
            color: orange;
            font-size: 1.4em;
            font-weight: bold;
        }

        .cut {
            color: #ffffff;
            padding: 0 5px;
            background: #6F599C;
        }
        .buy-1 {
            padding: 5px 5px 0 5px;
            display: inline-block;
            text-align: center;
            margin-left: 10px;
        }
        .buy-1 img {
            vertical-align: bottom;
            width: 1.6em;
        }
        .buy-1 p {
            font-size: .6em;
        }
        .buy-container .buy-2 {
            display: inline-block;
            float: right;
            height: inherit;
            line-height: 51px;
            padding: 0 12px;
            color: #ffffff;
            background: #6F599C;
        }
        .buy-2-1 {
            background: orange !important;
        }
        .weui-number-input {
            font-size: 18px;
        }
    </style>
@endsection
@section('content')
    <div class="container top_banner">
        <img class="back" src="/images/fanhui.png" onclick="javascript:history.go(-1);"/>

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
                <a class="prev" href="#">上一张</a>
                <a class="next" href="#">下一张</a>
            </nav>
        </div>
    </div>
    <div class="attribute-container">
        <a class="share">
            <img src="/images/fenxiangyoujiang.png"><br>
            分享有奖
        </a>

        <div class="titel">
            @if ($goods->attr->attribute == 0)
                <img src="/images/remai.png">
            @elseif ($goods->attr->attribute == 2)
                <img src="/images/icon-sale.png">
            @else
                <img src="/images/icon-cut.png">
            @endif
                {{ $goods->name }}
        </div>
        <div class="c2">
            <div>
                <span>售价:</span>
                <span class="price">￥{{ number_format($goods->price*$goods->attr->cut*0.1, 2, '.', '') }}</span>
                @if ($goods->attr->cut == 10)
                    {{--<span class="price">￥{{ $goods->price }}</span>--}}
                @else
                    <span style="text-decoration: line-through;">￥{{ $goods->price }}</span>
                    <span class="cut">{{ $goods->attr->cut }}折</span>
                @endif
            </div>
        </div>
        <div class="c2">
            <div class="weui-flex">
                <div class="weui-flex-item">
                    <div class="placeholder">快递：免运费</div>
                </div>
                <div class="weui-flex-item">
                    <div class="placeholder">销量{{ $goods->sale->sales }}笔</div>
                </div>
                <div class="weui-flex-item">
                    <div class="placeholder">
                        <img style="width: 1.6em;padding-right: 2px;" src="/images/zhengping.png">质量保证
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary clear-flex"><p>件数：</p></div>
        <div style="font-size: 0px;" class="weui_cell_ft">
            <a class="weui-number weui-number-sub needsclick">-</a>
            <input id="num" pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1' data-min="0"
                   data-max="10"
                   data-step="1" readonly>
            <a class="weui-number weui-number-plus needsclick">+</a>
        </div>
        <div class="weui_cell_ft" style="display: none;"> 0</div>
    </div>
    <div class="weui_panel">
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_small_appmsg">
                <div class="weui_cells weui_cells_access">
                    <a class="weui_cell" href="javascript:;">
                        <div class="weui_cell_hd c3">
                            <img style="width: 1em;padding-right: .4em;" src="/images/gou.png">摔坏包赔
                        </div>
                        <div class="weui_cell_bd weui_cell_primary c3">
                            <img style="width: 1em;padding-right: .4em;" src="/images/gou.png">48小时内发货
                        </div>
                        <span class="weui_cell_ft"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="weui_panel" style="margin-top: 0;">
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_small_appmsg">
                <div class="weui_cells weui_cells_access">
                    <a class="weui_cell" href="javascript:;">
                        <div class="weui_cell_hd c3" style="width: 100%;">
                            <img style="width: 1em;padding-right: .4em;" src="/images/pinglun.png">查看评论
                        </div>
                        <span class="weui_cell_ft"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-container">
        <img src="/images/chanpingxiangqing.png">

        <p><img src="/images/detail.jpg"></p>
    </div>
    <div class="buy-container">
        {{--<div class="weui_btn_area weui_btn_area_inline">--}}
            {{--<a href="javascript:;" class="weui_btn weui_btn_primary" onclick="addCart({{ $goods->id }})">加入购物车</a>--}}
            {{--<a href="javascript:;" class="weui_btn weui_btn_primary">结算</a>--}}
        {{--</div>--}}
        <a class="buy-1" href="/at/m"><img src="/images/icon-home.png"><p>进  店</p></a>
        <a class="buy-1" href="/at/m/basket"><img id="cart" src="/images/icon-cart.png"><p>购物车</p></a>
        <a class="buy-2 wxj-btn" href="javascript:;">立即购买</a>
        <a class="buy-2 buy-2-1 wxj-btn" href="javascript:;" onclick="addCart({{ $goods->id }})">加入购物车</a>
    </div>
    <!-- /container -->
    <script src="/js/buy/classie.js"></script>
    <script src="/js/buy/main.js"></script>
    <script>
        function addCart(id) {
            $.ajax({
                url: "/service/cart/add",
                type: "get",
                data: {id: id, num: $("#num").val()},
                timeout: 3000,
                dataType: "json",
                success: function (data) {
                    console.log(data.status);
                    if (data.status != 0) {
                        $(".toptips").show();
                        $(".toptips span").html("服务器出小差了，请稍后再试");
                        setTimeout(function () {
                            $(".toptips").hide();
                        }, 2000);
                        return false;
                    }
                    if (data.status == 0) {
                        $(".toptips").show();
                        $(".toptips span").html(data.message);
                        setTimeout(function () {
                            $(".toptips").hide();
                        }, 2000);
                        $("#cart").attr("src", "/images/icon-cart-smile.png");
                    }
                },
                error: function (xhr, status, error) {
//                    console.log(xhr);
//                    console.log(status);
//                    console.log(error);
                }
            });
        }
        function upDownOperation(element) {
            var _input = element.parent().find('input'),
                    _value = _input.val(),
                    _step = _input.attr('data-step') || 1;
            //检测当前操作的元素是否有disabled，有则去除
            element.hasClass('disabled') && element.removeClass('disabled');
            //检测当前操作的元素是否是操作的添加按钮（.input-num-up）‘是’ 则为加操作，‘否’ 则为减操作
            if (element.hasClass('weui-number-plus')) {
                var _new_value = parseInt(parseFloat(_value) + parseFloat(_step)),
                        _max = _input.attr('data-max') || false,
                        _down = element.parent().find('.weui-number-sub');

                //若执行‘加’操作且‘减’按钮存在class='disabled'的话，则移除‘减’操作按钮的class 'disabled'
                _down.hasClass('disabled') && _down.removeClass('disabled');
                if (_max && _new_value >= _max) {
                    _new_value = _max;
                    element.addClass('disabled');
                }
            } else {
                var _new_value = parseInt(parseFloat(_value) - parseFloat(_step)),
                        _min = _input.attr('data-min') || false,
                        _up = element.parent().find('.weui-number-plus');
                //若执行‘减’操作且‘加’按钮存在class='disabled'的话，则移除‘加’操作按钮的class 'disabled'
                _up.hasClass('disabled') && _up.removeClass('disabled');
                if (_min && _new_value <= _min) {
                    _new_value = _min;
                    element.addClass('disabled');
                }
            }
            _input.val(_new_value);
        }

        $(function () {
            $('.weui-number-plus').click(function () {
                upDownOperation($(this));
            });
            $('.weui-number-sub').click(function () {
                upDownOperation($(this));
            });
        });
    </script>
@endsection