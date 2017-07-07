@extends('home.base2')
@section('title', "订单确认")
@section('css-link')

    @endsection
@section('css')
<style type="text/css">
    body {
        color: #3d4145;
        font-family: "黑体";
        margin-top: 50px;
    }
    a {
        display: inline-block;
    }
    a:active {
        color: #ffffff;
        background: black;
    }
    .top-bar {
        position: fixed;
        background: #ffffff;
        top: 0;
        width: 100%;
        box-shadow: 0 0 6px #ddd;
        z-index: 9999;
    }
    .top-bar img {
        width: 2em;
        vertical-align: bottom;
        padding: 5px;
    }
    .top-bar a {
        line-height: 42px;
    }
    .show-title {
        padding: 10px 10px 10px 0;
        /*font-weight: bold;*/
        font-size: 15px;
        background: #ffffff;
    }
    .show-title img {
        width: 1.5em;
        vertical-align: top;
    }
    img {
        width: 100%;
        vertical-align: middle;
    }
    .container {
        width: 95%;
        margin: 0 auto;
        position: relative;
    }
    .container-line {
        border-bottom: 1px solid #eee;
    }
    .content {
        /*margin: 0 0 .5em 0;*/
        padding: .5em;
        background: #ffffff;
        position: relative;
        border: 2px dashed #ddd;
        display: flex;
        display: -webkit-flex;
        font-size: .9em;
    }
    .contents {
        /*margin: 0 0 .5em 0;*/
        padding: .5em;
        background: #ffffff;
        position: relative;
        border-bottom: 1px dashed rgb(228, 228, 228);
        display: flex;
        display: -webkit-flex;
        line-height: 1.3em;
        font-size: .9em;
    }
    .contents:first-child {
        padding-top: 0;
        /*border-bottom: none;*/
        /*border-radius: 10px 10px 0 0;*/
    }
    .contents:last-child {
        /*border-top: none;*/
        /*border-radius: 0 0 10px 10px;*/
        border-bottom: none;
    }
    .dizhi-container {
        position: absolute;
        top: 10px;
        left: 10px;
        line-height: 1.5em;
        margin-right: 10px;
        font-size: .9em;
    }
    .dizhi-container p {
        padding-bottom: 5px;
    }
    .datouzhen {
        width: 36px;
        position: absolute;
        right: -5px;
        top: -10px;
    }
    .explain, .leave-container {
        background: #ffffff;
        padding: 0 3px;
    }
    .explain {
        color: gray;
        font-size: .8em;
    }
    .input-leave {
        height: 2.8em;
        border: 1px solid #eeeeee;
        outline: none;
        border-radius: 5px;
        width: 100%;
        transition: border .5s;
        margin-bottom: 5px;
    }
    .input-leave:hover {
        border: 1px solid #62b501;
    }
    .benefit-container {
        display: block;
        position: relative;
        margin: 5px 0;
    }
    .benefit-container img:last-child {
        float: right;
        width: 1.5em;
    }
    #mask {
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
    }
    #benefit-select-container {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: #ffffff;
        display: flex;
        display: -webkit-flex;
    }
    #youhuiquan-show-container {
        position: fixed;
        bottom: 3em;
        width: 100%;
        background: #ffffff;
    }
    .select-btn {
        flex:  1 0 0;
        width: 100%;
        line-height: 3em;
        background: #FF0033;
        text-align: center;
        color: #ffffff;
    }
    .weui_cells {
        margin-top: 0;
    }
    .last-container {
        font-size: .9em;
        margin-top: 5px;
        background: #ffffff;
        padding: 0 5px 0 5px;
    }
    .last-container-total {
        position: absolute;
        right: 5px;
        line-height: 0;
        bottom: 10px;
        color: orange;
    }
    .pay-btn-container {
        text-align: center;
        background: #ffffff;
        padding-top: 20px;
    }
    .weui_btn {
        display: inline-block;
        width: 80%;
    }
    .item-p {
        position: absolute;
        bottom: 10px;
        color: gray;
    }
    .item-p span {
        padding-right: 10px;
    }
</style>
    @endsection
@section('content')
    <div class="top-bar">
        <a href="/at/m"><img src="/images/icon-home.png">返回店铺</a>
    </div>
    <div class="container">
        <p class="show-title"><img src="/images/icon-liuyan.png">留言信息</p>
        <div class="leave-container">
            <input class="input-leave" name="leave" value="" placeholder="给卖家留言...">
        </div>
    </div>
    <div class="container">
        <p class="show-title"><img src="/images/icon-goods.png">商品信息</p>
        <img class="datouzhen" src="/images/datouzhen.png">
    </div>
    <div class="container">
        @foreach($items as $item)
        <div class="contents">
            <div style="flex: 1 0 0">
                <img src="{{ $item['attributes']['preview'] }}">
            </div>
            <div style="flex: 3 0 0; margin-left: 5px;">
                <p>{{ $item['name'] }}</p>
                <p class="item-p">价格：￥<span style="color: orange">{{ number_format($item['price'], 2, '.', '')}}</span><span>数量：{{ $item['quantity'] }}</span></p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="container">
        <p class="show-title"><img src="/images/icon-dingwei.png">
            收货信息
            <a href="" style="float:right;">管理地址</a>
        </p>
    </div>
    <div class="container">
        <img src="/images/dizhibg.png">
        <div class="dizhi-container">
            <p>
                <spna>收货人：晨晨晨</spna>
                <span>联系电话：15622965560</span>
            </p>
            <p>城市：</p>
            <p>详细地址：黎明骑士2009珍酿原酒进口红酒男爵古堡干红葡萄干红干红酒红酒礼盒木盒装750ml</p>
        </div>
    </div>
    <div class="container container-line">
        <div class="show-title">
            <img src="/images/icon-pay-online.png" style="width: 2em;vertical-align: middle;">支付方式
            <span style="float:right;">在线支付</span>
        </div>
    </div>
    <div class="container container-line">
        <div class="show-title">
            <img src="/images/icon-kuaidi.png" style="width: 2em;vertical-align: middle;">快递服务
        </div>
        <div class="explain">公司指定快递，少数偏远地区以及村，可能出现快件自提现象，敬请谅解。快递物流有效期一个月，请在发货后7天内查询物流信息。</div>
    </div>
    <div class="container">
        <a class="show-title benefit-container" onclick="selectBenefitCard()">
            <img src="/images/icon-youhui.png">
            <img src="/images/jiantou2.png">
            使用优惠
        </a>
    </div>
    <div class="container">
        <div class="last-container">
            <p>优惠金额：￥<span id="card_value">20</span></p>
            <p>运费：包邮</p>
            <p class="last-container-total"><span style="font-weight: bold">需付:</span><span id="total_price" style="font-size: 1.5em;color: orange">￥{{ $total }}</span></p>
        </div>
    </div>
    <div class="container pay-btn-container">
        <a href="javascript:;" class="weui_btn weui_btn_primary" onclick="wechatPay()">微信支付</a>
    </div>
    <div id="mask">
        <div id="youhuiquan-show-container">
            <p style="padding-left: 10px">请选择优惠券</p>
            <div class="weui_cells weui_cells_checkbox">
                <label class="weui_cell weui_check_label" for="s11">
                    <div class="weui_cell_hd">
                        <input type="checkbox" class="weui_check" name="checkbox1" value="20" id="s11">
                        <i class="weui_icon_checked"></i>
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>关注福利20元优惠券</p>
                    </div>
                </label>
                <label class="weui_cell weui_check_label" for="s12">
                    <div class="weui_cell_hd">
                        <input type="checkbox" name="checkbox1" value="50" class="weui_check" id="s12">
                        <i class="weui_icon_checked"></i>
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>年中大促50元优惠券</p>
                    </div>
                </label>
            </div>
        </div>
        <div id="benefit-select-container">
            <a class="select-btn" onclick="canselUseCard()">取消</a>
            <a class="select-btn" onclick="commitUseCard()">确定使用</a>
        </div>
    </div>
    @endsection

@section('js')
    <script type="text/javascript">
        function selectBenefitCard() {
            $("#mask").show();
        }
        function canselUseCard() {
            $(":checkbox").prop("checked", false);
            $("#mask").hide();
        }
        function commitUseCard() {
            var cart_num = $("input[name='checkbox1']:checked").length;
            if (cart_num >= 2) {
                alert("只能选中一中优惠券呢");
            }
            if (cart_num == 1) {
                var card_value = parseFloat($("#card_value").html());
                var used_card_price = parseFloat($("#total_price").html()) - card_value;
                $("#total_price").html(used_card_price);
                $("#mask").hide();
            }

        }

        function wechatPay() {
            var card_id = $("input[name=checkbox1]:checked").val();
            console.log(card_id);
            {{--$.ajax({--}}
                {{--url: '/service/wechat/pay',--}}
                {{--type: 'post',--}}
                {{--data: {ids: "{{ $items }}}", card_id:   },--}}
                {{--success: function() {--}}

                {{--},--}}
                {{--error: function() {--}}

                {{--}--}}
            {{--});--}}
        }
    </script>
    @endsection