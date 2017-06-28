@extends('home.base')
@section('title', "购物篮")
@section('content')

    @endsection

@section('js')
    <script type="text/javascript">
        $("#a_basket").attr("href", "javascript:;");
        $("#basket_img").attr("src", "/images/basket_active.png");
    </script>
    @endsection