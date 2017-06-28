@extends('home.base')
@section('title', "个人中心")
@section('content')

@endsection

@section('js')
    <script type="text/javascript">
        $("#a_me").attr("href", "javascript:;");
        $("#me_img").attr("src", "/images/me_active.png");
    </script>
@endsection