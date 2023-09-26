@extends("layouts.app")
    @section("css")
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    @endsection

    @section("content")
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>confirm</h2>
            </div>
            <div class="confirm__content">
                <form class="form" action="/contacts" method="post">
                    @csrf
                    <div class="confirm-table">
                        <table class="confirm-table__inner">
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お名前</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="name" value="{{$contact["name"]}}" readonly />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">性別</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="gender" value="{{$contact["gender"]}}" readonly />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">メールアドレス</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="email" value="{{$contact["email"]}}" />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">電話番号</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="tel" value="{{$contact["tel"]}}" />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">住所</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="address" value="{{$contact["address"]}}" />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">建物名</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="building" value="{{$contact["building"]}}" />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お問い合わせの種類</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="contact-content" value="{{$contact["contact-content"]}}" />
                                </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お問い合わせ内容</th>
                                <td class="confirm-table__text">
                                    <input type="text" name="detail" value="{{$contact["detail"]}}" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form__button">
                        <div class="form__button--inner">
                            <button class="form__button-submit" type="submit">送信</button>
                            <a class="form__link--correction" href="/">修正</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   @endsection