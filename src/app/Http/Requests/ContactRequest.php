<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "last-name"=>["required","string","max:255"],
            "first-name"=>["required","string","max:255"],
            "email"=>["required","string","email","max:255"],
            "tel-first"=>["required","numeric"],
            "tel-middle"=>["required","numeric"],
            "tel-last"=>["required","numeric"],
            "address"=>["required","string","max:255"],
            "contact-content"=>["required"],
            "detail"=>["required","string","max:120"]
        ];
    }

    public function messages(){
        return[
            "last-name.required"=>"姓を入力してください",
            "last-name.string"=>"姓を文字列で入力してください",
            "last-name.max"=>"姓を255字以内で入力してください",
            "first-name.required"=>"名を入力してください",
            "first-name.string"=>"名を文字列で入力してください",
            "first-name.max"=>"名を255字以内で入力してください",
            "email.required"=>"メールアドレスを入力してください",
            "email.string"=>"メールアドレスを文字列で入力してください",
            "email.email"=>"有効なメールアドレスを入力してください",
            "email.max"=>"メールアドレスを255字以内で入力してください",
            "tel-first.required"=>"電話番号を記入してください",
            "tel-first.numeric"=>"電話番号を半角数字で入力してください",
            "tel-first.max"=>"電話番号を255字以内で入力してください",
            "tel-middle.required"=>"電話番号を記入してください",
            "tel-middle.numeric"=>"電話番号を半角数字で入力してください",
            "tel-middle.max"=>"電話番号を255字以内で入力してください",
            "tel-last.required"=>"電話番号を記入してください",
            "tel-last.numeric"=>"電話番号を半角数字で入力してください",
            "tel-last.max"=>"電話番号を255字以内で入力してください",
            "address.required"=>"住所を入力してください",
            "address.string"=>"住所を文字列で入力してください",
            "address.max"=>"住所を255字以内で入力してください",
            "contact-content.required"=>"お問い合わせの種類を入力してください",
            "detail.required"=>"お問合せ内容を入力してください",
            "detail.string"=>"お問合せ内容を文字列で入力してください",
            "detail.max"=>"お問合せ内容を120字以内で入力してください"
        ];
    }
}
