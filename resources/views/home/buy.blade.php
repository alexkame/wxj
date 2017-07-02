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
        a {
            color: gray;
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
            padding-right: 5px;
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
        .c3 img{
            vertical-align: bottom;
        }
        .weui_cell {
            background: #ffffff;
        }
        .weui-number-plus {
            margin-right: 0;
        }
        .clear-flex {
            flex: none;
            -webkit-flex: none;
            color: gray;
        }
        .detail-container {
            padding-bottom: 60px;
            padding-top: 10px;
        }
        .detail-container img{
            padding-bottom: 10px;
            width: 100%;
        }
    </style>
    @endsection
@section('content')
    <div class="container top_banner">
        <img class="back" src="/images/fanhui.png"/>
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
    <div class="attribute-container">
        <a class="share">
            <img src="/images/fenxiangyoujiang.png"><br>
            分享有奖
        </a>
        <div class="titel"><img src="/images/remai.png">奔富洛神山庄奔富洛神山庄奔富洛神山庄</div>
        <div class="c2">
            <div>
                <span>价格:</span>
                <span style="color: orange;font-size: 1.4em;font-weight: bold">￥999</span>
                <span style="text-decoration: line-through;">￥888</span>
            </div>
        </div>
        <div class="c2">
            <div class="weui-flex">
                <div class="weui-flex-item"><div class="placeholder">快递：免运费</div></div>
                <div class="weui-flex-item"><div class="placeholder">总销量90笔</div></div>
                <div class="weui-flex-item">
                    <div class="placeholder">
                        <img style="width: 1.6em;padding-right: 2px;" src="/images/zhengping.png">质量保证
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary clear-flex"><p>已选择：</p></div>
        <div style="font-size: 0px;" class="weui_cell_ft">
            <a class="weui-number weui-number-sub needsclick">-</a>
            <input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1' data-min="0" data-max="10"
                   data-step="1">
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
        <div class="weui_btn_area weui_btn_area_inline">
            <a href="javascript:;" class="weui_btn weui_btn_primary">加入购物车</a>
            <a href="javascript:;" class="weui_btn weui_btn_primary">结算</a>
        </div>
    </div>
    <!-- /container -->
    <script src="/js/buy/classie.js"></script>
    <script src="/js/buy/main.js"></script>
    <script>
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