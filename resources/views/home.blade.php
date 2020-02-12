@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="/svg/coligramlogo_colorlarge.svg" alt="">
        </div>
        <div class="col-9">
            <div class="pt-5">
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>153</strong> posts
                </div>
                <div class="pr-5">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>212</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">
                coligram.org
            </div>
            <div class="">
                A global community of creators, developers, and builders for tomorrows future!
            </div>
            <div class="">
                <a href="www.coligram.org">www.coligram.org</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://scontent-dub4-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/68802217_217178312580463_2468614368061594186_n.jpg?_nc_ht=scontent-dub4-1.cdninstagram.com&amp;_nc_cat=107&amp;_nc_ohc=3-0LL-eyB-AAX85pAQ2&amp;oh=26e78674c1f2d419491df927c4452e14&amp;oe=5EDCC24E">
            </div>
            <div class="col-4">
                <img src="https://scontent-dub4-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/40495014_2056009121379771_2525234435524132864_n.jpg?_nc_ht=scontent-dub4-1.cdninstagram.com&amp;_nc_cat=103&amp;_nc_ohc=xGRCmrZwDmwAX-QaUNg&amp;oh=492784976d4582d9ca0223e462cf8b54&amp;oe=5EFDE7EE ">
            </div>
            <div class="col-4">
                <img src="https://scontent-dub4-1.cdninstagram.com/v/t51.2885-15/e35/c133.0.813.813a/s320x320/28764830_157602208390902_5922597899312562176_n.jpg?_nc_ht=scontent-dub4-1.cdninstagram.com&amp;_nc_cat=106&amp;_nc_ohc=fAfEl0myeWAAX8mF1lG&amp;oh=0079ba6316675d4ebbc1841b07186c1e&amp;oe=5F02F618">
            </div>
        </div>
    </div>
</div>
@endsection
