@extends("layouts.app")

@section("css")
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection



    @section("content")
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name">
                            <input type="text" name="last-name" placeholder="苗字" value="{{old("last-name")}}" />
                            <input type="text" name="first-name" placeholder="テスト太郎" value="{{old("first-name")}}" />
                        </div>
                        <div class="form__error name__error">
                            @error("last-name")
                            {{$message}}
                            @enderror
                            @error("first-name")
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-button">
                            <input type="radio" name="gender" value="男性" checked />
                            <span>男性</span>
                            <input type="radio" name="gender" value="女性" />
                            <span>女性</span>
                            <input type="radio" name="gender" value="その他" />
                            <span>その他</span>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{old("email")}}" />
                        </div>
                        <div class="form__error">
                            @error("email")
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <input type="tel" name="tel-first" placeholder="090" value="{{old("tel-first")}}" />
                            <span class="midlle-line">-</span>
                            <input type="tel" name="tel-middle" placeholder="0000" value="{{old("tel-middle")}}" />
                            <span class="midlle-line">-</span>
                            <input type="tel" name="tel-last" placeholder="1234" value="{{old("tel-last")}}" />
                        </div>
                        <div class="form__error">
                            @error("tel-first")
                            {{$message}}
                            @enderror
                            @error("tel-middle")
                            {{$message}}
                            @enderror
                            @error("tel-last")
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old("address")}}" />
                        </div>
                        <div class="form__error">
                            @error("address")
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>

                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <select name="contact-content">
                            <option value="選択してください" selected>選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder="お問合せ内容をご記載ください" value="{{old("detail")}}"></textarea>
                        </div>
                        <div class="form__error">
                            @error("detail")
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
            <a href="/register">登録画面</a>
        </div>
@endsection