@extends('home.base')
@section('title', "购物篮")
@section('css-link')

    @endsection
@section('css')
    <style type="text/css">
        .weui_cells {
            margin-top: .3em;
        }
        .weui_check_label {
            margin: 10px;
            padding: 0 0 5px 0;
            border-bottom: 1px solid #eee;
        }
        .weui_cells_checkbox .weui_icon_checked:before {
            color: #CC0033;
            display: inline-block;
        }
        .weui_cells_checkbox .weui_check:checked+.weui_icon_checked:before {
            color: #CC0033;
        }
        [class*=" weui_icon_"]:before, [class^=weui_icon_]:before {
            line-height: 26px;
            vertical-align: bottom;
        }
        .delete-btn {
            position: absolute;
            top: 0;
            right: 10px;
            border-left: 1px solid #eee;
            padding-left: 10px;
        }
        .fast-container {
            margin: 10px 10px 0 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .fast-container img {
            width: 5em;
            vertical-align: top;
        }
        .fast-1 {
            position: relative;
            display: inline-block;
        }
        .fast-1 p {
            white-space: pre-wrap;
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 200px;
        }
        .fast-1 p:nth-child(2) {
            color:orange;
            font-weight: bolder;
        }
        .weui_cell_ft {
            position: absolute;
            bottom: -2px;
            right: 10px;
        }
    </style>
    @endsection
@section('content')
    <div id="st">
        <div class="weui_cells weui_cells_checkbox">
            <label class="weui_cell weui_check_label" for="s11">
                <div>
                    <input type="checkbox" class="weui_check" name="checkbox1" id="s11">
                    <i class="weui_icon_checked">选择</i>
                    <a class="delete-btn">删除</a>
                </div>
            </label>
            <div class="fast-container">
                <img class="preview" src="/images/hongjiu.jpg">
                <div class="fast-1">
                    <p>莫克砖石胜多负噜噜噜噜莫克砖石胜多负噜噜噜噜</p>
                    <p>￥888.00</p>
                </div>
            </div>
            <div class="fast-container">
                <div style="position: relative">
                    数量：
                    <div style="font-size: 0px;" class="weui_cell_ft">
                        <a class="weui-number weui-number-sub needsclick">-</a>
                        <input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1' data-min="0" data-max="10"
                               data-step="1">
                        <a class="weui-number weui-number-plus needsclick">+</a>
                    </div>
                    <div class="weui_cell_ft" style="display: none;"> 0</div>
                </div>
            </div>
        </div>
        <div class="weui_cells weui_cells_checkbox">
            <label class="weui_cell weui_check_label" for="s12">
                <div>
                    <input type="checkbox" class="weui_check" name="checkbox1" id="s12">
                    <i class="weui_icon_checked">选择</i>
                    <a class="delete-btn">删除</a>
                </div>
            </label>
            <div class="fast-container">
                <img class="preview" src="/images/hongjiu.jpg">
                <div class="fast-1">
                    <p>莫克砖石胜多负噜噜噜噜莫克砖石胜多负噜噜噜噜</p>
                    <p>￥888.00</p>
                </div>
            </div>
            <div class="fast-container">
                <div style="position: relative">
                    数量：88
                    <div style="font-size: 0px;" class="weui_cell_ft">
                        <a class="weui-number weui-number-sub needsclick">-</a>
                        <input pattern="[0-9]*" class="weui-number-input" style="width: 50px;" value='1' data-min="0" data-max="10"
                               data-step="1">
                        <a class="weui-number weui-number-plus needsclick">+</a>
                    </div>
                    <div class="weui_cell_ft" style="display: none;"> 0</div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('js')
    <script>
        $("#a-basket").attr("href", "javascript:;");
        //        $("#basket-img").attr("src", "/images/basket-active.png");
        $("#a-basket").css("background", "black");
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