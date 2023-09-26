@extends("layouts.app")

@section("css")
<link rel="stylesheet" href="{{asset("css/admin.css")}}">
@endsection

@section("content")
<div class="admin-title">
    <h1 class="admin-title__text">
        admin
    </h1>
</div>
<div class="admin__content">
    <div class="search">

    </div>
    <div class="pagenation">

    </div>
    <div class="customer__info">
        <table>
            <tr class="table__format">
                <th class="format__name">お名前</th>
                <th class="format__gender">性別</th>
                <th class="format__mail">メールアドレス</th>
                <th class="format__content">お問い合わせの種類</th>
                <th class="detail__button"></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr>
                <!-- <td><input type="text" name="name" value="{{$contact["name"]}}" /></td> -->
                <td>{{$contact["name"]}}</td>
                <td>{{$contact["gender"]}}</td>
                <td>{{$contact["email"]}}</td>
                <td>{{$contact["contact-content"]}}</td>
                <td class="detail-modal">
                    <a href="#{{$contact["id"]}}" class="modal-button">
                        詳細
                    </a>

                    <div class="modal-wrapper" id="{{$contact["id"]}}">
                        <a href="#!" class="modal-overlay"></a>
                        <div class="modal-window">
                            <div class="modal-content">
                                <table>
                                    <tr>
                                        <th>お名前</th>
                                        <td>{{$contact["name"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>性別</th>
                                        <td>{{$contact["gender"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>{{$contact["email"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>{{$contact["tel"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>住所</th>
                                        <td>{{$contact["address"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>建物名</th>
                                        <td>{{$contact["building"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>お問合せの種類</th>
                                        <td>{{$contact["contact-content"]}}</td>
                                    </tr>
                                    <tr>
                                        <th>お問合せ内容</th>
                                        <td>{{$contact["detail"]}}</td>
                                    </tr>
                                </table>
                            </div>
                            <a href="#!" class="modal-close"><i class="far fa-times-circle"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection