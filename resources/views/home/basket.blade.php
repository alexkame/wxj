@extends('home.base')
@section('title', "购物篮")
@section('content')

    @endsection

@section('js')
    <script type="text/javascript">
        $("#a-basket").attr("href", "javascript:;");
//        $("#basket-img").attr("src", "/images/basket-active.png");
        $("#a-basket").css("background", "black");
    </script>
    @endsection