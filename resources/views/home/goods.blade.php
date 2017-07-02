@extends('home.base2')
@section('title', "")
@section('css-link')
    {{--<script src="/js/zepto.min.js"></script>--}}
    @endsection
@section('css')
    <style type="text/css">
        a {
            display: block;
            color: black;
            text-decoration: none;
        }
        #top {
            font-size: 0;
        }
        #top img{
            width: 100%;
        }
        #content {
            display: flex;
            display: -webkit-flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            /*background-color: #CCCC99;*/
            /*background: url("/images/hbg.jpg");*/
            background-color: rgba(238, 218, 198, .6) !important;
        }
        #left, #right {
            display: inline-block;
            margin: 10px;
        }
        #left {
            -webkit-flex: 1 0 0;
            flex: 1 0 0;
        }
        #right {
            -webkit-flex: 2 0 0;
            flex: 2 0 0;
            margin-left: 0;
        }
        #left-memu {
            border: 2px solid white;
            background: rgba(244, 244, 244, .6);
            border-radius: 5px;
            color: #FF9900;
        }
        #left-memu li {
            text-align: center;
            margin: 3px;
            line-height: 2em;
        }
        .active {
            border-radius: 5px;
            background: #990033;
            color: #ffffff;
        }
        .right-content {
            background: #ffffff;
            border-radius: 5px;
            height: auto;
            position: relative;
            margin-bottom: 20px;
        }
        h4{
            line-height: 1.2em;
            padding: 5px 0 5px 5px;
        }
        .right-content img {
            width: 100%;
        }
        .weui_cell_ft {
            position: absolute;
            bottom: 5px;
            right: 10px;
            color: gray;
        }
        .weui_cell_ft img {
            width: 16px;
            position: relative;
            top: 3px;
            left: 3px;
        }
        .weui-number {
            height: 16px;
            width: 16px;
            line-height: 10px;
            color: #ffffff;
            text-align: center;
        }
        .weui-number-sub {
            padding: 3px;
            border-radius: 50%;
            margin-top: 2px;
            margin-right: 5px;
            background: #1AAD19;
        }
        .weui-number-plus {
            padding: 3px;
            border-radius: 50%;
            margin-top: 2px;
            margin-left: 5px;
            background: #1AAD19;
        }
        .weui-number-input {
            height: 16px;
            font-size: 16px;
            margin-top: 2px;
        }
        .btncontainer {
            position: fixed;
            /*position: absolute;*/
            bottom: 0;
            left: 0;
        }
    </style>
    @endsection
@section('content')
    <div class="big">
        <div id="top">
            <img src="/images/zhanshi.jpg">
        </div>
        <div id="content">
            <div id="left">
                <ul id="left-memu">
                    <li class="active">伏特加</li>
                    <li>XO</li>
                    <li>鸡尾酒</li>
                    <li>威士忌</li>
                    <li>伏特加</li>
                    <li>AOE</li>
                    <li>鸡尾酒</li>
                    <li>威士忌</li>
                </ul>
            </div>
            <div id="right">
                <a class="right-content" href="/at/m/goods/1">
                    <div>
                        <h4>你的名字我的姓氏你的名字我的姓氏</h4>
                        <img src="/images/g2.jpg">
                        <h4>￥299</h4>
                        <span class="weui_cell_ft">查看宝贝<img src="/images/jiantou.png"></span>
                        {{--<div style="font-size: 0px;" class="weui_cell_ft">--}}
                        {{--<a class="weui-number weui-number-sub needsclick">-</a>--}}
                        {{--<input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1'--}}
                        {{--data-min="1" data-max="10" data-step="1">--}}
                        {{--<a class="weui-number weui-number-plus needsclick">+</a>--}}
                        {{----}}
                        {{--</div>--}}
                    </div>
                </a>
                <a class="right-content" href="/at/m/goods/1">
                    <div>
                        <h4>你的名字我的姓</h4>
                        <img src="/images/g2.jpg">
                        <h4>￥299</h4>
                        <span class="weui_cell_ft">查看宝贝<img src="/images/jiantou.png"></span>
                        {{--<div style="font-size: 0px;" class="weui_cell_ft">--}}
                        {{--<a class="weui-number weui-number-sub needsclick">-</a>--}}
                        {{--<input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1'--}}
                        {{--data-min="1" data-max="10" data-step="1">--}}
                        {{--<a class="weui-number weui-number-plus needsclick">+</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </a>
                <a class="right-content" href="/at/m/goods/1">
                    <div>
                        <h4>你的名字我的姓</h4>
                        <img src="/images/g2.jpg">
                        <h4>￥299</h4>
                        <span class="weui_cell_ft">查看宝贝<img src="/images/jiantou.png"></span>
                        {{--<div style="font-size: 0px;" class="weui_cell_ft">--}}
                        {{--<a class="weui-number weui-number-sub needsclick">-</a>--}}
                        {{--<input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1'--}}
                        {{--data-min="1" data-max="10" data-step="1">--}}
                        {{--<a class="weui-number weui-number-plus needsclick">+</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </a>
            </div>
        </div>
    </div>
        @endsection

@section('js')
    <script type="text/javascript">
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

        $(function(){
            $('.weui-number-plus').click(function(){
                upDownOperation( $(this) );
            });
            $('.weui-number-sub').click(function(){
                upDownOperation( $(this) );
            });

            //评分js
            var arr = ["1分","2分","3分","4分","5分"];
            var num = -1;
            $(".weui-rater a").mouseover(function(){
                var thisL = $(this).index();
                for(var i = 0;i < thisL;i++){
                    $(".weui-rater a").eq(i).addClass('checked');
                }
                for(var i = thisL; i < 5;i++){
                    $(".weui-rater a").eq(i).removeClass('checked');
                }
                $(this).addClass('checked');
            })
            $(".weui-rater a").mouseout(function(){
                var thisL = $(this).index();
                for(var i = thisL; i < 5;i++){
                    $(".weui-rater a").eq(i).removeClass('checked');
                }
            })
            $(".weui-rater").mouseout(function(){

                for(var i = 0; i < num;i++){
                    $(".weui-rater a").eq(i).addClass('checked');
                }
            })
            $(".weui-rater a").click(function(){
                var thisL = $(this).index();
                $("#fen").html(arr[thisL]);
                $(this).addClass('checked');
                num = thisL+1;
                console.log(num);
            })
        });
    </script>
    @endsection