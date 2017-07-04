@extends('home.base2')
@section('title', "购物篮")
@section('css-link')
@endsection
@section('css')
    <style type="text/css">
        body {
            color: gray;
            height: auto;
            background: url(/images/hbg.jpg);
            margin-bottom: 60px;
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

        .top-container {
            position: relative;
            margin: 10px;
            border-bottom: 1px solid #eee;
        }

        .weui_cells {
            margin-top: .5em;
            border-top: 15px solid #FF0033;
            border-radius: 10px;
        }

        .weui_cells:first-child {
            margin-top: 0;
        }

        .weui_check_label {
            padding: 0 0 5px 0;
            width: 60px;
        }

        .weui_cells_checkbox .weui_icon_checked:before {
            color: #CC0033;
            display: inline-block;
        }

        .weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before {
            color: #CC0033;
        }

        .weui_cells:after, .weui_cells:before {
            border: none;
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
            color: #FF0033;
        }

        .fast-container-line {
            border-bottom: 1px solid #eee;
        }

        .fast-container {
            margin: 10px 10px 0 10px;
            padding-bottom: 10px;
        }

        .fast-container-left {
            width: 5em;
            display: inline-block;
            vertical-align: top;
        }

        .fast-1 {
            position: absolute;
            display: inline-block;
            font-size: 15px;
            padding: 0 10px;
        }

        .fast-1 p {
            white-space: pre-wrap;
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 200px;
        }

        .price {
            color: orange;
            font-weight: bolder;
            font-size: 1.3em;
        }

        .total {
            font-size: 1em;
        }

        .btn-numbox {
            overflow: hidden;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .btn-numbox li {
            float: left;
        }

        .btn-numbox li .number,
        .btn-numbox .count {
            overflow: hidden;
        }

        .btn-numbox .count .num-jian,
        .input-num,
        .num-jia {
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 25px;
            text-align: center;
            font-size: 18px;
            color: #999;
            cursor: pointer;
            border: 1px solid #e6e6e6;
        }

        .count a {
            display: inline-block;
            height: 28px;
        }

        .btn-numbox .count .input-num {
            width: 58px;
            height: 28px;
            color: #333;
            border-left: 0;
            border-right: 0;
        }

        .weui-mask {
            position: fixed;
            z-index: 1000;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .weui-dialog {
            position: fixed;
            z-index: 5000;
            width: 80%;
            max-width: 300px;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: #FFFFFF;
            text-align: center;
            border-radius: 3px;
            overflow: hidden;
        }

        .weui-dialog__hd {
            padding: 1.3em 1.6em 0.5em;
        }

        .weui-dialog__title {
            font-weight: 400;
            font-size: 18px;
        }

        .weui-dialog__bd {
            padding: 0 1.6em 0.8em;
            min-height: 40px;
            font-size: 15px;
            line-height: 1.3;
            word-wrap: break-word;
            word-break: break-all;
            color: #999999;
        }

        .weui-dialog__bd:first-child {
            padding: 2.7em 20px 1.7em;
            color: #353535;
        }

        .weui-dialog__ft {
            position: relative;
            line-height: 48px;
            font-size: 18px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            border-top: 1px solid #eee;
        }

        .weui-dialog__btn {
            display: block;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            color: #3CC51F;
            text-decoration: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            position: relative;
        }

        .weui-dialog__btn_default {
            color: #353535;
        }

        .weui-dialog__btn_primary {
            color: #0BB20C;
        }

        .footer-container {
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            background: #ffffff;
            line-height: 50px;
            height: 50px;
            padding-left: 10px;
        }

        .footer-l, .footer-r {
            display: inline-block;
        }

        .footer-r {
            color: #ffffff;
            font-weight: bold;
            position: absolute;
            height: 50px;
            right: 0;
            padding: 0 30px;
            background: #FF0033;
        }

        a:active {
            color: #ffffff;
            background: black;
        }
    </style>
@endsection
@section('content')
    <!--BEGIN dialog1-->
    <div class="js_dialog" id="iosDialog1" style="display: none;">
        <div class="weui-mask"></div>
        <div class="weui-dialog">
            <div class="weui-dialog__hd">
                {{--<strong class="weui-dialog__title">提示</strong>--}}
                <img src="/images/guidi.jpg">
            </div>
            <div class="weui-dialog__bd">您确定要删除吗?</div>
            <div class="weui-dialog__ft">
                <div class="weui-dialog__btn weui-dialog__btn_default" onclick="removeItem()">是的</div>
                <div class="weui-dialog__btn weui-dialog__btn_primary" onclick="hideDialog()">我再想想</div>
            </div>
        </div>
    </div>
    <!--END dialog1-->
    <div id="st">
        @foreach($items as $item)
            <div class="weui_cells weui_cells_checkbox">
                <div class="top-container">
                    <label class="weui_cell weui_check_label" for="{{ $item['id'] }}">
                        <div>
                            <input type="checkbox" class="weui_check" name="item" value="1" id="{{ $item['id'] }}" onclick="selectItem(this, '{{ $item['id'] }}')">
                            <i class="weui_icon_checked">选择</i>
                        </div>
                    </label>
                    <a class="delete-btn" onclick="showDialog({{ $item['id'] }})">删除</a>
                </div>
                <div class="fast-container fast-container-line">
                    <img class="fast-container-left" src="/images/hongjiu.jpg">

                    <div class="fast-1">
                        <p>{{ $item['name'] }}</p>
                        <span class="price">￥<span
                                    id="price_{{ $item['id'] }}">{{ number_format($item['price'], 2, '.', '') }}</span></span>
                        @if ($item['attributes']['origin_price'] == $item->price)
                        @else
                            <span style="text-decoration: line-through">￥{{ $item['attributes']['origin_price'] }}</span>
                        @endif
                    </div>
                </div>
                <div class="fast-container">
                    <div style="position: relative">
                        <span class="fast-container-left">数量：<span
                                    id="num_{{ $item['id'] }}">{{ $item['quantity'] }}</span></span>
                        小计：<span
                                id="xiaoji_{{ $item['id'] }}">{{ number_format($item['price'] * $item['quantity'], 2, '.', '') }}</span>
                        <ul class="btn-numbox">
                            <ul class="count">
                                <li onclick="sub({{ $item['id'] }})"><a><span id="num-jian"
                                                                              class="num-jian">-</span></a></li>
                                <li><input type="text" class="input-num" id="input-{{ $item['id'] }}"
                                           value="{{ $item['quantity'] }}" readonly/>
                                </li>
                                <li onclick="plus({{ $item['id'] }})"><a><span id="num-jia" class="num-jia">+</span></a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="footer-container">
            <div class="footer-l">
                <span style="padding-right: 20px;">已选择：<span id="selected">0</span></span>
                <span class="price total">合计：<span id="total">0</span></span>
            </div>
            <a class="footer-r" onclick="toCommit()">
                前往结算
            </a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var sid;
        $("#a-basket").attr("href", "javascript:;");
//        $("#basket-img").attr("src", "/images/basket-active.png");
        $("#a-basket").css("background", "black");
        function plus(id) {
            var input_num = document.getElementById("input-" + id);
            var flat = $("#" + id).val();
            input_num.value = parseInt(input_num.value) + 1;
            $.ajax({
                url: "/service/cart/add",
                type: "get",
                data: {id: id, num: 1},
                timeout: 3000,
                dataType: "json",
                success: function (data) {
                    if (data.status != 0) {
                        $(".toptips").show();
                        $(".toptips span").html("服务器出小差了，请稍后再试");
                        setTimeout(function () {
                            $(".toptips").hide();
                        }, 2000);
                        return false;
                    }
                    if (data.status == 0) {
                        var new_count = parseFloat($("#xiaoji_" + id).html()) + parseFloat($("#price_" + id).html());
                        $("#xiaoji_" + id).html(returnFloat(new_count));
                        $("#num_" + id).html(input_num.value);
                        if (flat == 1) {
                            return;
                        }
                        if (flat == 0) {
                            var tAll = parseFloat($("#total").html());
                            var iPrice = parseFloat($("#price_" + id).html());
                            var nAll = tAll + iPrice;
                            $("#total").html(returnFloat(nAll));
                        }
                    }
                },
                error: function (xhr, status, error) {
//                    console.log(xhr);
//                    console.log(status);
//                    console.log(error);
                }
            });
        }

        function returnFloat(value) {
            var value = Math.round(parseFloat(value) * 100) / 100;
            var xsd = value.toString().split(".");
            if (xsd.length == 1) {
                value = value.toString() + ".00";
                return value;
            }
            if (xsd.length > 1) {
                if (xsd[1].length < 2) {
                    value = value.toString() + "0";
                }
                return value;
            }
        }

        function sub(id) {
            var input_num = document.getElementById("input-" + id);
            var flat = $("#" + id).val();
            if (input_num.value == 1) {
//                input_num.value = 1;
                return false;
            } else {
                input_num.value = parseInt(input_num.value) - 1;
                $.ajax({
                    url: "/service/cart/inc",
                    type: "get",
                    data: {id: id, num: 1},
                    timeout: 3000,
                    dataType: "json",
                    success: function (data) {
                        if (data.status != 0) {
                            $(".toptips").show();
                            $(".toptips span").html("服务器出小差了，请稍后再试");
                            setTimeout(function () {
                                $(".toptips").hide();
                            }, 2000);
                            return false;
                        }
                        if (data.status == 0) {
                            var new_count = parseFloat($("#xiaoji_" + id).html()) - parseFloat($("#price_" + id).html());
                            $("#xiaoji_" + id).html(returnFloat(new_count));
                            $("#num_" + id).html(input_num.value);
                            if (flat == 1) {
                                return;
                            }
                            if (flat == 0) {
                                var tAll = parseFloat($("#total").html());
                                var iPrice = parseFloat($("#price_" + id).html());
                                var nAll = tAll - iPrice;
                                $("#total").html(returnFloat(nAll));
                            }
                        }
                    },
                    error: function (xhr, status, error) {
//                    console.log(xhr);
//                    console.log(status);
//                    console.log(error);
                    }
                });
            }
        }

        function hideDialog() {
            $("#iosDialog1").css("display", "none");
        }

        function showDialog(id) {
            sid = id;
            $("#iosDialog1").css("display", "block");
        }

        function removeItem() {
            $.ajax({
                url: "/service/cart/remove",
                type: "get",
                data: {id: sid},
                timeout: 3000,
                dataType: "json",
                success: function (data) {
                    if (data.status != 0) {
                        $(".toptips").show();
                        $(".toptips span").html("服务器出小差了，请稍后再试");
                        setTimeout(function () {
                            $(".toptips").hide();
                        }, 2000);
                        return false;
                    }
                    if (data.status == 0) {
                        location.reload();
                    }
                },
                error: function (xhr, status, error) {
//                    console.log(xhr);
//                    console.log(status);
//                    console.log(error);
                }
            });
        }

        function selectItem(obj, id) {
            var flat = $(obj).val();
            var tSel = parseFloat($("#selected").html());
            var tAll = parseFloat($("#total").html());
            var tNum = parseFloat($("#xiaoji_" + id).html());
            if (flat == 1) {
                var nAll = tAll + tNum;
                $("#total").html(returnFloat(nAll));
                $("#selected").html(tSel + 1);
                $(obj).val(0);
                return;
            }
            if (flat == 0) {
                var nAll = tAll - tNum;
                $(obj).val(1);
                $("#total").html(returnFloat(nAll));
              $("#selected").html(tSel - 1);
                return;
            }

        }

        function toCommit() {
            if ($("input[name=item]:checked").length == 0) {
                $(".toptips").show();
                $(".toptips span").html("请先选择商品");
                setTimeout(function () {
                    $(".toptips").hide();
                }, 2000);
                return false;
            }
        }
    </script>
@endsection