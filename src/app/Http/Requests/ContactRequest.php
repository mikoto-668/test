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
             'first-name' => ['required', 'string'],
             'last-name' => ['required', 'string'],
             'gender' =>['required'],
             'email' => ['required', 'string', 'email'],
             'tel-1' => ['required', 'numeric','digits_between:3,5'],
             'tel-2' => ['required', 'numeric','digits_between:3,5'],
             'tel-3' => ['required', 'numeric','digits_between:3,5'],
             'address' => ['required'],
             'category' => ['required'],
             'content' => ['required','max:120']

      ];
    }
    public function messages()
     {
         return [
             'first-name.required' => '性を入力してください',
             'last-name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'tel-1.required' => '電話番号を入力してください',
             'tel-2.required' => '電話番号を入力してください',
             'tel-3.required' => '電話番号を入力してください',
             'tel-1.digits_between:3,5' => '電話番号は５桁までの数字で入力してください',
             'tel-2.digits_between:3,5' => '電話番号は５桁までの数字で入力してください',
             'tel-3.digits_between:3,5' => '電話番号は５桁までの数字で入力してください',
             'address.required' => '住所を入力してください',
             'category.required' => 'お問い合わせの種類を選択してください',
             'content.required' => 'お問合せ内容を入力してください',
             'content.max:120' => 'お問合せ内容は120文字以内で入力してください',
         ];
     }
}
