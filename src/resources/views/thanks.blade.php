@extends("layouts.app")

@section("css")
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
    @endsection

    @section("content")
        <div class="backside-thanks">
            Thank you
        </div>
        <div class="frontside-thanks">
            お問合せありがとうございました
        </div>
        <form action="/" method="get" class="home-form">
            <button type="submit">HOME</button>
        </form>
    @endsection